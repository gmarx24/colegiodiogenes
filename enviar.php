<?php
	$destino= "stirlenin2115@gmail.com";
	$nombre = $_POST["nombre"];
	$correo = $_POST["correo"];
	$telefono = $_POST["telefono"];
	$mensaje = $_POST["mensaje"];
	$contenido = "Nombre: " . $nombre . "\nCorreo: " .$correo . "\nTelefono: " . $telefono . "\nMensaje: " . $mensaje;
	mail($destino, "Contacto", $contenido);
	header("Location:gracias.html");
?>