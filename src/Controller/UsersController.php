<?php
namespace App\Controller;

use App\Controller\AuthController; 
use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Routing\Router;
use Cake\Event\Event;
use Cake\Mailer\Email;
use Cake\I18n\Time;
use Cake\Utility\Security;
use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\TableRegistry; 
use Cake\Network\Http\Client;
use App\Classes\PolygonHelper;

$polyHelper = new PolygonHelper();

define('FB_APPID', $polyHelper->readConfig('FacebookLogin','loginconfig')['PublicKey']);
define('FB_APPSECRET', $polyHelper->readConfig('FacebookLogin','loginconfig')['SecretKey']);
define('GG_CLIENTID', $polyHelper->readConfig('GoogleLogin','loginconfig')['PublicKey']);
define('GG_CLIENTSECRET', $polyHelper->readConfig('GoogleLogin','loginconfig')['SecretKey']);
define('ALPHABET', 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890');
define('KEY', 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890');

class UsersController extends AuthController
{
    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);

        $this->Auth->allow([
            'logout', 
            'facebooklogin', 
            'facebookLoginCallback',
            'polygonLogin',
            'polygonRegister'
        ]);
    }

    public function login(){
        $this->viewBuilder()->layout('homepage');  
        $this->Auth->logout();   
    }   

    public function facebooklogin() {
        require_once ROOT . DS . 'vendor' .DS.'autoload.php';
        $this->request->session()->start();
        $this->autoRender = false;

        $fb = new \Facebook\Facebook([
          'app_id' => FB_APPID,
          'app_secret' => FB_APPSECRET,
          'default_graph_version' => 'v2.10',
        ]);
        $helper = $fb->getRedirectLoginHelper();
        $permissions = ['email', 'user_likes'];
        
        // $callbackurl = 'http://localhost/Alofood/users/facebookLoginCallback';
        $callbackUrl = Router::url(['controller' => 'Users', 'action' => 'facebookLoginCallback', '_full' => true]);
        // $callbackurl = Router::url('/homepage/facebookLoginCallback', true);
        $loginUrl = $helper->getLoginUrl($callbackUrl, $permissions);
        $this->redirect($loginUrl);
    }

    public function facebookLoginCallback() {
        $session = $this->request->session();
        $this->autoRender = false;
        $this->request->session()->start();

        $loginHistoryTB = TableRegistry::get('LoginHistories');
        $locationTB = TableRegistry::get('Location');

        $fb = new \Facebook\Facebook([
          'app_id' => FB_APPID,
          'app_secret' => FB_APPSECRET,
          'default_graph_version' => 'v2.10',
        ]);
        $helper = $fb->getRedirectLoginHelper();

        try {
            $accessToken = $helper->getAccessToken();
        } catch(Facebook\Exceptions\FacebookResponseException $e) {
            echo 'Graph returned an error: ' . $e->getMessage();
            return;
        } catch(Facebook\Exceptions\FacebookSDKException $e) {
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            return;
        }

        if (!isset($accessToken)) {
            if ($helper->getError()) {
                header('HTTP/1.0 401 Unauthorized');
                echo "Error: " . $helper->getError() . "\n";
                echo "Error Code: " . $helper->getErrorCode() . "\n";
                echo "Error Reason: " . $helper->getErrorReason() . "\n";
                echo "Error Description: " . $helper->getErrorDescription() . "\n";
            } else {
                header('HTTP/1.0 400 Bad Request');
                echo 'Bad request';
            }
          exit;
        }

        // The OAuth 2.0 client handler helps us manage access tokens
        $oAuth2Client = $fb->getOAuth2Client();

        // Get the access token metadata from /debug_token
        $tokenMetadata = $oAuth2Client->debugToken($accessToken);

        // Validation (these will throw FacebookSDKException's when they fail)
        $tokenMetadata->validateAppId(FB_APPID); // Replace {app-id} with your app id
        // If you know the user ID this access token belongs to, you can validate it here
        //$tokenMetadata->validateUserId('123');
        $tokenMetadata->validateExpiration();

        if (! $accessToken->isLongLived()) {
            // Exchanges a short-lived access token for a long-lived one
            try {
                $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
            } catch (Facebook\Exceptions\FacebookSDKException $e) {
                echo "<p>Error getting long-lived access token: " . $helper->getMessage() . "</p>\n\n";
                exit;
            }
        }
        $session->write('fb_access_token', (string) $accessToken);
        
        $fb_access_token = $session->read('fb_access_token');

        $session->delete('fb_access_token');

        if (!empty($fb_access_token)) {
            try {
                // Returns a `Facebook\FacebookResponse object
                $response = $fb->get('/me?fields=email,name,gender,first_name,last_name,picture.type(large),link', $fb_access_token);
            } catch(Facebook\Exceptions\FacebookResponseException $e) {
                echo 'Graph returned an error: ' . $e->getMessage();
                exit;
            } catch(Facebook\Exceptions\FacebookSDKException $e) {
                echo 'Facebook SDK returned an error: ' . $e->getMessage();
                exit;
            }
            $usernode = $response->getGraphUser();
  
            if (!empty($usernode)) {
                $query = $this->Users->findByEmail($usernode->getProperty('email'))
                        ->toArray();

                if(!empty($query) && $query[0]['flag'] == 9){
                    return $this->redirect([
                        'prefix' => false,
                        'controller'=>'Pages',
                        'action' => 'index'
                    ]);
                }

                $ip = $this->request->clientIp();
                $http = new Client();
                $api_url = 'http://ip-api.io/api/json/'.$ip;
                $responseGET = @file_get_contents($api_url);
                $geoAPI = json_decode($responseGET);
                
                $new_user_id = isset($query[0]['id']) ? isset($query[0]['id']) : 0;

                if (empty($query)) {     
                                   
                    $locationResgiter = $locationTB->newEntity();
                    $locationResgiter = $this->_patchLocationEntity($locationResgiter,$geoAPI);

                    if($locationIDCallback = $locationTB->save($locationResgiter)){

                        //Kiểm tra chức năng đăng ký mới có cho phép hay không
                        Configure::load('appsettings');
                        if(!Configure::read('Register')){
                            return $this->redirect(['controller'=>'Maintenance','action'=>'serviceNotReady']);
                        }
                        //Kết thúc kiểm tra

                        $hasher = new DefaultPasswordHasher();
                        $randPassword = AuthController::randomPassword();                      
                        $newUser = $this->Users->newEntity();               
                        $newUser->username =  'FB'.$usernode->getProperty('id');  
                        $newUser->fullname =  $usernode->getProperty('name');
                        $newUser->email = $usernode->getProperty('email');
                        $newUser->avatar = $usernode->getProperty('picture')['url'];
                        $newUser->facebook = $usernode->getProperty('id');                   
                        $newUser->facebook_link = $usernode->getProperty('link');
                        $newUser->sex = self::_getSex($usernode->getProperty('gender'));
                        $newUser->location = $locationIDCallback->location_id;
                        $newUser->flag = 1;
                        $newUser->verify = 1;
                        $newUser->isadmin = 0;
                        $newUser->sociallogged = 1;
                        $newUser->created = Time::now();
                        $newUser->updated = Time::now();
                        $newUser->password = $hasher->hash($randPassword);

                        $new_user_id = $this->Users->save($newUser);
                        $new_user_id = $new_user_id->id;
    
                        $this->Auth->setUser($newUser->toArray());
                    }
                    
                } else {
                    $this->Auth->setUser($query[0]->toArray());
                }
                
                if($ip != 'localhost' && $ip != '::1'){ 
                    $login_history = $loginHistoryTB->newEntity();
                    $login_history->ip_address = $ip;
                    $login_history->user_id = $new_user_id;
                    $login_history->created = Time::now();               
                    $login_history = $this->_patchLocationEntity($login_history,$geoAPI);
                    $loginHistoryTB->save($login_history);
                }
                return $this->redirect(['controller' => 'Pages', 'action' => 'index']);
            } else {
                // $this->Flash->error(__('Facebook loi cmnr!!!'));
                return $this->redirect(['controller' => 'Users', 'action' => 'login']);
            }
        }
    }
    
    public function logout() {   
        if(!empty($_COOKIE["rememberMe"])){
            $this->Cookie->delete('rememberMe'); 
        }    
        return $this->redirect($this->Auth->logout());
    }

    public function polygonLogin(){
        $this->autoRender = false;
        $data = $this->request->data();

        $hasher = new DefaultPasswordHasher();

        $response = [
            'code' => 500,
            'msg' => 'Thao tác thất bại'
        ];

        
        $userTB = TableRegistry::get('users');
        $user = $userTB->find()->where([
            'username' => $data['username'],
            'flag' => 1
        ])->orWhere(['email' => $data['username']])
        ->first();

        if(!empty($user)){
            if($hasher->check($data['pwd'],$user['password'])){
                $this->Auth->setUser($user);
                self::_logLoginHistory($user['id'],self::_getGeoLocation());
       
                $response = [
                    'code' => 200,
                    'msg' => 'Thành công',
                    'referer' => '/'
                ];
            }         
        }

        $this->response->type('json');
        $this->response->body(json_encode($response,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }

    public function polygonRegister(){
        $this->autoRender = false;
        $data = $this->request->data();
        $session = $this->request->session();
        $hasher = new DefaultPasswordHasher();
        $flag_check = false;

        $response = [
            'code' => 500,
            'msg' => 'Thao tác thất bại'
        ];

        if($session->read('captcha_code') !== $data['captcha_code']){
            $response = [
                'code' => 701,
                'msg' => 'Nhập sai captcha!'
            ];
            $flag_check = true;
        }

        if(!$flag_check && (empty($data['name']) || empty('email') || empty('username') || empty('repwd1') || empty('repwd2'))){
            $response = [
                'code' => 702,
                'msg' => 'Không được bỏ trống!'
            ];
            $flag_check = true;
        }

        if(!$flag_check && ($data['repwd1'] != $data['repwd2'])){
            $response = [
                'code' => 703,
                'msg' => 'Mật khẩu không giống nhau!'
            ];
            $flag_check = true;
        }
        
        $userTB = TableRegistry::get('users');
        $user = $userTB->find()->where([
            'username' => $data['username'],
            'flag' => 1
        ])->orWhere(['email' => $data['email']])
        ->first();

        if(!$flag_check && !empty($user)){
            $response = [
                'code' => 704,
                'msg' => 'Tài khoản hoặc Email đã được sử dụng!'
            ];
            $flag_check = true;
        }
        
        if(!$flag_check && empty($user) ){
            $user = $userTB->newEntity();
            $user->username = $data['username'];
            $user->email = $data['email'];
            $user->password = $hasher->hash($data['repwd1']);
            $user->phone = $data['phone'];
            $user->fullname = $data['name'];

            if($userTB->save($user)){
                $response = [
                    'code' => 200,
                    'msg' => 'Tạo tài khoản thành công!'
                ];
            }
        }

        $this->response->type('json');
        $this->response->body(json_encode($response,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }

    private function _getSex($sexText){
        switch($sexText){
            case 'male' :
                return 1;
            case 'female':
                return 2;
            default:
                return 3;
        }
    }

    private function _getGeoLocation(){
        $ip = $this->request->clientIp();
        $http = new Client();
        $api_url = 'http://ip-api.io/api/json/'.$ip;
        $responseGET = @file_get_contents($api_url);
        $geoAPI = json_decode($responseGET);
        return $geoAPI;
    }

    private function _logLoginHistory($userid,$geoAPI){
        $ip = $this->request->clientIp();
        $loginHistoryTB = TableRegistry::get('LoginHistories');
        if($ip != 'localhost' && $ip != '::1'){ 
            $login_history = $loginHistoryTB->newEntity();
            $login_history->ip_address = $ip;
            $login_history->user_id = $userid;
            $login_history->created = Time::now();               
            $login_history = $this->_patchLocationEntity($login_history,$geoAPI);
            $loginHistoryTB->save($login_history);
        }
    }

    private function _patchLocationEntity($entity, $data){
        $entity->country_code = $data->country_code;
        $entity->country_name = $data->country_name;
        $entity->region_code = $data->region_code;
        $entity->region_name = $data->region_name;
        $entity->city = $data->city;
        $entity->zip_code = $data->zip_code;
        $entity->time_zone = $data->time_zone;
        $entity->latitude = $data->latitude;
        $entity->longitude = $data->longitude;
        $entity->metro_code = $data->metro_code;
        $entity->is_proxy = $data->suspicious_factors->is_proxy;
        $entity->is_tor_node = $data->suspicious_factors->is_tor_node;
        $entity->is_spam = $data->suspicious_factors->is_spam;
        $entity->is_suspicious = $data->suspicious_factors->is_suspicious;
        return $entity;
    }
}
