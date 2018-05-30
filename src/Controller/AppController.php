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

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        Configure::load('appsettings');
        $session = $this->request->session();
        $this->set(['apiVersion' => Configure::read('Api.version')]);
        if(Configure::read('Maintain') && empty($session->read('Auth.User.isSuperAdmin'))){
            return $this->redirect(['controller'=>'Maintenance','action'=>'maintenance']);
        }

        //debug('hellpo');

        /*
         * Enable the following components for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        //$this->loadComponent('Csrf');
    }

    public function beforeFilter(Event $event)
    {   
        if(!$this->Auth->user()){
            if(!empty($_COOKIE["rememberMe"])){
                $value = urldecode($_COOKIE["rememberMe"]);
                $prefix = 'Q2FrZQ==.';
                $value = base64_decode(substr($value, strlen($prefix)));
                $result = Security::decrypt($value, Security::salt());
                $data = json_decode($result);   

                $user = $this->Users->find()
                                ->where(['phone'=>$data->username])
                                ->orWhere(['email'=>$data->username])
                                ->orWhere(['username'=>$data->username])
                                ->toArray();            

                if(!empty($user)){

                    if($user[0]['flag'] == 9){
                        $this->Flash->error_single('Tài khoản đang bị khóa');
                        $this->Cookie->delete('rememberMe');
                        return $this->redirect(['controller'=>'Users','action'=>'login']);
                    }

                    $checkpass = ($data->password === $user[0]['password']) ? true : false;

                    if($checkpass){
                        $this->Auth->setUser($user[0]->toArray());
                        return $this->redirect($this->Auth->redirectUrl());
                    }  


                    $this->Flash->error_single('Mật khẩu đã được thay đổi');
                    $this->Cookie->delete('rememberMe');
                    return $this->redirect(['controller'=>'Users','action'=>'login']);           
                }           
            }
        }
    }
}
