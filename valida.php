
<?php
require 'conexion.php';
$usuario = $_POST['usuario'];
$contrasenia = $_POST['pwd'];
session_start();

$_SESSION['usuario']=$usuario;

$consulta="SELECT * FROM usuarios where usuario='$usuario' and contrasenia='$pwd'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){

	header("location:home.php");
}else{

	include("index.php");
	<h1 class="bad">Error en la autentificacion</h1>

}

mysqli_free_result($resultado);
mysqli_close($conexion);

?>