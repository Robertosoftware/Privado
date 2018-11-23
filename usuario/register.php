<?php
include('server.php')
    ?>
<!DOCTYPE html>
<html>
<html lang="es">
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../resources/fav.ico.jpg">
        <!-- Bootstrap core CSS -->
    <link href="../resources/bootstrap.min.css" rel="stylesheet">
   <!-- Bootstrap theme -->
    <link href="../resources/bootstrap-theme.min.css" rel="stylesheet">
    <head>
    <title>Registro del Sistema</title>
  <link rel="stylesheet" href="../resources/sstyle.css">
</head>
<body>
  <div class="header">
  	<h2>Registro del Usuario</h2>
  </div>
  <form method="post" action="register.php">
  	<?php include('../errores/errors.php'); ?>
      <label>Email</label>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="email" class="form-control" name="correo" ria-describedby="sizing-addon1" value="">
</div>
        	  <label>Password</label>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="password" class="form-control" name="password_1" ria-describedby="sizing-addon1" value="">
</div>
        	  <label>Confirmar password</label>
  	 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="password" class="form-control" name="password_2" ria-describedby="sizing-addon1" value="">
</div>
  	<div class="input-group">
    <button type="submit" class="btn btn-primary btn-lg" name="reg_user_register">Registrar</button>
  	</div>
  	<p>
  		Ya eres miembro? <a href="login.php">Ingresa aquí</a>
  	</p>
  </form>
</body>
</html>
