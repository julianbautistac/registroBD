<?php
//creamos los datos para conectarnos a la base de datos
$host="localhost";
$bd="db2022";
$usuario="root";
$contrasenia="";

try {
    //enviamos las variables con sus valores para ingresar a a base de datos
    $conexion=new PDO("mysql:host=$host; dbname=$bd",$usuario,$contrasenia);
    
    if($conexion){echo "conectado... a sistema";}

} catch (Exception $ex) {
    
    echo $ex->getMessage();
    
}
?>