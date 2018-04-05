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

use Cake\Controller\Controller;
use Cake\Core\Configure;
use Cake\Event\Event;
use Cake\ORM\TableRegistry; 
use Cake\Datasource\ConnectionManager;
use Cake\Utility\Xml;
use Cake\Core\Exception\Exception;
use App\Classes\PolygonHelper;

class BlockChainController extends Controller
{
    //Tên bảng cho phép truy vấn
    public static $requestAllow = [
        '1.0' => [
            'post',
            'users',
            'demo',
            'cities','districts','wards' 
        ]        
    ];

    public function dispatcher($ver,$table,$format){       
        $this->autoRender = false;
        $checkResult = self::_checkAvailable($ver,$table);
        $data = $this->request->query();
        $response;

        if($this->request->is(['post'])){
            $data = $this->request->data();
        }
        
        if($checkResult['code'] == 200){
            $response = [
                'results' => self::_process($table,$data)
            ];
        }else{
            $response = [
                'results' => $checkResult
            ];
        }

        $bodyContent = self::_formatContent($format, $response);
        
        $this->response->type($format);
        $this->response->body($bodyContent);      
    }

    private function _process($table,$data){

        $key = isset($data['key']) ? $data['key'] : null;
        $result;

        $access_flag = self::_checkAccessKey($key);  

        if($access_flag['code'] == 500){
            $response = [
                'code' => 500,
                'msg' => $access_flag['msg']
            ];

            return $response;
        }

        $response = [
            'code' => 500,
            'msg' => 'METHOD_NOT_ALLOW'
        ];

        if($this->request->is(['get'])){
            $result = self::_getdata($table,$data);
        }

        if($this->request->is(['post'])){
            $result = self::_insertdata($table,$data);
        }

        if($this->request->is(['put'])){

        }

        if($this->request->is(['patch'])){

        }

        if($this->request->is(['delete'])){

        }

        switch($result['code']){
            case 200: 
                $response = [
                    'code' => 200,
                    'msg' => __('METHOD_SUCCESS'),
                    'data' => $result['data'],
                    'count' => count($result['data'])
                ];
                break;
            case 404: 
                $response = ['code' => 404, 'msg' => __('METHOD_NOT_FOUND')];
                break;
            case 500:
                $response = ['code' => 500, 'msg' => $result['msg']];
                break;
        }
        
        return $response;
    }

    private function _formatContent($format,$content){
        $bodyContent;

        if($format == 'json'){
            $bodyContent = json_encode($content,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        }else{
            
            $bodyContent = Xml::fromArray($content);
            $bodyContent = $bodyContent->asXML();
        }

        return $bodyContent;
    } 

    private function _checkAccessKey($key){
        $polyHelper = new PolygonHelper();
        if(!$polyHelper->checkAccessKey($key)){
            return ['code'=> 403, 'msg' => __('METHOD_FORBIDDEN')];
        }
    }
    
    private function _checkAvailable($v,$table){
        Configure::load('appsettings');
        if($this->request->is('ssl') && Configure::read('Debug') == false){
            $response = [
                'code' => 451,
                'msg' => __('METHOD_UNAVAILABLE_LEGAL')
            ];
            return $response;
        }

        if(Configure::read('Maintain')){      
            $response = [
                'code' => 503,
                'msg' => __('METHOD_UNAVAILABLE')
            ];
            return $response;
        }  

        if(Configure::read('Api.version') != $v){
            $response = [
                'code' => 306,
                'msg' => __('METHOD_OLD_VERSION')
            ];
            return $response;
        }

        if(!in_array(strtolower($table),self::$requestAllow[$v])){
            $response = [
                'code' => 400,
                'msg' => __('METHOD_BAD_REQUEST')
            ];
            return $response;
        } 

        return ['code' => 200];
    }

    private function _insertdata($table,$data){
        $result = [
            'code' => 500,
            'msg' => 'Failed',
        ];

        switch($table){
            case 'users':
                $result = ['code'=>'500','msg'=> __('METHOD_NOT_ALLOW')];
                break;
            case 'posts':
                $result = self::_insertPost($data);
                break;
        } 

        return $result;
    }

    private function _getdata($table,$data){
        $response = [
            'code' => 500,
            'msg' => __('METHOD_BAD_REQUEST')
        ];

        $result = TableRegistry::get(ucfirst($table))->getData($data);

        if(!empty($result)){
            $response = [
                'code' => 200,
                'msg' => __('METHOD_SUCCESS'),
                'data' => $result
            ];
        }else{
            $response = [
                'code' => 404,
                'msg' => __('METHOD_NOT_FOUND')
            ];
        }         
        return $response;
    }
}
