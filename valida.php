<?php
   $user = $_POST["usuario"];
   $pass = $_POST["pwd"];

   if($user != null && $pass!=null){
	   echo "Se recibieron los datos";
	   // conexion a la BD
	   $link = mysqli_connect();
	   $sql = "select nombre, ap_pat, ap_mat from usuarios where login='$user' and password='$pass'";
	   if($result = mysqli_query($link, $sql)){
		   while($row = mysqli_fetch_array($result)){
		    // si existe el usuario
		$nombre = $row["nombre"];
		$appat = $row["ap_pat"];
		$apmat = $row["ap_mat"];
		echo "nombre = $nombre $appat $apmat";
		   }
	   }mysqli_close($link);
   }else{
     header("Location: login.php?error=1");	
   }
?>