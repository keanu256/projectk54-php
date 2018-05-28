<?php
namespace App\Classes;

use Cake\ORM\TableRegistry; 
use Thread;

class AsyncBigData extends Thread {

    private $DataTB;

        public function __construct() {
            $this->DataTB = TableRegistry::get('Bigdata');
        }

    public function run() {
        // for ($i=0; $i < 10000 ; $i++) { 
            // $data = $this->DataTB->newEntity();
            // $data->name = 'Entity '.$i;
            // $this->DataTB->save($data);
        // }
    }    
}
?>