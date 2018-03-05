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

class BlockChainController extends Controller
{
    public static $requestAllow = [
        'post',
        'users',
        'demo'
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
                    'msg' => 'Thành công',
                    'data' => $result['data']
                ];
                break;
            case 404: 
                $response = [
                    'code' => 404,
                    'msg' => 'Không tìm thấy',
                ];
                break;
            case 500:
                $response = [
                    'code' => 500,
                    'msg' => $result['msg'],
                ];
                break;
        }
        
        return $response;
    }

    private function _insertdata($table,$data){
        $result = [
            'code' => 500,
            'msg' => 'Failed',
        ];

        switch($table){
            case 'users':
                $result = ['code'=>'500','msg'=>'METHOD_NOT_ALLOW'];
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
            'msg' => 'Failed'
        ];

        $result;

        switch($table){
            case 'users':
                $result = self::_getUser($data);
                break;
            case 'posts':
                $result = self::_getPost($data);
                break;
        }  

        if(!empty($result)){
            $response = [
                'code' => 200,
                'msg' => 'Success',
                'data' => $result
            ];
        }else{
            $response = [
                'code' => 404,
                'msg' => 'Không có dữ liệu'
            ];
        }         
        return $response;
    }

    private function _getUser($data){
        $connectionDB = ConnectionManager::get('default');
        $usersTB = TableRegistry::get('users');
        $page = isset($data['page']) ? $data['page'] : 1;
        $page = $page < 1 ? 1 : $page;
        $limit = isset($data['limit']) ? $data['limit'] : 0;
        $limit = $limit > 1000 ? 1000 : $limit;
        $limit = $limit <= 0 ? 20 : $limit;

        $condition = isset($data['where']) ? $data['where'] : null;

        $result = null;

        $offset = ($page - 1);

        if($page != 1 && $page != 0){
            $offset = ($page - 1) * $limit;
        }

        if($condition != null AND !empty($condition)){
            try{
                
                $result = $usersTB->find()
                    ->select(['id','fullname','avatar'])
                    ->limit($limit)
                    ->page($offset + 1)
                    ->where($condition)
                    ->toArray();

            }catch(\Exception $e){
                        
            }
            
        }else{
            $result = $connectionDB->execute(
                'CALL GetUsers(?, ?)', 
                [$offset, $limit]
            )->fetchAll('assoc');
        }   

        return $result;
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
        if($key == null or empty($key)){
            return ['code'=> 500, 'msg' => 'Key không hợp lệ'];
        }
    }
    
    private function _checkAvailable($v,$table){
        if($this->request->is('ssl') && Configure::read('Debug') == false){
            $response = [
                'code' => 405,
                'msg' => 'Kết nối không an toàn'
            ];
            return $response;
        }

        if(Configure::read('Maintain')){      
            $response = [
                'code' => 503,
                'msg' => 'Dịch vụ đang bảo trì'
            ];
            return $response;
        }  

        if(Configure::read('Api.version') != $v){
            $response = [
                'code' => 403,
                'msg' => 'Phiên bản đã lỗi thời'
            ];
            return $response;
        }

        if(!in_array(strtolower($table),self::$requestAllow)){
            $response = [
                'code' => 400,
                'msg' => 'Truy vấn lỗi'
            ];
            return $response;
        } 

        return ['code' => 200];
    }
}
