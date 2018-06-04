<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Robotusers\Excel\Registry;
use Cake\ORM\TableRegistry; 
use Cake\I18n\Time;
use App\Classes\PolygonHelper;
use App\Classes\AsyncBigData;

use Cake\Http\Cookie\Cookie;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $blogsTB = TableRegistry::get('Blogs');
        $blog['new'] = $blogsTB->find()->where(['type' => 1])->order(['created' => 'DESC'])->limit(5);
        $blog['khuyenmai'] = $blogsTB->find()->where(['category_id' => 1,'type'=>1])->order(['created' => 'DESC'])->limit(5);
        $blog['topviewers'] = $blogsTB->find()->where(['type' => 1])->order(['viewers' => 'DESC'])->limit(5);

        $this->set([
            'blogs' => $blog
        ]);
    }

    /**
     * Displays a view
     *
     * @param array ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Network\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function display(...$path)
    {
        $count = count($path);
        if (!$count) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        try {
            $this->render(implode('/', $path));
        } catch (MissingTemplateException $exception) {
            if (Configure::read('debug')) {
                throw $exception;
            }
            throw new NotFoundException();
        }
    }

    public function captcha()
    {
        $this->autoRender = false;
        $this->viewBuilder()->layout(false);
        $session = $this->request->session();

        $response = $this->response->withType('image/png');

        $query = $this->request->query();
        $image_width = isset($query['width'])? $query['width']:  160;
        $image_height = isset($query['height'])? $query['height']: 50;
        $characters_on_image = 6;
        $font = WWW_ROOT.'/font/monofont.ttf';

        //The characters that can be used in the CAPTCHA code. Avoid confusing characters (l 1 and i for example)
        $possible_letters = '23456789bcdfghjkmnpqrstvwxyz';
        $random_dots = 20;
        $random_lines = 20;

        $code = '';
        $i = 0;
        while ($i < $characters_on_image) 
        { 
            $code .= substr($possible_letters, mt_rand(0, strlen($possible_letters)-1), 1);
            $i++;
        }
        $font_size = $image_height * 0.75;
        $image = @imagecreate($image_width, $image_height);

        $session->write('captcha_code', $code);
        /*Setting the background, text and noise colours here */
        #theme color: RGB(82,193,241);
        $background_color = imagecolorallocate($image,241, 243, 247);
        $text_color = imagecolorallocate($image,0,0,0);
        $image_noise_color = imagecolorallocate($image,0,0,0);

        /*This generates the dots randomly strings in background */
        for( $i=0; $i<$random_dots; $i++ ) 
        {
            imagefilledellipse($image, mt_rand(0,$image_width),
            mt_rand(0,$image_height), 2, 3, $image_noise_color);
        }

        /*This generates lines randomly strings in background of image */
        for( $i=0; $i<$random_lines; $i++ ) 
        {
            imageline($image, mt_rand(0,$image_width), mt_rand(0,$image_height),
            mt_rand(0,$image_width), mt_rand(0,$image_height), $image_noise_color);
        }

        $textbox = imagettfbbox($font_size, 0, $font, $code); 
        $x = ($image_width - $textbox[4])/2;
        $y = ($image_height - $textbox[5])/2;
        imagettftext($image, $font_size, 0, $x, $y, $text_color, $font , $code);
        imagepng($image);
        return $response;
    }

    public function index(){
        $this->viewBuilder()->layout('homepage');
        set_time_limit (0);
        // //$url = 'https://ip-api.io/json/';
        // $url = "https://facebook.com/";
        // $url_reg = 'https://www.facebook.com/ajax/register.php?dpr=1.5';
        // $formData = 'lastname=phanvan';
        // $html = self::_curlPost($url,'GET');
        // $html = self::_curlPost($url_reg,'POST');
        // echo $html;
        //Configure::load('parameters');
        //Configure::load('messages');
        //$ddd = Configure::read();     
        //debug($ddd);
    }

    private function _curlPost($url, $method, $postinfo = '', $cookie_file_path = WWW_ROOT.'cookie/cookie.txt'){
        $proxyAPI = 'https://gimmeproxy.com/api/getProxy?protocol=http&supportsHttps=true';
        $user_agent = 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36';
        $proxyJSON = @file_get_contents($proxyAPI);
        $proxyObj = json_decode($proxyJSON);
        $proxy = $proxyObj->ipPort;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_NOBODY, false);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_PROXY, $proxy);
        curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file_path);
        //set the cookie the site has for certain features, this is optional
        curl_setopt($ch,CURLOPT_COOKIEFILE, $cookie_file_path);
        //curl_setopt($ch, CURLOPT_COOKIE, "cookiename=0");
        curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_REFERER, $_SERVER['REQUEST_URI']);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        if ($method=='POST') 
        {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postinfo);
        }
        $html = curl_exec($ch);
        curl_close($ch);
        return $html;
    }

    public function excel(){
        $this->viewBuilder()->layout(false);
        $params = $this->request->query();
        set_time_limit (0);

        $citiesTB = TableRegistry::get('Cities');  
        $districtsTB = TableRegistry::get('Districts');
        $wardsTB = TableRegistry::get('Wards');
        $registry = Registry::instance();

        $table = $registry->get('records.xlsx', 'Sheet1',[
            'startRow' => $params['start'],
            'endRow' => $params['end'],
            'startColumn' => 'A',
            'endColumn' => 'G',
            'keepOriginalRows' => false
        ]);
        $rows = $table->find()->toArray();
        $error = true;
            
        foreach ($rows as $rows => $value) {
   
            if(!$citiesTB->exists(['id' => $value->B])){
                $cityEntity = $citiesTB->newEntity();
                $cityEntity->id = $value->B;
                $cityEntity->name = $value->A;
                $cityEntity->level = '';     
                $citiesTB->save($cityEntity);
            }
          
          
            if(!$districtsTB->exists(['id' => $value->D])){
                $districtEntity = $districtsTB->newEntity();
                $districtEntity->id = $value->D;
                $districtEntity->name = $value->C;
                $districtEntity->level = '';
                $districtEntity->city_id = $value->B; 
                $districtsTB->save($districtEntity);
            }
            

            if(!$wardsTB->exists(['id' => $value->F])){
                $wardEntity = $wardsTB->newEntity();
                $wardEntity->id = $value->F;
                $wardEntity->name = $value->E;
                $wardEntity->level = $value->G;
                $wardEntity->district_id = $value->D;
                $wardsTB->save($wardEntity);
            }                
        }  
        
        echo 'Finished!';
    }

    public function mce(){
        $this->viewBuilder()->layout(false);
    }

    public function ckfinder()
    {
        //FUNCTION MUST BE DELETE
        $this->viewBuilder()->layout(false);
    }

    public function loadEditorSave(){
        $this->autoRender = false;

        $response = [
            'code' => 500,
            'msg' => 'Failed'
        ];

        if($this->request->is('post')){
            $data = $this->request->data;
            $historiesTB = TableRegistry::get('EditorHistoriesSave');
            $result = $historiesTB->find()->where([
                'url' => $data['url'],
                'user_id' => $data['user_id'],
                'updated >=' => Time::now()->modify('-15 minutes')
            ])
            ->select('content')
            ->first();
            
            if($result != null){
                $response = [          
                    'code' => 200,
                    'msg' => 'Success',
                    'data' => $result
                ];  
            }
              
        }

        $this->response->type('json');
        $this->response->body(json_encode($response,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }

    public function saveEditorContent(){
        $this->autoRender = false;
        $data = $this->request->data();

        $response = [
            'code' => 500,
            'msg' => 'Failed',
            'data' => $data
        ];

        $historiesTB = TableRegistry::get('EditorHistoriesSave');
        $entity = $historiesTB->find()->where([
            'url' => $data['url'],
            'user_id' => $data['user_id']
        ])
        ->first();

        if($entity == null) $entity = $historiesTB->newEntity();  

        $entity->url = $data['url'];
        $entity->user_id = $data['user_id'];
        $entity->content = $data['content'];      

        if($historiesTB->save($entity)){
            $response = [
                'code' => 200
            ];
        }

        // try{
        //     $historiesTB->save($entity);
        //     $response = [
        //         'code' => 200,
        //         'entity' => $entity
        //     ];
        // }catch(Exception $e){
        //     $response = [
        //         'code' => 300,
        //         'error' => $e->getEntity()
        //     ];
        // }        
        
        $this->response->type('json');
        $this->response->body(json_encode($response,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }

    public function editorPreview(){
        $this->viewBuilder()->layout(false);
        $data = $this->request->query();
        debug($data);
    }

    public function video($slug = null){
        $this->viewBuilder()->layout(false);
        $polyHelper = new PolygonHelper();
        $this->set([
            'demoVNtoString' => $polyHelper->vnToString($slug,true,true)
        ]);
    }

    public function kanji($kanjiArray = null){
        $this->viewBuilder()->layout(false);
        $this->set([
            'kanjiArray' => $kanjiArray
        ]);
    }

    public function demo1(){
        $this->viewBuilder()->layout(false);
        $polyHelper = new PolygonHelper();

        $default_string = [0 => '-- Chưa chọn --'];

        $khu_vuc = $default_string + [1 => 'Miền Bắc', 2 => 'Miền Trung', 3 => 'Miền Nam'];
        $tinh_thanhpho = $default_string;
        $quan_huyen = $default_string;
        $phuong_xa = $default_string;

        $citiesTB = TableRegistry::get('Cities');
        $districtsTB = TableRegistry::get('Districts');
        $wardsTB = TableRegistry::get('Wards');

        $cities = $polyHelper->getCitiesName(1);

        $userAddress = [
            'street' => '350 Tân Sơn Nhì',
            'zone' => 3,
            'city' => 79,
            'district' => 767,
            'ward' => 27010
        ];

        $userAddress = null;

        if($userAddress != null){
            $tinh_thanhpho += $citiesTB->find('list')->where(['zone' => $userAddress['zone']])->toArray();
            $quan_huyen += $districtsTB->find('list')->where(['city_id' => $userAddress['city']])->toArray();
            $phuong_xa += $wardsTB->find('list')->where(['district_id' => $userAddress['district']])->toArray();
        }

        $this->set([
            'userAddress' => $userAddress,
            'khu_vuc' => $khu_vuc,
            'tinh_thanhpho' => $tinh_thanhpho,
            'quan_huyen' => $quan_huyen, 
            'phuong_xa' => $phuong_xa
        ]);
    }


    public function register(){
        $this->viewBuilder()->layout('homepage');  
        Configure::load('appsettings'); 
        $this->set([
            'RegisterPageIndex' => true,
            'allowRegister' => Configure::read('Register')
        ]);
    } 
    
    public function policy(){
        $this->viewBuilder()->layout('homepage');  
    }
}
