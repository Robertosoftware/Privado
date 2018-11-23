<?php include('session.php') ?>
<?php  if (isset($_SESSION['correo'])) : ?>
<html lang="en">
<head>
	<title>Registro</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="../resources/registro.css">
    <?php  $db = mysqli_connect('localhost', 'root', '254088Ma!', 'mandra');
      mysqli_set_charset($db, 'utf8') ?>
	
  <link rel="icon" href="../resources/fav.ico.jpg">
        <!-- Bootstrap core CSS -->
    <link href="../resources/bootstrap.min.css" rel="stylesheet">
   <!-- Bootstrap theme -->
    <link href="../resources/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body>

    <div class="header">
  	<h2>Formulario del Usuario</h2>
  </div>
<div>
  <form action="#" method="post">
      <label for="nombre">Nombre</label><br>
      <input class="form-control" type="text" name="nombre" placeholder="Nombre" required><br>
    
      <label for="apellidop">Apellido Paterno</label><br>
      <input class="form-control" type="text" name="apellidop" placeholder="Apellido paterno" required><br>
    
      <label for="apellidom">Apellido Materno</label><br>
      <input class="form-control" type="text" name="apellidom" placeholder="Apellido materno"required><br>
    
      <label for="edad">Edad</label><br>
      <input class="form-control" type="number" name="edad" placeholder="Edad" required><br>
    
      <label for="telefono">Teléfono</label><br>
      <input class="form-control" type="text" name="telefono" placeholder="Teléfono" required><br>

      <label for="celular">Celular</label><br>
      <input class="form-control" type="number" name="celular" placeholder="Celular" required><br>
    
      <label for="linkedin">LinkedIn</label><br>
      <input class="form-control" type="text" name="linkedin" placeholder="LinkedIn" ><br>
    
      <label for="sueldoac">Sueldo Actual</label><br>
      <input class="form-control" type="number" name="sueldoac" placeholder="Sueldo actual" required><br>
    
      <label for="salariodes">Salario deseado</label><br>
      <input class="form-control" type="number" name="salariodes" placeholder="Salario deseado" required><br>
        
      <label for="descripcionhab">Descripción de las habilidades</label><br>
    <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input style="height:100px" type="text" class="form-control" name="descripcionhab" ria-describedby="sizing-addon1" value="" >
      </div>   
      
        
        <label for="descripcionper">Descripción personal</label><br>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input style="height:100px" type="text" class="form-control" name="descripcionper" ria-describedby="sizing-addon1" value="" >
      </div>
         <br><label for="categoria">Categoría</label><br>
<select required name="categoria" class="form-control dropd">
    <option value="">
        Selecciona el correspondiente
        </option>           
        <?php
        $query="select * from categoria";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idcategoria'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
        
        <br><label for="subcategoria">Subcategoría</label><br>
        <select required name="subcategoria" class="form-control dropd">
    <option value="">
        Selecciona el correspondiente
        </option>           
        <?php
        $query="select * from subcategoria";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idsubcategoria'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
      
        <br><label for="localidad">Localidad</label><br>
   <select required name="localidad" class="form-control dropd">
    <option>
        Selecciona el correspondiente
        </option>           
        <?php
        $query="select * from localidad";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idlocalidad'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
        
        <br><label for="ingles">Nivel de inglés</label><br>
     <select required name="ingles" class="form-control dropd">
    <option value="">
        Selecciona el correspondiente
        </option >           
        <?php
        $query="select * from ingles";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idingles'].'">'.$row['nivel'].'</option>';
            }
        }
        ?>
     </select>
        
        
         <br><label for="sexo">Sexo</label><br>
  <select required name="sexo" class="form-control dropd">
    <option value="">
        Selecciona el correspondiente
        </option>           
        <?php
        $query="select * from sexo";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idsexo'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
      </select>
             <label for="educacion">Educación</label><br>
 <select required name="educacion" class="form-control dropd">
    <option value="">
        Selecciona el correspondiente
        </option>           
        <?php
        $query="select * from educacion";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['ideducacion'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
    <div class="input-group">
    <button type="submit" class="btn btn-success btn-lg" name="usuario_registro">Siguiente</button>
  	</div>
  </form>
    


    </div>
     
  
</body>
</html>
    <?php endif ?>
