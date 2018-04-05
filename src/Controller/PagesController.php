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

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{

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
}
