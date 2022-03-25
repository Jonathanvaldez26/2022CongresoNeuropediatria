<?php
namespace App\controllers;
defined("APPPATH") OR die("Access denied");
use \Core\View;
use \Core\MasterDom;
use \App\controllers\Contenedor;
use \Core\Controller;
use \App\models\Home AS HomeDao;

class Home extends Controller{

    private $_contenedor;
    function __construct(){
        parent::__construct();
        $this->_contenedor = new Contenedor;
        View::set('header',$this->_contenedor->header());
        View::set('footer',$this->_contenedor->footer());
    }
    public function getUsuario(){
      return $this->__usuario;
    }
    public function index() {
     $extraHeader =<<<html
      <style>
        .logo{
          width:100%;
          height:150px;
          margin: 0px;
          padding: 0px;
        }
      </style>
html;

$user = new \stdClass();
      $res_user = HomeDao::getbyUser($this->getUsuario());
      $pay_ticket = $res_user['pay_ticket'];
      $user->_pay_ticket = $pay_ticket;

      $upload = '';


      if($user->_pay_ticket == null || $user->_pay_ticket == ""){ 
        //aqui muestro carga
        $upload =<<<html
        <div class="card p-3">
            <div class="card-body d-flex flex-column justify-content-center text-center">
                <a href="#" data-toggle="modal" data-target="#modal_payment_ticket">
                    <i class="fa fa-plus text-secondary text-sm mb-1" aria-hidden="true"></i>
                    <h6 class="text-secondary"> Upload new payment ticket </h6>
                </a>
            </div>
        </div>
    html;
      }else{
        //aqui se muestra visualizacion
        if($res_user['sitio'] == 1){
            $upload =<<<html
                <div class="card p-3">
                    <div class="card-body d-flex flex-column justify-content-center text-center">
                      <!--<iframe src="/payment_tickets/{$res_user['pay_ticket']}" style="width:100%; height:460px;" frameborder="0" >-->
                          <iframe src="https://registro.dualdisorderswaddmexico2022.com/payment_tickets/{$res_user['pay_ticket']}" style="width:100%; height:460px;" frameborder="0" >
                    </div>
                </div>
html;
        }else{
            $upload =<<<html
                <div class="card p-3">
                    <div class="card-body d-flex flex-column justify-content-center text-center">
                      <!--<iframe src="/payment_tickets/{$res_user['pay_ticket']}" style="width:100%; height:460px;" frameborder="0" >-->
                      <iframe src="https://register.dualdisorderswaddmexico2022.com/payment_tickets/{$res_user['pay_ticket']}" style="width:100%; height:460px;" frameborder="0" >
                    </div>
                </div>
html;
        }
        
       }

      View::set('upload',$upload);
      View::set('header',$this->_contenedor->header($extraHeader));
      View::set('footer',$this->_contenedor->footer($extraFooter));
      View::render("principal_all");
    }

    public function uploadTicket(){

      $documento = new \stdClass();


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            $titulo = 'PaymentTicket';
            $usuario = $_POST["user_"];
            $file = $_FILES["file_"];
            $fecha = date("Y-m-d h:i:s");
            $ruta = $usuario.$titulo.$fecha;
            $codigo_rand = $this->generateRandomString();

            move_uploaded_file($file["tmp_name"], "payment_tickets/".$codigo_rand.'.pdf');

            $documento->_url = $codigo_rand.'.pdf';
            $documento->_user = $usuario;
            $documento->_note = $_POST['note_'];

            $id = HomeDao::updateDocument($documento);

            if ($id) {
                echo 'success';

            } else {
                echo 'fail';
            }
        } else {
            echo 'fail REQUEST';
        }
    }

    function generateRandomString($length = 10) { 
      return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length); 
  } 

}