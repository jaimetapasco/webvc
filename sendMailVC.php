<?php 

sleep(3);

$trato = $_POST['trato'];
$nombre = $_POST['nombre'];
$necesidad = $_POST['necesidad'];
$producto = $_POST['producto'];
$formNombre = $_POST['formNombre'];
$formEmail = $_POST['formEmail'];
$formTel = $_POST['formTel'];
$formM = $_POST['formM'];


/*echo $trato."<br>";
echo $nombre."<br>";
echo $necesidad."<br>";
echo $producto."<br>";
echo $formNombre."<br>";
echo $formEmail."<br>";
echo $formTel."<br>";
echo $formM."<br>";*/

$to = 'desarrollo5@virtualcolors.com';

$subject = "Contacto Virtual Colors: ".$formNombre.' te ha enviado un mensaje.';

$headers = "From: Ayuda Virtual Colos";
//$headers .= "Reply-To: ". strip_tags($_POST['req-email']) . "\r\n";
//$headers .= "CC: susan@example.com\r\n";
//$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$message .= '<h3 style="text-align: center;">Hola, <span style="color:#85c041;">'.$nombre.'</span> nos ha enviado un mensaje atraves de la pagina Virtual Colors</h3>';
$message .= '<h3 style="text-align: center;"><span style="color:#85c041;">"'.$trato.' '.$nombre.'</span> Actualmente existe la necesidad de hacer <span style="color:#85c041;">'.$necesidad.'</span> Y para esto solicitamos información sobre <span style="color:#85c041;">'.$producto.'</span>"</h3><br><br>';
$message .= '<h4>Datos de Contacto</h4> <br>';
$message .= '<p>Nombre: <strong>'.$formNombre.'</strong></p>';
$message .= '<p>Email: <strong>'.$formEmail.'</strong></p>';
$message .= '<p>Tel: <strong>'.$formTel.'</strong></p>';
$message .= '<p>Mensaje: <strong>'.$formM.'</strong></p>';


if (mail($to, $subject, $message, $headers)) {
	echo "<i class='enviadoMSJ fa fa-check-circle' aria-hidden='true'></i>Mensaje Enviado, nos pondremos en contacto lo antes posible";
}else{
	echo "Ocurrion un error";
}


 ?>