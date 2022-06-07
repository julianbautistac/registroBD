<?php
$name=$_POST['nombre'];
$appat=$_POST['ap_pat'];
$apmat=$_POST['ap_mat'];
$fecha=$_POST['fnac'];
$user_f=$_POST['user'];
$password=$_POST['pwd'];



if($name != null && $appat != null && $apmat!=null && $fecha != null && $user_f != null && $password != null){
        $server = "localhost";
        $usuario = "root";	// cambiar usuario
        $pass = "";		// cambiar contraseña
        $db = "db2022";
        $link = mysqli_connect($server, $usuario, $pass, $db) or die("Error en ".mysqli_error($link));
        //$link = mysqli_connect($server, $db) or die("Error en ".mysqli_error($link));
        echo "Conexion Establecida<br>";        
        /*$fecha = date_create($fnac);
        $fecha=date_format($fecha, "Y-m-d");
		*/
        $sql = "insert into usuarios values ('$user_f', '$password', '$name', '$appat', '$apmat', '$fecha')";
        if(mysqli_query($link, $sql))
                echo "Se registro<br>";
        else
                echo "No se registro<br>";
        echo $sql;
        mysqli_close($link);		
}
// verificamos que se reciba la informacion del formulario
else{
        echo "No se recibieron datos";
}
?>