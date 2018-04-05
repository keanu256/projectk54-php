<?php
namespace App\Classes;

use Cake\Core\Configure;
use Cake\ORM\TableRegistry; 

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

    public function getCitiesName($zone = null){
        $citiesTB = TableRegistry::get('Cities');
        $rs = null;

        if($zone == null){
            $rs = $citiesTB->find('list')->order(['name'=>'asc'])->toArray();
        }else{
            $rs = $citiesTB->find('list')->where(['zone'=> $zone])->order(['name'=>'asc'])->toArray();
        }

        return $rs;
    }

    public function getDistrictsName($city_id = null){
        $districtsTB = TableRegistry::get('Districts');
        $rs = null;

        if($city_id != null){
            $rs = $districtsTB->find('list')->where(['city_id' => $city_id])
            ->order(['name'=>'asc'])->toArray();
        }

        return $rs;
    }

    public function getWardsName($district_id = null){
        $wardsTB = TableRegistry::get('Wards');
        $rs = null;

        if($district_id != null){
            $rs = $wardsTB->find('list')->where(['district_id' => $district_id])
            ->order(['name'=>'asc'])->toArray();
        }

        return $rs;
    }

    public function logActionAPI($key,$target,$action,$data,$ver){
        $table = TableRegistry::get('ApiRequestLog');
        $entity = $table->newEntity();
        $entity->api_key = $key;
        $entity->target = $target;
        $entity->action = $action;
        $entity->data = json_encode($data);
        $entity->version = $ver;
        $table->logData($entity);
    }
}