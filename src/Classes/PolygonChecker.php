<?php
namespace App\Classes;

use Cake\Core\Configure;
use Cake\ORM\TableRegistry; 

class PolygonChecker extends PolygonHelper{

    public function __construct(){

    }

    public function checkAccessKey($key){
        if($key == null or empty($key)){
            return false;
        }   
        return TableRegistry::get('ApiKey')->checkKey($key);
    }

    public function checkAvailableForAPI($v,$table){

        if((!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] != 'on') && Configure::read('Debug')){
            $response = [
                'code' => 451,
                'msg' => __('METHOD_UNAVAILABLE_LEGAL')
            ];
            return $response;
        }

        if($this->readConfig('Maintain','appsettings')){      
            $response = [
                'code' => 503,
                'msg' => __('METHOD_UNAVAILABLE')
            ];
            return $response;
        }  

        if($this->readConfig('Api.version','appsettings') != $v){
            $response = [
                'code' => 306,
                'msg' => __('METHOD_OLD_VERSION')
            ];
            return $response;
        }

        if(!in_array(strtolower($table),$this->readConfig('function','apisettings')[$v])){
            $response = [
                'code' => 400,
                'msg' => __('METHOD_BAD_REQUEST')
            ];
            return $response;
        }else{
            $belongTable = $this->readConfig('groups','apisettings');

            foreach ($belongTable as $key => $value) {
                if(isset($value[strtolower($table)])){
                    $response = [
                        'code' => 9999,
                        'belong' => $key,
                        'function' => $value[strtolower($table)]
                    ];                
                    return $response;
                }         
            }
        } 

        return ['code' => 200];
    }
}