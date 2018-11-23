<?php
session_start()
    $con=mysqli_connect('localhost', 'root', '254088Ma!', 'mandra');
echo "ddd"

if (isset($_POST['boton_reg'])) {
    // Check connection
  if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    // escape variables for security
    $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
    $apellidop = mysqli_real_escape_string($con, $_POST['apellidop']);
    $apellidom = mysqli_real_escape_string($con, $_POST['apellidom']);
    $edad = mysqli_real_escape_string($con, $_POST['edad']);
    $telefono = mysqli_real_escape_string($con, $_POST['telefono']);
    $celular = mysqli_real_escape_string($con, $_POST['celular']);
	$linkedin = mysqli_real_escape_string($con, $_POST['linkedin']);
	$sueldoac = mysqli_real_escape_string($con, $_POST['sueldoac']);
	$salariodes = mysqli_real_escape_string($con, $_POST['salariodes']);
	$descripcionhab = mysqli_real_escape_string($con, $_POST['descripcionhab']);
	$descripcionper = mysqli_real_escape_string($con, $_POST['descripcionper']);
	$horario = mysqli_real_escape_string($con, $_POST['horario']);
	$categoria = mysqli_real_escape_string($con, $_POST['categoria']);
	$subcategoria = mysqli_real_escape_string($con, $_POST['subcategoria']);
	$localidad = mysqli_real_escape_string($con, $_POST['localidad']);
	$ingles = mysqli_real_escape_string($con, $_POST['ingles']);
	$sexo = mysqli_real_escape_string($con, $_POST['sexo']);
	$educacion = mysqli_real_escape_string($con, $_POST['educacion']);
	
    $sql="INSERT INTO usuario ('nombre', 'apellido_paterno', 'apellido_materno', 'edad', 'telefono', 'celular', 'linkedin', 'sueldo_actual', 
    'salario_deseado', 'descripción_habilidad', 'descripcion_persona', 'horario_id_horario',
    'subcategoria_idsubcategoria', 'categoria_idcategoria', 'localidad_idlocalidad', 'ingles_idingles', 'sexo_idsexo',
    'educacion_ideducacion')
      VALUES ('$nombre', '$apellidop', '$apellidom', '$edad', '$telefono', '$celular', '$linkedin', '$sueldoac', '$salariodes', '$descripcionhab',
      '$descripcionper', '$horario','$subcategoria', '$categoria','$localidad', '$ingles', '$sexo', '$educacion');";
}?>
    <?php


$result = mysqli_query($con,"SELECT * FROM usuario where nombre='$nombre';");



if($result->num_rows > 0){
$row = mysqli_fetch_array($result);
//if($pw==$row['password']){
//$_SESSION['loggedin'] = true;

//$_SESSION['username'] = $email;

// $_SESSION['start'] = time();


//$_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

//}}
//}
  mysqli_close($con);

//if(!$_SESSION['username']==NULL){
  //echo "Sesión iniciada como: " . $_SESSION['username'];
//}

  ?>
