<?php
namespace App\Controller\Admin;
use Cake\Controller\Controller;

class WebviewController extends Controller
{
    public function templateElement(){
        $this->viewBuilder()->layout(false);

        if($this->request->is('post')){
            $data = $this->request->data();
            $template = 'template_element_'.$data['type'];
            $this->viewBuilder()->template($template);         
        }
    }
}