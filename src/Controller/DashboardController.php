<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class DashboardController extends AuthController
{
    public function isAuthorized($user) {
        if(isset($user['username'])){
            return true;
        }
        return false;
    }

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $session = $this->request->session();

        if($session->read('Auth.User.isadmin') == false){
            return $this->redirect(['controller'=>'Pages','action'=>'index']);       
        }
    }

    public function index(){
        $this->viewBuilder()->layout('dashboard');

    }
}
