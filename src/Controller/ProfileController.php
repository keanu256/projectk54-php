<?php
namespace App\Controller;

use App\Controller\AuthController; 

class ProfileController extends AuthController{
    
    public function isAuthorized($user) {
        if(isset($user['username'])){
            return true;
        }
        return false;
    }
    public function index(){
        $this->viewBuilder()->layout('dashboard');
        
    }
} 