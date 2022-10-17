<?php 
	$nombre = $_POST['Name1'];
    $empresa =$_POST['Corporation1'];
	$email = $_POST['Email1'];
	$asunto = 'Solicitud de Propuesta';
	$mensaje = $_POST['Quote1'];


	if(mail('grupofigo.ags@outlook.com', $asunto, $mensaje)){
		echo "Correo enviado";
	}
 ?>