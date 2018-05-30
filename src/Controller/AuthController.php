<?php
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Core\Configure;
use Cake\Event\Event;
use Cake\ORM\TableRegistry; 

class AuthController extends Controller
{
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');

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

        
        

        // if (!$this->Auth->loggedIn() && $this->Cookie->read('rememberMe')) {
    
        //     // $user = $this->Users->find('first', array(
        //     //     'conditions' => array(
        //     //         'User.username' => $cookie['username'],
        //     //         'User.password' => $cookie['password']
        //     //     )
        //     // ));
            

        //     // if ($user && !$this->Auth->login($user['User'])) {
        //     //     $this->redirect('/logout'); // destroy session & cookie
        //     // }
        // }
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