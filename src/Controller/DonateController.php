<?php
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Http\Client;

define('ONEPAY_SECRET_KEY','pcaofcwznhd877v11f7nyn9jioniikq0');
define('ONEPAY_ACCESS_KEY','9pe74z4z1y2a7dq0iro1');

class DonateController extends Controller
{
    public function index()
    {
        $this->viewBuilder()->layout(false);
    }

    public function process(){
        $this->autoRender = false;
        $data = $this->request->data();

        if($this->request->is(['post'])){
            $url = 'https://api.1pay.vn/card-charging/v2/topup';
            $query = $this->_makeQueryData($data, ONEPAY_ACCESS_KEY);
            $rs = $this->_sendOnepayPOST($url,$query);
            $this->response->body();
        }
    }

    private function _makeQueryData($data, $access_key){
        $query = "access_key=" . $access_key . "&pin=" 
            . $data['txtCode'] . "&serial=" . $data['txtSeri'] . "&type=" . $data['lstTelco'];
        $sign = hash_hmac("sha256", $query, $access_key);

        $query .= '&signature=' . $sign;

        return $query;
    }

    private function _sendOnepayPOST($url, $data){
        
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        $result = curl_exec($ch);

        curl_close($ch);
        return $result;
        
    }
}