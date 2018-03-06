<?php
namespace App\Controller\Admin;

use Cake\Controller\Controller;
use Cake\Event\Event;


class HomeController extends Controller
{
    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $session = $this->request->session();

        if($session->read('Auth.User.isAdmin') == null OR $session->read('Auth.User.isAdmin') == false){
            return $this->redirect(['prefix'=>'Admin','controller'=>'Admin','action'=>'confirmAdmin']);       
        }
    }

    public function index(){
        $this->viewBuilder()->layout('admin');






        $this->set('title', 'Admin Panel|HOME'); 
    }

    public function login(){
        $this->viewBuilder()->layout(false);
    }
}