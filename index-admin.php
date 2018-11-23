<?php include('admin/session-admin.php') ?>
<!DOCTYPE html>
<html lang="es">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
    <head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="resources/fav.ico.jpg">
        <!-- Bootstrap core CSS -->
    <link href="resources/bootstrap.min.css" rel="stylesheet">
   <!-- Bootstrap theme -->
    <link href="resources/navbar-fixed-top.css" rel="stylesheet">
   <!-- Custom styles for this template
    <link href="theme.css" rel="stylesheet">-->
		<script src="js/myModule-admin.js"></script>
		<script src="js/myControllers-admin.js"></script>
		
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--> 
	<title>Inicio del Administrador</title>
	<link rel="stylesheet" type="text/css" href="resources/style2.css">
</head>
<body ng-app="myApp">
	<div class="container">
        <nav class="navbar navbar-default navbar-fixed-top">
        	<div class="container-fluid">
                        <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#!">MANDRA SOLUCIONES</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#!Registro">Inicio</a></li>
            <li><a href="#!Oferta">Ofertas de trabajo</a></li>
            <li class="dropdown"><!--<a href="#!">Consultar información</a>-->
             <a class="dropdown-toggle" data-toggle="dropdown">Consulta CRUD <span class="caret"></span></a>
      <ul class="dropdown-menu">
          <li class="dropdown-header">Tablas mayores</li>
        <li><a href="#!Usuarios">Usuarios</a></li>
        <li><a href="#!Trabajo">Trabajos</a></li>
        <li class="dropdown-header">Tablas menores</li>
        <li><a href="#!Categoria">Categoria</a></li>
        <li><a href="#!Subcategoria">Sub categoria</a></li>
        <li><a href="#!Competencia">Competencia</a></li>
        <li><a href="#!Tecnica">Competencia técnica</a></li>
        <li><a href="#!Educacion">Educación</a></li>
        <li><a href="#!Horario">Horario</a></li>
        <li><a href="#!Ingles">Inglés</a></li>
        <li><a href="#!Localidad">Localidad</a></li>
        <li><a href="#!Sexo">Sexo</a></li>
        <li><a href="#!Empresa">Empresa</a></li>
      </ul></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index-admin.php?logout='1'">Salir de la sesión<span class="sr-only">(current)</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
		<div ng-view></div>
	</div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="jquery.min.js"><\/script>')</script>
    <script src="resources/bootstrap.min.js"></script>
    <script src="resources/docs.min.js"></script>
  </body>
</html>
