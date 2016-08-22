/*
	Sistema de información que almacena, consulta
	modifica o elimina registros sobre los días 
	compensatorios del personal de escoltas 
	pertenecientes al área de seguridad física de 
	Independence Drilling - Bogotá.
*/

/*
	Este Script PHP realiza la validación de que la
	sesión esté iniciada. De no ser así direcciona
	al usuario al inicio del sitio web.
*/
<?php
	session_start();
	
	if( !$_SESSION['sesion'] ){
		
		header("Location: index.html");
		
	}// Fin if



?>