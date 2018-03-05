<?php
namespace App\Controller\Admin;

use Cake\Controller\Controller;
use Cake\Core\Configure;
use Cake\Event\Event;
use Cake\ORM\TableRegistry; 

class AdminController extends Controller
{
    public function confirmAdmin(){
        $this->viewBuilder()->layout(false);
        $session = $this->request->session();

        if(Configure::read('Maintain')){
            return $this->redirect(['prefix'=> 'Admin','controller'=>'Admin','action'=>'maintenance']);
        }

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

    public function maintenance()
    {
        $this->viewBuilder()->layout(false);
    }
}