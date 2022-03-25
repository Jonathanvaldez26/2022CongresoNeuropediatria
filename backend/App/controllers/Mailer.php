<?php
namespace App\controllers;
defined("APPPATH") OR die("Access denied");
require dirname(__DIR__).'/../public/librerias/PHPMailer/Exception.php';
require dirname(__DIR__).'/../public/librerias/PHPMailer/PHPMailer.php';
require dirname(__DIR__).'/../public/librerias/PHPMailer/SMTP.php';

use \Core\MasterDom;
use \Core\Controller;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception; 


class Mailer{
  

    private $_contenedor;

    function __construct(){
        //parent::__construct();
    }


    public function mailer($msg) {
        $mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'congressapmwadd2022@gmail.com';                     //SMTP username
    $mail->Password   = 'Grupolahe1';                               //SMTP password
    $mail->SMTPSecure = 'ssl';
    $mail->SMTPAutoTLS = false;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('congressapmwadd2022@gmail.com', 'APM');
    $mail->addAddress($msg['email'], $msg['name']);     //Add a recipient
    
    $html='     
    <!DOCTYPE html>
<html lang="en">

<!-- Define Charset -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<!-- Responsive Meta Tag -->
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">

<title>Email Template</title>

<!-- Responsive and Valid Styles -->
<style type="text/css">
    body {
        width: 100%;
        background-color: #FFF;
        margin: 0;
        padding: 0;
        -webkit-font-smoothing: antialiased;
        font-family: arial;
    }

    html {
        width: 100%;
    }
    .container{
        width: 80%;
        padding: 20px;
        margin: 0 auto;
        
    }

    img{
        width: 100%;
    }

  
</style>

</head>

<body leftmargin="0" topmargin="0" marginheight="0" marginwidth="0">
    
    <div class="container">
    <img src="https://register.dualdisorderswaddmexico2022.com/img/apm_email.jpeg" alt="">
        <p style="text-align: center !important;">
            <strong>¡Gracias por enviar su formulario de preinscripción!</strong>
        </p>
        <p>

            <strong>Dear:
                ('.$msg['name'].')</strong><br>
            Payment method: <span
                style="color: #40982B;">('.$msg['pay'].')</span><br>
            Account number: <span
                style="color: #40982B;">('.$msg['account_number'].')</span><br>
            Bank: <span
                style="color: #40982B;">('.$msg['bank'].')</span><br>
            Name: <span
                style="color: #40982B;">('.$msg['name_association'].')</span><br>
            Address: <span
                style="color: #40982B;">('.$msg['addres'].')</span><br>
            Swift Code: <span
                style="color: #40982B;">('.$msg['swift_account'].')</span><br>
            Swift Reference: <span
                style="color: #40982B;">('.$msg['reference'].')</span><br>
            Amount due: <span
                style="color: #40982B;">('.$msg['amount'].')</span><br>
                Payment deadline: <span
                style="color: #40982B;">('.$msg['date_pay'].')</span><br>
                

            <br><br>

            Reference:(Generate a referenci with the ID
            and name) <br>
            Amount due: (According to fee’s table) <br>
            Payment deadline: (5 days after register)
            <br>


        </p>
        <hr>
        Remember that your place at the conference will
        not be booked until full payment is received,
        and a confirmation email has been sent to you.
        Incomplete bookings will be cancelled after the
        payment deadline as indicated above.



        <p>
            If you have any enquiries or you do not
            receive your confirmation code within two
            working days
            of making your payment, please email your
            bank slip to dualdisorders@grupolahe.com.
        </p><br>

        
    </div>
    
        
</body>

</html>';
    

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'pre register';
    $mail->Body    = $html;
    // $mail->AltBody = 'Mensaje plano';

    // $msg = [
    //     'pay' => $pay,
    //     'name' => $name_register,
    //     'message_pay' => $message_pay,
    //     'amount' => $costo,
    //     'date_pay' => $limit_pay,
    //     'reference' => $reference_user,
    //     'account_number' => $account_number,
    //     'bank' => $bank,
    //     'name_association' => $name_association,
    //     'swift_account' => $swift_account,
    // ];
    
    $mail->send();
    //echo 'El mensaje ha sido enviado';
} catch (Exception $e) {
    //echo "No se pudo enviar el email: {$mail->ErrorInfo}";
}

    }

}
