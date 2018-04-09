<?php
namespace App\Classes;

use Cake\Core\Configure;
use Cake\ORM\TableRegistry; 

class PolygonHelper{

    public function __construct(){

    }

    public function demo(){
        Configure::load('appsettings','default',false);
        return Configure::read();
    }

    public function checkLogin($type){
        Configure::load('loginconfig','default',false);
        if(Configure::read($type)['Activation']) return true;
        return false;
    }

    public function readConfig($key,$file){
        Configure::load($file,'default',false);  
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

    public function vnToString($vn, $lower = false, $slug = false){
        $unicode = [
            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
            'd'=>'đ',
            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
            'i'=>'í|ì|ỉ|ĩ|ị',
            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
            'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
            'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
            'D'=>'Đ',
            'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
            'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
            'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
            'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
            'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
        ];

        foreach($unicode as $nonUnicode => $uni){
            $vn = preg_replace("/($uni)/i", $nonUnicode, $vn);     
        }

        if($lower){
            $vn = strtolower($vn);
        }

        if($slug){
            $vn = str_replace('.','',$vn); 
            $vn = str_replace(' ','-',$vn); 
        }

        return $vn;
    }
}