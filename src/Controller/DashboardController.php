<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;
use Cake\I18n\Time;
use Cake\ORM\TableRegistry; 
use App\Classes\PolygonChecker;
use App\Classes\MobileDetect;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class DashboardController extends AuthController
{
    public function isAuthorized($user) {
        if(isset($user['username'])){
            return true;
        }
        return false;
    }

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $session = $this->request->session();

        if($session->read('Auth.User.isadmin') == false){
            return $this->redirect(['controller'=>'Pages','action'=>'index','home']);       
        }

        $action = $this->request->getParam('action');

        $polyChecker = new PolygonChecker();
        $license_check = $polyChecker->checkLicenseExpired();

        if(isset($license_check['license']) && $license_check['license'] == false && $action != 'license'){
            return $this->redirect(['controller'=>'Dashboard','action'=>'license']);      
        }

        $this->set(array_merge([],$license_check));
    }

    public function initialize(){
        parent::initialize();
        $this->viewBuilder()->layout('dashboard');
    }

    public function index(){
        $session = $this->request->session();

    }

    public function shop($shopid = null){

    }

    public function license(){

        $session = $this->request->session();
        $licensesTB = TableRegistry::get('Licenses');
        $mobileDetect = new MobileDetect();

        $licenses =  $licensesTB->find()
                        ->where(['user_id' => $session->read('Auth.User.id')])
                        ->contain(['licenseName'])
                        ->toArray();

        $this->set([
            'licenses' => $licenses,
            'isMobile' => $mobileDetect->isMobile()
        ]);
    }
}
