
<?php
require 'conexion.php';
$usuario = $_POST['usuario'];
$pwd = $_POST['pwd'];
session_start();

$_SESSION['usuario']=$usuario;

$consulta="SELECT * FROM usuarios where login='$usuario' and password='$pwd'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){

	header("location:menu.php");
}else{
	?>
	<?php
	include("login.php");
	?>
	<h1 class="bad">Error en la autentificacion</h1>
	<?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);
?>