<?php
 if(isset($_POST['submit'])){

	$para = "stivsal12@gmail.com"; 
	$asunto = "Notificacion perfumes";
	$nombre = $_POST['nombre'];
	$correo = $_POST['email'];
	$mensaje = $_POST['mensaje'];

	$cuerpo = " Enviado por: $nombre\n E-Mail: $correo\n $check_msg Mensaje:\n $mensaje\n";

	echo "Tu mensaje ha sido enviado a $para!";
	mail($para, $asunto, $cuerpo);
	
} else {
	echo "Vuelve a intentarlo";
}
?>
