/*
	Este script valida que los datos ingresados sean
	correctos, haciendo una consulta a la base de datos
	para verificarlos. 		
*/
<?php
	// Toma de datos (Formulario):
	$usuario = $_REQUEST['usuario'];
	$clave 	 = $_REQUEST['clave'];
	
	// Toma de datos (Base de datos):
	$host = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "db_escoltas";
	
	$conexion = new mysqli( $host, $user, $pass, $dbname );
	
	
?>
