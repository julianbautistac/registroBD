<?php
//creamos los datos para conectarnos a la base de datos
$server = "localhost";
$usuario = "root";	// cambiar usuario
$pass = "";		// cambiar contraseña
$db = "db2022";
$conexion = mysqli_connect($server, $usuario, $pass, $db) or die("Error en ".mysqli_error($link));
//$link = mysqli_connect($server, $db) or die("Error en ".mysqli_error($link));
//echo "Conexion Establecida<br>"; 
?>