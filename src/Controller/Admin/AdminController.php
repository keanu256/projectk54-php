<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry; 

class AdminController extends AppController
{
    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);     
    }

    public function confirmAdmin(){
        $this->viewBuilder()->layout(false);
        $session = $this->request->session();

        if($session->read('Auth.User.id') == null){
            return $this->redirect(['prefix'=> false,'controller'=>'Dashboard','action'=>'index']);
        }

        if($session->read('Auth.User.isAdmin') != null && $session->read('Auth.User.isAdmin') == true){
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
                    $session->write('Auth.User.isAdmin',true);
                    $reponse = [
                        'code' => 200,
                        'msg' => 'success'
                    ];
                }          
            }

            $this->response->body(json_encode($reponse));
        }
    }
}