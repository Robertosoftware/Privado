<?php



session_start();
 error_reporting(E_ALL ^ E_NOTICE);

// initializing variables

$db = mysqli_connect('localhost', 'root', '254088Ma!', 'mandra');
$correo=$_SESSION['correo'];
if (isset($_POST['activar_usr'])) {
$q="select * from user_register where correo = '$correo';";
$result =mysqli_query($db, $q);
$row=mysqli_fetch_array($result);


$id = $row['id_usuario'];

$activacion=1;
$nombre=" ";
$apellido_pat=" ";
$apellido_mat=" ";
$edad=" ";
$telefono=" ";
$celular=" ";
$linkedin=" ";
$sueldo_ac=" ";
$sueldo_des=" ";
$descripcionhab=" ";
$descripcionper=" ";
$horario=" ";
$subcategoria=" ";
$categoria=" ";
$localidad=" ";
$ingles=" ";
$sexo=" ";
$educacion=" ";

$errors = array();
// connect to the database

$quer="select*from usuario where user_register_id_usuario='$id';";
$res=mysqli_query($db, $quer);
$row2=mysqli_fetch_array($res);

$quer2="select*from usuario_has_tecnica where user_register_id_usuario='$id';";
$res2=mysqli_query($db, $quer2);
$row3=mysqli_fetch_array($res2);

$quer3="select*from usuario_has_habilidad where user_register_id_usuario='$id';";
$res3=mysqli_query($db, $quer3);
$row4=mysqli_fetch_array($res3);

$nombre=$row2['nombre'];
$apellido_pat = $row2['apellido_paterno'];
$apellido_mat = $row2['apellido_materno'];
$edad = $row2['edad'];
$horario = $row2['horario_id_horario'];
$celular = $row2['celular'];
$linkedin = $row2['linkedin'];
$sueldo_ac = $row2['sueldo_actual'];
$sueldo_des = $row2['salario_deseado'];
$descripcionhab = $row2['descripcion_habilidad'];
$descripcionper = $row2['descripcion_persona'];
$telefono = $row2['telefono'];
$categoria = $row2['categoria_idcategoria'];
$subcategoria = $row2['subcategoria_idsubcategoria'];
$localidad = $row2['localidad_idlocalidad'];
$ingles = $row2['ingles_idingles'];
$educacion = $row2['educacion_ideducacion'];
$sexo = $row2['sexo_idsexo'];

$tecnica = $row3['tecnica_idtecnica'];
$pericidad = $row3['pericidad'];

$habilidad = $row4['habilidad_idhabilidad'];


$activacion = mysqli_real_escape_string($db, $_POST['activa']);

if($activacion==0){
  $query1 = "UPDATE usuario set activo='Desactivar' where user_register_id_usuario = $id;";
   $insertado =mysqli_query($db, $query1);
    header('location: ../index.php#!/Usuario-desactivar');
}else{

  if($nombre <> NULL and $apellido_pat<>NULL and $apellido_mat<>NULL and $edad <> NULL and $celular <> NULL 
  and $sueldo_ac <> NULL and $sueldo_des <> NULL and $horario <> NULL
  and $categoria <> NULL and $subcategoria <> NULL and $localidad  <> NULL and $ingles <> NULL and $educacion <> NULL and $sexo <> NULL
  and $tecnica <> NULL and $pericidad <> NULL and $habilidad <> NULL){
  $query1 = "UPDATE usuario set activo='Activar' where user_register_id_usuario = $id;";
   $insertado =mysqli_query($db, $query1);
    header('location: ../index.php#!/Usuario-activar');
} else{
    header('location: ../index.php#!/Usuario-error-activar');
}

}


}







 ?>
