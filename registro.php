<?php
$name = $_POST["nombre"];
$appat = $_POST["ap_pat"];
$apmat = $_POST["ap_mat"];
$fnac = $_POST["fnac"];
$user = $_POST["usuario"];
$pwd = $_POST["pwd"];

if($name != null && $appat != null && $fnac != null && $user != null && $pwd != null){
        $server = "localhost";
        $usuario = "al123456";	// cambiar usuario
        $pass = "abc123";		// cambiar contraseña
        $db = "db2022";
        $link = mysqli_connect($server, $usuario, $pass, $db) or die("Error en ".mysqli_error($link));
        echo "Conexion Establecida<br>";        
        /*$fecha = date_create($fnac);
        $fecha=date_format($fecha, "Y-m-d");
		*/
        $sql = "insert into usuarios values ('$user', '$pwd', '$name', '$appat', '$apmat', '$fnac')";
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