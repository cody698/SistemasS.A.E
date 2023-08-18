<?php
include "../../modelo/conexion.php";

//Import the PHPMailer class into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../../assest/PHPMailer/src/Exception.php';
require '../../assest/PHPMailer/src/PHPMailer.php';
require '../../assest/PHPMailer/src/SMTP.php';
//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('America/La_Paz');


//Create a new PHPMailer instance
$mail = new PHPMailer();
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
//SMTP::DEBUG_OFF = off (for production use)
//SMTP::DEBUG_CLIENT = client messages
//SMTP::DEBUG_SERVER = client and server messages
$mail->SMTPDebug = SMTP::DEBUG_SERVER;
//Set the hostname of the mail server
$mail->Host = 'mail.taskcardsae.com';
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->SMTPSecure = "ssl";
$mail->Port = 465;
//Whether to use SMTP authentication465
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = 'contacto@taskcardsae.com';
//Password to use for SMTP authentication
$mail->Password = 'sIzhyxO=Bv8t';
//Set who the message is to be sent from
$mail->setFrom('contacto@taskcardsae.com', 'Alerta de prestamo de Herramientas');
//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');
//Set who the message is to be sent to
$nombre = "Herramientas";
$correo = "squispe@sae.aero";
$mail->addAddress($correo, $nombre);
//Set the subject line
$mail->Subject = utf8_decode('Aviso de fecha de Devolución de Herramienta');
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), __DIR__);
//Replace the plain text body with one created manually


//para enviar a mas de un correo solo agregar a la lista de correos a enviar

/* $mail->addCC('willys.el.trueno@gmail.com', 'copia'); */
$mail->addCC('amiponce698@gmail.com', 'copia');
$mail->addCC('herramientas@sae.aero', 'copia');

require_once "../../controlador/logHerramientasControlador.php";
require_once "../../modelo/logHerramientasModelo.php";
$logherramientas = ControladorLogHerramientas::ctrInfoLogHerramientas();
$idHerra = 0;

//FECHA ACTUAL
date_default_timezone_set("America/La_Paz");
$fechaActual = new DateTime($fecha = date("Y-m-d"));

foreach ($logherramientas as $value) {
  $fechas = new DateTime($value["fecha_hora"]);
  $soloFecha = $fechas->format('Y-m-d');
  $convert = new DateTime($soloFecha);

  $diferencia = $fechaActual->diff($convert);
  $totalDias = $diferencia->days * ($diferencia->invert ? -1 : 1);

  if ($totalDias == -5) {
    $controlLogherramienta = ControladorLogHerramientas::ctrInfoLogEnvioEstado($value["id_log_herramientas"]);
    /* $herramientaPrestamo = json_decode($value['codigo_herramientas']); */
    $mail->Body = '<b>' . utf8_decode('El prestamo de Usuario/Técnico: ') . '<b>' . $value['nombre_usuario'] . ' <br> <b>' . utf8_decode('Transcurrieron: 5 dias<b> para su devolución.') . ' <br> <b> Fecha de Prestamo: ' . $value['fecha_hora'];
    $mail->isHTML(true);

    //mail->AltBody = 'This is a plain-text message body';
    //Attach an image file
    //$mail->addAttachment('images/phpmailer_mini.png');
    $mail->SMTPDebug = false;
    $mail->do_debug = false;
    //send the message, check for errors
    if (!$mail->send()) {
      echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
      echo
      "<p class='btn btn-success'>El mensaje se envio con exito</p>";
    }
  }
}
