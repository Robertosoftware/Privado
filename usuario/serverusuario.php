	<?php

error_reporting(E_ALL ^ E_NOTICE);
error_reporting(E_ALL ^ E_WARNING);

session_start();

// initializing variables

$db = mysqli_connect('localhost', 'root', '254088Ma!', 'mandra');
$correo=$_SESSION['correo'];
if (isset($_POST['registrar_usuario'])) {
$q="select * from user_register where correo = '$correo';";
$result =mysqli_query($db, $q);
$row=mysqli_fetch_array($result);

$id = $row['id_usuario'];


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


    $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
    $apellido_pat = mysqli_real_escape_string($db, $_POST['apellido_pat']);
    $apellido_mat = mysqli_real_escape_string($db, $_POST['apellido_mat']);
    $edad = mysqli_real_escape_string($db, $_POST['edad']);
    $telefono = mysqli_real_escape_string($db, $_POST['telefono']);
    $celular = mysqli_real_escape_string($db, $_POST['celular']);
    $linkedin = mysqli_real_escape_string($db, $_POST['linkedin']);
    $sueldo_ac = mysqli_real_escape_string($db, $_POST['sueldo_ac']);
    $sueldo_des = mysqli_real_escape_string($db, $_POST['sueldo_des']);
    $descripcionhab = mysqli_real_escape_string($db, $_POST['descripcionhab']);
    $descripcionper = mysqli_real_escape_string($db, $_POST['descripcionper']);
    $horario = mysqli_real_escape_string($db, $_POST['horario']);
    $categoria = mysqli_real_escape_string($db, $_POST['categoria']);
    $subcategoria = mysqli_real_escape_string($db, $_POST['subcategoria']);
    $localidad = mysqli_real_escape_string($db, $_POST['localidad']);
    $ingles =mysqli_real_escape_string($db, $_POST['ingles']);
    $educacion =mysqli_real_escape_string($db, $_POST['educacion']);
   $sexo =mysqli_real_escape_string($db, $_POST['sexo']);

 $query1 = "UPDATE usuario set nombre='$nombre'where user_register_id_usuario = $id;";
$query2 = "UPDATE usuario set apellido_paterno='$apellido_pat'where user_register_id_usuario = $id;";
$query3 = "UPDATE usuario set apellido_materno='$apellido_mat'where user_register_id_usuario = $id;";
$query4 = "UPDATE usuario set edad='$edad'where user_register_id_usuario = $id;";
$query5 = "UPDATE usuario set telefono='$telefono'where user_register_id_usuario = $id;";
$query6 = "UPDATE usuario set celular='$celular'where user_register_id_usuario = $id;";
$query7 = "UPDATE usuario set linkedin='$linkedin'where user_register_id_usuario = $id;";
$query8 = "UPDATE usuario set sueldo_actual='$sueldo_ac'where user_register_id_usuario = $id;";
$query9 = "UPDATE usuario set salario_deseado='$sueldo_des'where user_register_id_usuario = $id;";
$query10 = "UPDATE usuario set descripcion_habilidad='$descripcionhab'where user_register_id_usuario = $id;";
$query11 = "UPDATE usuario set descripcion_persona='$descripcionper'where user_register_id_usuario = $id;";
$query12 = "UPDATE usuario set horario_id_horario='$horario'where user_register_id_usuario = $id;";
$query13 = "UPDATE usuario set subcategoria_idsubcategoria='$subcategoria'where user_register_id_usuario = $id;";
$query14 = "UPDATE usuario set categoria_idcategoria='$categoria'where user_register_id_usuario = $id;";
$query15 = "UPDATE usuario set localidad_idlocalidad='$localidad'where user_register_id_usuario = $id;";
$query16 = "UPDATE usuario set ingles_idingles='$ingles'where user_register_id_usuario = $id;";
$query17 = "UPDATE usuario set sexo_idsexo='$sexo'where user_register_id_usuario = $id;";
$query18 = "UPDATE usuario set educacion_ideducacion='$educacion'where user_register_id_usuario = $id;";

if($nombre<>NULL){
   $insertado =mysqli_query($db, $query1);
}

if($apellido_pat<>NULL){
   $insertado =mysqli_query($db, $query2);
}

if($apellido_mat<>NULL){
   $insertado =mysqli_query($db, $query3);
}
if($edad<>NULL){
   $insertado =mysqli_query($db, $query4);
}
if($telefono<>NULL){
   $insertado =mysqli_query($db, $query5);
}
if($celular<>NULL){
   $insertado =mysqli_query($db, $query6);
}
if($linkedin<>NULL){
   $insertado =mysqli_query($db, $query7);
}
if($sueldo_ac<>NULL){
   $insertado =mysqli_query($db, $query8);
}
if($sueldo_des<>NULL){
   $insertado =mysqli_query($db, $query9);
}
if($descripcionhab<>NULL){
   $insertado =mysqli_query($db, $query10);
}
if($descripcionper<>NULL){
   $insertado =mysqli_query($db, $query11);
}
if($horario<>NULL){
   $insertado =mysqli_query($db, $query12);
}
if($subcategoria<>NULL){
   $insertado =mysqli_query($db, $query13);
}
if($categoria<>NULL){
   $insertado =mysqli_query($db, $query14);
}
if($localidad<>NULL){
   $insertado =mysqli_query($db, $query15);
}
if($ingles<>NULL){
   $insertado =mysqli_query($db, $query16);
}
if($sexo<>NULL){
   $insertado =mysqli_query($db, $query17);
}
if($educacion<>NULL){
   $insertado =mysqli_query($db, $query18);
}

    
//   	$query = "UPDATE usuario set nombre='$nombre', apellido_paterno= '$apellido_pat' , apellido_materno= '$apellido_mat', edad='$edad',telefono='$telefono',celular='$celular',linkedin='$linkedin',sueldo_actual='$sueldo_ac',salario_deseado='$sueldo_des', descripcion_habilidad='$descripcionhab',descripcion_persona='$descripcionper',horario_id_horario='$horario',subcategoria_idsubcategoria='$subcategoria', categoria_idcategoria='$categoria', localidad_idlocalidad='$localidad', ingles_idingles='$ingles',sexo_idsexo= '$sexo', educacion_ideducacion='$educacion'   where user_register_id_usuario = $id;";
//
// 	$insertado =mysqli_query($db, $query);

if($insertado){
      	  $_SESSION['idusuario'] = $id;
    $edit = mysqli_real_escape_string($db, $_POST['competencia1']);
  	  $_SESSION['competencia1'] = $edit;
     $edit = mysqli_real_escape_string($db, $_POST['competencia2']);
  	  $_SESSION['competencia2'] = $edit;
     $edit = mysqli_real_escape_string($db, $_POST['competencia3']);
  	  $_SESSION['competencia3'] = $edit;
    header('location: ../index.php#!/Usuario-competencia');
}else{

}
}
if (isset($_POST['usuario_competencia'])) {
 $db = mysqli_connect('localhost', 'root', '254088Ma!', 'mandra');
    mysqli_set_charset($db, 'utf8');
     $competencia1= mysqli_real_escape_string($db, $_POST['competencia1']);
         $competencia2= mysqli_real_escape_string($db, $_POST['competencia2']);
         $competencia3= mysqli_real_escape_string($db, $_POST['competencia3']);
         $pericidad1= mysqli_real_escape_string($db, $_POST['pericidad1']);
        $pericidad2= mysqli_real_escape_string($db, $_POST['pericidad2']);
        $pericidad3= mysqli_real_escape_string($db, $_POST['pericidad3']);
     $id= mysqli_real_escape_string($db, $_POST['idusuario2']);
      	$query = "Update usuario_has_tecnica set tecnica_idtecnica = '$competencia1', pericidad = '$pericidad1' where user_register_id_usuario = '$id' and importancia = 1";
     	$insertado1 =mysqli_query($db, $query);
   $query = "Update usuario_has_tecnica set tecnica_idtecnica = '$competencia2', pericidad = '$pericidad2' where user_register_id_usuario = '$id' and importancia = 2";
     	$insertado2 =mysqli_query($db, $query);
   $query = "Update usuario_has_tecnica set tecnica_idtecnica = '$competencia3', pericidad = '$pericidad3' where user_register_id_usuario = '$id' and importancia = 3";
     	$insertado3 =mysqli_query($db, $query);
if($insertado1){
      	 $_SESSION['idusuario'] = $id;
    header('location: ../index.php#!/Usuario-habilidad');
}else{
        echo "Mal hecho <br>";
        echo $competencia3;
     echo "Mal hecho <br>";
        echo $competencia2;
     echo "Mal hecho <br>";
        echo $competencia1;
     echo "Mal hecho <br>";
        echo $pericidad2;
     echo "Mal hecho <br>";
        echo $id;
            echo $pericidad1;
            echo $pericidad3;
      
}
}
if (isset($_POST['usuario_habilidad'])) {
 $db = mysqli_connect('localhost', 'root', '254088Ma!', 'mandra');
    mysqli_set_charset($db, 'utf8');
     $habilidad1= mysqli_real_escape_string($db, $_POST['habilidad1']);
    $habilidad2= mysqli_real_escape_string($db, $_POST['habilidad2']);
    $habilidad3= mysqli_real_escape_string($db, $_POST['habilidad3']);
    $activo= mysqli_real_escape_string($db, $_POST['activo']);
         $id= mysqli_real_escape_string($db, $_POST['idusuario2']);
   $query = "Update usuario_has_habilidad set habilidad_idhabilidad= '$habilidad1' where user_register_id_usuario = '$id' and importancia = 1";
             	$insertado1 =mysqli_query($db, $query);
$query = "Update usuario_has_habilidad set habilidad_idhabilidad= '$habilidad2' where user_register_id_usuario = '$id' and importancia = 2";
             	$insertado =mysqli_query($db, $query);
     $query = "Update usuario_has_habilidad set habilidad_idhabilidad= '$habilidad3' where user_register_id_usuario = '$id' and importancia = 3";
             	$insertado =mysqli_query($db, $query);
    $query= "UPDATE usuario set activo='$activo'where user_register_id_usuario = $id;";
                 	$insertado =mysqli_query($db, $query);
    if($insertado1){
    header('location: ../index.php#!/Usuario-exito');
}else{
        echo "Mal hecho";
}
}
?>
