<?php
namespace App\Controller\Admin;

use Cake\Controller\Controller;
use Cake\Core\Configure;
use Cake\Event\Event;
use Cake\ORM\TableRegistry; 
use Cake\Auth\DefaultPasswordHasher;
use App\Classes\PolygonHelper;

class AdminController extends Controller
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Auth',[
            'loginAction' => [
                'prefix' => 'Admin',
                'controller' => 'Admin',
                'action' => 'loginmaintain'
            ],
        ]); 
        
        $this->Auth->allow([
            'confirmAdmin',
            'maintenance'
        ]);
    }

    public function confirmAdmin(){
        $this->viewBuilder()->layout(false);
        $session = $this->request->session();
        Configure::load('appsettings');
        if(Configure::read('Maintain')){
            return $this->redirect(['prefix'=> 'Admin','controller'=>'Admin','action'=>'maintenance']);
        }

        if($session->read('Auth.User.id') == null){
            return $this->redirect(['prefix'=> false,'controller'=>'Dashboard','action'=>'index']);
        }

        if($session->read('Auth.User.isAdmin') != null && $session->read('Auth.User.isAdmin') == true){
            return $this->redirect(['prefix'=> 'Admin','controller'=>'Home','action'=>'index']);
        }

        if($session->read('Auth.User.isSuperAdmin') != null){
            return $this->redirect(['prefix'=> 'Admin','controller'=>'Home','action'=>'index']);
        }

        if($this->request->is(['post'])){
            $this->autoRender = false;
            $userTB = TableRegistry::get('Users');

            $reponse = [
                'code' => 500,
                'msg' => 'Error'
            ];
        
            $user = $userTB->find('all',[
                'contain' => ['AdminGroup']
            ])->where([
                'id' => $session->read('Auth.User.id'),
                'passcode' => $this->request->data['passcode']
            ])->first();
            
            if(!empty($user)){
                if(isset($user->adminCheck) && !empty($user->adminCheck)){
                    $session->write('Auth.User.isSuperAdmin',true);
                    $reponse = [
                        'code' => 200,
                        'msg' => 'Đang chuyển hướng vui lòng đợi.'
                    ];
                }          
            }else{
                $reponse = [
                    'code' => 500,
                    'msg' => 'Tài khoản không xác thực!'
                ];
            }

            $this->response->body(json_encode($reponse));
        }
    }

    public function maintenance()
    {
        $session = $this->request->session();
        if($session->read('Auth.User.isSuperAdmin') != null){
            return $this->redirect(['prefix'=> 'Admin','controller'=>'Home','action'=>'index']);
        }

        $this->Auth->logout();      
        $this->viewBuilder()->layout(false);
    }

    public function onoff(){
        $this->autoRender = false;
        $data = $this->request->data();

        $response = [
            'code' => '500',
            'msg' => 'Thao tác thất bại!',
        ];

        Configure::load('appsettings');
        if($data['status'] == 1){
            Configure::write($data['target'],true);
        }else{
            Configure::write($data['target'],false);
        }
        $response = [
            'code' => '200',
            'msg' => 'Thao tác thành công!',
            'status' => $data['status']
        ];

        Configure::dump('appsettings','default',['Maintain','Register','Payment','Api']);

        $this->response->type('json');
        $this->response->body(json_encode($response,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }

    public function loginmaintain(){
        $this->autoRender = false;
        $data = $this->request->data();
        $userTB = TableRegistry::get('users');

        $user = $userTB->find('all',[
            'contain' => ['AdminGroup']
        ])->where(['username' => $data['username']])->first();

        $response = [
            'code' => '500',
            'msg' => 'Thao tác thất bại!'
        ];

        if($user != null){
            $passHasher = new DefaultPasswordHasher();
            if($flag = $passHasher->check($data['passcode'],$user['password'])){
                if(!empty($user['adminCheck'])){
                    $user['isSuperAdmin'] = true;
                    $this->Auth->setUser($user);

                    $response = [
                        'code' => '200',
                        'msg' => 'Thao tác thành công!',
                    ];
                }           
            }
        }    

        $this->response->type('json');
        $this->response->body(json_encode($response,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }
}