<?php
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Core\Configure;
use Cake\Event\Event;
use Cake\ORM\TableRegistry; 
use Cake\Utility\Security;

class AuthController extends Controller
{
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Cookie');
        $this->loadComponent('Auth', [
			'loginAction' => [
				'controller' => 'Users',
				'action' => 'login',
			],
            'authorize' => ['Controller'], 
            'loginRedirect' => [
                'controller' => 'Dashboard',
                'action' => 'index'
            ],
            'logoutRedirect' => [
                'controller' => 'Users',
                'action' => 'login'
            ]
        ]);

        // $sidebar_left = TableRegistry::get('sidebar_menu_left')
        //         ->find('all',[
        //             'contain'=> ['SidebarLeftChild']
        //         ])
        //         ->order(['position'=>'ASC'])
        //         ->toArray();
        // $layout = [
        //     'sidebar_menu_left' => $sidebar_left
        // ];
        // $this->set('layouts',$layout);
        /*
         * Enable the following components for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        //$this->loadComponent('Csrf');
    }

    public function beforeFilter(Event $event)
    {   
        Configure::load('appsettings');
        $session = $this->request->session();
        if(Configure::read('Maintain') && empty($session->read('Auth.User.isSuperAdmin'))){
            return $this->redirect(['controller'=>'Maintenance','action'=>'maintenance']);
        }
        
        $this->Auth->allow(['forgetpassword', 'resetpassword']);    

        if(!$this->Auth->user()){
            if(!empty($_COOKIE["rememberMe"])){
                $value = urldecode($_COOKIE["rememberMe"]);
                
                $prefix = 'Q2FrZQ==.';
                $value = base64_decode($value);    
                $value = substr($value, strlen($prefix));
                $value = Security::decrypt($value, Security::salt());
                $data = json_decode($value);   
                $UsersTB = TableRegistry::get('Users');
                $user = $UsersTB->find()
                                ->orWhere(['email'=>$data->username])
                                ->orWhere(['username'=>$data->username])
                                ->toArray();            

                if(!empty($user)){

                    if($user[0]['flag'] == 9){
                        $this->Cookie->delete('rememberMe');
                        return $this->redirect(['controller'=>'Users','action'=>'login']);
                    }

                    $checkpass = ($data->pass === $user[0]['password']) ? true : false;

                    if($checkpass){
                        $this->Auth->setUser($user[0]->toArray());
                        return $this->redirect($this->Auth->redirectUrl());
                    }  
                    //$this->Cookie->delete('rememberMe');
                    return $this->redirect(['controller'=>'Users','action'=>'login']);           
                }           
            }
        }
    }

    public function randomPassword() {
        $pass = array(); 
        $alphaLength = strlen(ALPHABET) - 1; 
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = ALPHABET[$n];
        }
        return implode($pass);
    }
}