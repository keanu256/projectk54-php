<?php
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Core\Configure;
use Cake\Event\Event;
use Cake\ORM\TableRegistry; 
use Cake\Datasource\ConnectionManager;
use Cake\Utility\Xml;
use Cake\Core\Exception\Exception;
use App\Classes\PolygonHelper;
use App\Classes\PolygonChecker;

class BlockChainController extends Controller
{

    public function dispatcher($ver,$table,$format){       
        $this->autoRender = false;
        $polyChecker = new PolygonChecker();
        $checkResult = $polyChecker->checkAvailableForAPI($ver,$table);
        $data = $this->request->query();
        $response;

        if($this->request->is(['post'])){
            $data = $this->request->data();
        }
        
        if($checkResult['code'] == 200){
            $response = [
                'results' => self::_process($table,$data,$ver)
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

    private function _process($table,$data,$ver){

        $polyChecker = new PolygonChecker();
        $polyHelper = new PolygonHelper();
        $key = isset($data['key']) ? $data['key'] : null;
        $result = null;  
        $actionBehavior; 

        if(!$polyChecker->checkAccessKey($key)){
            $response = ['code' => 403,'msg' => __('METHOD_MISSING_OR_INVALID_KEY')];
            return $response;
        }

        $response = [
            'code' => 500,
            'msg' => 'METHOD_NOT_ALLOW'
        ];

        if($this->request->is(['get'])){   
            $actionBehavior = "get data";     
            $result = self::_getdata($table,$data);
        }

        if($this->request->is(['post'])){
            $actionBehavior = "insert data"; 
            $result = self::_insertdata($table,$data);
        }

        if($this->request->is(['put'])){

        }

        if($this->request->is(['patch'])){

        }

        if($this->request->is(['delete'])){
            $actionBehavior = "delete data"; 
        }

        //Lưu trữ truy vấn API
        $polyHelper->logActionAPI($key,$table,$actionBehavior,$data,$ver);

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

    private function _buildReponse($result){

        $response = ['code' => 500,'msg' => __('METHOD_BAD_REQUEST')];

        if(!empty($result)){
            $response = ['code' => 200,'msg' => __('METHOD_SUCCESS'),
                'data' => $result
            ];
        }else{
            $response = ['code' => 404,'msg' => __('METHOD_NOT_FOUND')];
        }  

        return $response;
    }

    private function _insertdata($table,$data){
        $result = TableRegistry::get(ucfirst($table))->insertData($data);
        return $this->_buildReponse($result);
    }

    private function _getdata($table,$data){
        $result = TableRegistry::get(ucfirst($table))->getData($data);               
        return $this->_buildReponse($result);
    }
}
