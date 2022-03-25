<?php
namespace App\controllers;
defined("APPPATH") OR die("Access denied");

use \Core\View;
use \Core\MasterDom;
use \App\models\Register AS RegisterDao;

class Register{
    private $_contenedor;

    public function index() {
        $extraHeader =<<<html
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/favicon.ico">
        <link rel="icon" type="image/vnd.microsoft.icon" href="/assets/img/angel.png">
        <title>
            Register - VI World Congress on Dual Disorders
        </title>
         <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
         <!-- Nucleo Icons -->
         <link href="../../../assets/css/nucleo-icons.css" rel="stylesheet" />
         <link href="../../../assets/css/nucleo-svg.css" rel="stylesheet" />
         <!-- Font Awesome Icons -->
         <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
         <link href="../../../assets/css/nucleo-svg.css" rel="stylesheet" />
         <!-- CSS Files -->
        <link id="pagestyle" href="../../../assets/css/soft-ui-dashboard.css?v=1.0.5" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <!-- Nucleo Icons -->
        <link href="../../../assets/css/nucleo-icons.css" rel="stylesheet" />
        <link href="../../../assets/css/nucleo-svg.css" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <link href="../../../assets/css/nucleo-svg.css" rel="stylesheet" />
        <!-- CSS Files -->
        <link id="pagestyle" href="../../../assets/css/soft-ui-dashboard.css?v=1.0.5" rel="stylesheet" />
        <!-- CSS Files -->
        <link id="pagestyle" href="/assets/css/soft-ui-dashboard.css?v=1.0.5" rel="stylesheet" />
        <link rel="stylesheet" href="/css/alertify/alertify.core.css" />
        <link rel="stylesheet" href="/css/alertify/alertify.default.css" id="toggleCSS" />
        <link rel="stylesheet" href="/assets/css/flags.css" id="toggleCSS" />
        

html;
        $extraFooter =<<<html
     
        <script src="/js/jquery.min.js"></script>
        <script src="/js/validate/jquery.validate.js"></script>
        <script src="/js/alertify/alertify.min.js"></script>
        <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
       <!--   Core JS Files   -->
          <script src="../../../assets/js/core/popper.min.js"></script>
          <script src="../../../assets/js/core/bootstrap.min.js"></script>
          <script src="../../../assets/js/plugins/perfect-scrollbar.min.js"></script>
          <script src="../../../assets/js/plugins/smooth-scrollbar.min.js"></script>
          <script src="../../../assets/js/plugins/multistep-form.js"></script>
          <!-- Kanban scripts -->
          <script src="../../../assets/js/plugins/dragula/dragula.min.js"></script>
          <script src="../../../assets/js/plugins/jkanban/jkanban.js"></script>
          <script>
            var win = navigator.platform.indexOf('Win') > -1;
            if (win && document.querySelector('#sidenav-scrollbar')) {
              var options = {
                damping: '0.5'
              }
              Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
            }
          </script>
          <!-- Github buttons -->
          <script async defer src="https://buttons.github.io/buttons.js"></script>
          <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->

        <script>
        window.addEventListener("keypress", function(event){
            if (event.keyCode == 13){
                event.preventDefault();
            }
        }, false);
        
          window.onload = function() {
          var myInput = document.getElementById('confirm_email');
          var myInput_conf = document.getElementById('confirm_email_iva');
          myInput.onpaste = function(e) {
            e.preventDefault();
          }
          myInput_conf.onpaste = function(e) {
            e.preventDefault();
          }
          
          myInput.oncopy = function(e) {
            e.preventDefault();
          }
          myInput_conf.oncopy = function(e) {
            e.preventDefault();
          }
        }
        
        $('#email').on('keypress', function() {
            var re = /([A-Z0-9a-z_-][^@])+?@[^$#<>?]+?\.[\w]{2,4}/.test(this.value);
            if(!re) {
                $('#error').show();
                 document.getElementById('confirm_email').disabled = true;
                 
            } else {
                $('#error').hide();
                document.getElementById('confirm_email').disabled = false;
                
            }
        })
        
        
        $('#confirm_email').on('keypress', function() {
            document.getElementById('email').disabled = true;
            var re = /([A-Z0-9a-z_-][^@])+?@[^$#<>?]+?\.[\w]{2,4}/.test(this.value);
            if(!re) {
                $('#error_confirm').show();
            } else {
                $('#error_confirm').hide();
            }
        })
        
         $("#confirm_email").on("keyup", function() 
        {
    	    var email_uno = document.getElementById('email').value;
            var email_dos = document.getElementById('confirm_email').value;
                  
            if(email_uno == email_dos)
            {
                document.getElementById('confirm_email').disabled = true;
                document.getElementById('prefijo').disabled = false;
                document.getElementById('nombre').disabled = false;              
                document.getElementById('apellidop').disabled = false;
                document.getElementById('apellidom').disabled = false;
                document.getElementById('telefono').disabled = false;                
                document.getElementById('especialidad').disabled = false;
                document.getElementById('pais').disabled = false;             
                document.getElementById('estado').disabled = false;
    
                
                document.getElementById("email_validado").value = email_uno;

            }
        });
     
        $('#email_receipt_iva').on('keypress', function() {
            var re = /([A-Z0-9a-z_-][^@])+?@[^$#<>?]+?\.[\w]{2,4}/.test(this.value);
            if(!re) {
                $('#error_email_send').show();
            } else {
                $('#error_email_send').hide();
            }
        })
        $('#confirm_email_iva').on('keypress', function() {
            var re = /([A-Z0-9a-z_-][^@])+?@[^$#<>?]+?\.[\w]{2,4}/.test(this.value);
            if(!re) {
                $('#error_email_send_confirm').show();
            } else {
                $('#error_email_send_confirm').hide();
            }
        })
         
        let button_active  = document.getElementById("next_one")
        let input_require = document.querySelectorAll(".all_input")
        let input_require_select = document.querySelectorAll(".all_input_select")
    
       input_require[3].addEventListener("keyup", () => 
       {
          if(input_require[0].value != "" && input_require[1].value != "" && input_require[2].value != "" && input_require[3].value != "") 
          {
               input_require_select[3].addEventListener("change", () => 
               {
                  document.getElementById("next_one").disabled = false;
               })
          } 
          else 
          {
              document.getElementById("next_one").disabled = teu;
          }
        })
        
       
        

        function actualizaEdos() {
        var pais = $('#pais').val();
        $.ajax({
          url: '/Register/ObtenerEstado',
          type: 'POST',
          dataType: 'json',
          data: {pais:pais},
    
        })
        .done(function(json) {
            if(json.success)
            {
                $("#estado").html(json.html);
            }
        })
        .fail(function() 
        {
          alert("Ocurrio un error al actualizar el estado intenta de nuevo");
        })
      }
        
        $(document).ready(function(){
                
                $('input[type="checkbox"]').on('change', function() 
                {
                    $('input[name="' + this.name + '"]').not(this).prop('checked', false);
                    $('#ModalPayOne').show();
                });
                
                $.validator.addMethod("checkUserName",function(value, element) {
                  var response = false;
                    $.ajax({
                        type:"POST",
                        async: false,
                        url: "/Login/isUserValidate",
                        data: {usuario: $("#usuario").val()},
                        success: function(data) {
                            if(data=="true"){
                                $('#btnEntrar').attr("disabled", false);
                                response = true;
                            }else{
                                $('#btnEntrar').attr("disabled", true);
                            }
                        }
                    });

                    return response;
                },"El usuario no es correcto");
            });
      </script>
html;
        View::set('header',$extraHeader);
        View::set('footer',$extraFooter);
        View::set('idCountry',$this->getCountry());
        View::render("Register");
    }

    public function Success(){

        $register = new \stdClass();

        $prefijo = MasterDom::getDataAll('prefijo');
        $register->_prefijo = $prefijo;

        $nombre = MasterDom::getDataAll('nombre');
        $register->_nombre = $nombre;

        $apellidop = MasterDom::getDataAll('apellidop');
        $register->_apellidop = $apellidop;

        $apellidom = MasterDom::getDataAll('apellidom');
        $register->_apellidom = $apellidom; 

        $correo = $_REQUEST['email_validado'];

        $email = MasterDom::getDataAll('email_validado');
        $register->_email = $email;
        
        $especialidad = MasterDom::getDataAll('especialidad');
        $register->_especialidad = $especialidad;        
  

        $telefono = MasterDom::getDataAll('telefono');
        $register->_telefono = $telefono;

        $pais = MasterDom::getDataAll('pais');
        $register->_pais = $pais;

        $estado = MasterDom::getDataAll('estado');
        $register->_estado = $estado;

        $name_register = $nombre." ".$apellidop." ".$apellidom;
        $email_register = $email;

        

       /* echo "<pre>";
        var_dump($register);
        echo "</pre>";
        exit();*/


        $id = RegisterDao::insert($register);
        if($id >= 1 )
        {
            $this->alerta($id,'add',$name_register,$email_register);
            
        }else
        {
            $this->alerta($id,'error',$name_register,$email_register);
        }
    }

    public function alerta($id, $parametro,$name_register,$email_register){
        $regreso = "/Login/";

        if($parametro == 'add'){
            $email= $email_register;
            $name = $name_register;
            $mensaje = "Se ha agregado correctamente";
            $class = "success";
        }

        if($parametro == "error"){
            $mensaje = "Al parecer ha ocurrido un problema";
            $class = "danger";
        }

       


        View::set('class',$class);
        View::set('regreso',$regreso);
        View::set('mensaje',$mensaje);
        View::set('name',$name);
        View::set('email',$email);
        //View::set('header',$this->_contenedor->header($extraHeader));
        //View::set('footer',$this->_contenedor->footer($extraFooter));
        View::render("alerta");
    }

    public function getCountry(){
        $country = '';
        foreach (RegisterDao::getCountryAll() as $key => $value) {
            $country.=<<<html
        <option value="{$value['id_pais']}">{$value['country']}</option>
html;
        }
        return $country;
    }

    public function ObtenerEstado(){
        $pais=$_POST['pais'];

        if($pais != 156)
        {
            $estados = RegisterDao::getState($pais);
            $html="";
            foreach ($estados as $estado){
                $html.='<option value="'.$estado['id_estado'].'">'.$estado['estado'].'</option>';
            }
        }
        else
        {
            $html="";
            $html.='
                <option value="" disabled selected>Select Option</option>
                <option value="2537">Aguascalientes</option>
                <option value="2538">Baja California</option>
                <option value="2539">Baja California Sur</option>
                <option value="2540">Campeche</option>
                <option value="2541">Chiapas</option>
                <option value="2542">Chihuahua</option>
                <option value="2543">Coahuila de Zaragoza</option>
                <option value="2544">Colima</option>
                <option value="2545">Ciudad de Mexico</option>
                <option value="2546">Durango</option>
                <option value="2547">Guanajuato</option>
                <option value="2548">guerrero</option>
                <option value="2549">Hidalgo</option>
                <option value="2550">Jalisco</option>
                <option value="2551">Estado de Mexico</option>
                <option value="2552">Michoacan de Ocampo</option>
                <option value="2553">Morelos</option>
                <option value="2554">Nayarit</option>
                <option value="2555">Nuevo Leon</option>
                <option value="2556">Oaxaca</option>
                <option value="2557">Puebla</option>
                <option value="2558">Queretaro de Artiaga</option>
                <option value="2559">Quinta Roo</option>
                <option value="2560">San Lusi Potosi</option>
                <option value="2561">Sonora</option>
                <option value="2562">Tabasco</option>
                <option value="2563">Tamaulipas</option>
                <option value="2564">Tlaxcala</option>
                <option value="2565">Veracruz-Llave</option>
                <option value="2566">Yucatan</option>
                <option value="2567">Zacatecas</option>
                ';
        }


        $respuesta = new respuesta();
        $respuesta->success = true;
        $respuesta->html = $html;

        echo json_encode($respuesta);
    }

}
class respuesta {
    public $success;
    public $html;
}
