<?php
namespace App\Classes;

use Cake\Core\Configure;

class PolygonHelper{

    public function __construct(){

    }

    public function demo(){
        Configure::load('appsettings');
        return Configure::read();
    }

    public function checkLogin($type){
        Configure::load('loginconfig');
        if(Configure::read($type)) return true;
        return false;
    }

}