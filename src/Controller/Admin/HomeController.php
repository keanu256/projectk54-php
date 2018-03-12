<?php
namespace App\Controller\Admin;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Core\Configure;


class HomeController extends Controller
{
    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $session = $this->request->session();

        if($session->read('Auth.User.isSuperAdmin') == null OR $session->read('Auth.User.isSuperAdmin') == false){
            return $this->redirect(['prefix'=>'Admin','controller'=>'Admin','action'=>'confirmAdmin']);       
        }
    }

    public function index(){
        $this->viewBuilder()->layout('admin');



        $this->set([
            'title' => 'Admin Panel | Trang chủ',
            'panelName' => 'Bảng điều khiển'
        ]); 
    }

    public function settings(){
        $this->viewBuilder()->layout('admin');



        $this->set([
            'title' => 'Admin Panel | Trang chủ',
            'panelName' => 'Cấu hình hệ thống'
        ]);
    }

    public function login(){
        $this->viewBuilder()->layout(false);
    }

    public function setconfig(){
        $this->autoRender = false;
        $data = $this->request->data();
        Configure::load('loginconfig');

        $response = [
            'code' => 500,
            'msg' => 'Invalid method',
            'data' => $data
        ];

        if($this->request->is('post')){
            if(isset($data['target']) && isset($data['status'])){
                Configure::write($data['target'].'.Activation', filter_var($data['status'],FILTER_VALIDATE_BOOLEAN));
                
                if(Configure::read('FacebookLogin.Activation') == false &&
                    Configure::read('GoogleLogin.Activation') == false &&
                    Configure::read('MainLogin.Activation') == false &&
                    Configure::read('QRLogin.Activation') == false){

                    $response = [
                        'code' => 400,
                        'msg' => 'Chọn tối thiểu 1 hình thức đăng nhập.'
                    ];

                }else{
                    Configure::dump('loginconfig','default',['FacebookLogin','GoogleLogin','MainLogin','QRLogin']);

                    $response = [
                        'code' => 200,
                        'msg' => 'Thành công'
                    ];
                }                             
            }
        }

        $this->response->type('json');
        $this->response->body(json_encode($response,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }

    public function setconfiglogin(){
        $this->autoRender = false;
        $data = $this->request->data();
        Configure::load('loginconfig');

        $response = [
            'code' => 500,
            'msg' => 'Invalid method',
            'data' => $data
        ];


        if($this->request->is('post')){
            if(isset($data['target']) && isset($data['publickey']) && isset($data['secretKey'])){
                Configure::write($data['target'].'.PublicKey',$data['publickey']);
                Configure::write($data['target'].'.SecretKey',$data['secretKey']); 
            }   
            
            Configure::dump('loginconfig','default',['FacebookLogin','GoogleLogin','MainLogin','QRLogin']);
            
            $response = [
                'code' => 200,
                'msg' => 'Thành công',
                'data' => $data['publickey']
            ];
        }

        $this->response->type('json');
        $this->response->body(json_encode($response,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }
}