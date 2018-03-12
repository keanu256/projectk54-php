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
        if(Configure::read($type)['Activation']) return true;
        return false;
    }

    public function readConfig($key,$file){
        Configure::load($file);  
        return Configure::read($key);
    }

}