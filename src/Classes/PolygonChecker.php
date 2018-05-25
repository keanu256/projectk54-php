<?php
namespace App\Classes;

use Cake\Core\Configure;
use Cake\ORM\TableRegistry; 
use Cake\Network\Session;
use Cake\I18n\Time;
use Cake\Routing\Router;

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

    public function checkLicenseExpired($type = 1){
        $session = new Session();
        $licenseTB = TableRegistry::get('Licenses');
        $user_license = $licenseTB->find()
            ->where(['user_id' => $session->read('Auth.User.id'), 'license_type' => $type])
            ->select('expired')
            ->first();
        $result = [];
        $now = Time::now();

        $diff_time = $user_license->expired->diff($now);
        $sec = $user_license->expired->getTimestamp() - $now->getTimestamp();
        
        if($sec <= 0){
            return ['license' => false];
        }

        if($diff_time->y < 1 && $diff_time->m <1 && $diff_time->d < 16){
            $expired_str = ($diff_time->y > 0)? $diff_time->y.' năm ' : '';
            $expired_str .= ($diff_time->m > 0)? $diff_time->m.' tháng ' : '';
            $expired_str .= ($diff_time->d > 0)? $diff_time->d.' ngày ' : '';
            $expired_str .= ($diff_time->h > 0)? $diff_time->h.' giờ ' : '';
            $expired_str .= ($diff_time->i > 0)? $diff_time->i.' phút ' : '';
            $expired_str .= ($diff_time->s > 0)? $diff_time->s.' giây ' : '';
            
            $result = 
            [
                'license_warning' => true,
                'expired_str' => trim($expired_str),
                'expired_seconds' => $sec
            ];
        }

        return $result;
    }
}