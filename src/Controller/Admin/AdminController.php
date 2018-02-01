<?php
namespace App\Controller\Admin;
use App\Controller\AuthController;

class AdminController extends AuthController
{
    public function index(){
        $this->autoRender = false;
    }
}