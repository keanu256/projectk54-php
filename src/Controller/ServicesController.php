<?php
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Core\Configure;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class ServicesController extends AppController {
    
    public function initialize()
    {
        parent::initialize();
        $blogsTB = TableRegistry::get('Blogs');
        $blog['new'] = $blogsTB->find()->where(['type' => 1])->order(['created' => 'DESC'])->limit(5);
        $blog['khuyenmai'] = $blogsTB->find()->where(['category_id' => 1,'type' => 1])->order(['created' => 'DESC'])->limit(5);
        $blog['topviewers'] = $blogsTB->find()->where(['type' => 1])->order(['viewers' => 'DESC'])->limit(5);

        $this->set([
            'blogs' => $blog
        ]);

        $this->viewBuilder()->layout('homepage');
    }

    public function index(){

    }
}