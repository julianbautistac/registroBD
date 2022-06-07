<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <title>Iniciar Sesion</title>
    </head>
    <body>
        <br> <br>
        <div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card text-center">
				<h3>Iniciar Sesion</h3>
				
			</div>
			<div class="card-body">
<?php
if(isset($_GET["error"])){
$e = $_GET["error"];
if($e == "1")
{	
?>
<div class="alert alert-danger" role="alert">
 Debes capturar los datos
</div>
      
<?php
}
}
?>
<form action="valida.php" method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" name="usuario" placeholder="usuario" id="usuario" required>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" name="pwd" placeholder="contraseña" id="pwd" required>
					</div>
                                <div class="card text-center">
                                <input name="enviar"type="submit" class="btn btn-primary btn-lg" value="Iniciar Sesion">
                                
                            </div>
				</form>
                            <div><a href="registro.html"> Registrarse</a></div>
			</div>
			
		</div>
	</div>
</div>
    </body>
</html>