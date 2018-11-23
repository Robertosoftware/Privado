<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();

$db = mysqli_connect('localhost', 'root', '254088Ma!', 'mandra');
if (isset($_POST['oferta_register'])) {
    $db = mysqli_connect('localhost', 'root', '254088Ma!', 'mandra');
    mysqli_set_charset($db, 'utf8');
    $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
    $salario = mysqli_real_escape_string($db, $_POST['salario']);
    $empresa = mysqli_real_escape_string($db, $_POST['empresa']);
    $fecha = mysqli_real_escape_string($db, $_POST['fecha']);
    $telefono = mysqli_real_escape_string($db, $_POST['telefono']);
    $correo = mysqli_real_escape_string($db, $_POST['correo']);
    $experiencia = mysqli_real_escape_string($db, $_POST['experiencia']);
    $horario = mysqli_real_escape_string($db, $_POST['horario']);
    $categoria = mysqli_real_escape_string($db, $_POST['categoria']);
    $subcategoria = mysqli_real_escape_string($db, $_POST['subcategoria']);
    $localidad = mysqli_real_escape_string($db, $_POST['localidad']);
    $ingles = mysqli_real_escape_string($db, $_POST['ingles']);
    $edad_req = mysqli_real_escape_string($db, $_POST['edad_req']);
    $activo = mysqli_real_escape_string($db, $_POST['activo']);
    $sexo = mysqli_real_escape_string($db, $_POST['sexo']);
    $descripcion =mysqli_real_escape_string($db, $_POST['descripcion']);
    $educacion= mysqli_real_escape_string($db, $_POST['educacion']);
  	$query = "INSERT INTO trabajo (anos_exp, activo, nombre, salario, fecha_post, telefono, correo, horario_id_horario, categoria_idcategoria, subcategoria_idsubcategoria, localidad_idlocalidad, ingles_idingles, empresa_idempresa, sexo_idsexo, edad_req, educacion_ideducacion, descripcion) VALUES('$experiencia', '$activo', '$nombre','$salario','$fecha','$telefono','$correo','$horario','$categoria', '$subcategoria','$localidad','$ingles','$empresa', '$sexo', '$edad_req', '$educacion', '$descripcion')";
 	$insertado =mysqli_query($db, $query);
          $last_row = mysqli_insert_id($db);
if($insertado){
  	  $_SESSION['idoferta'] = $last_row;
     $edit = mysqli_real_escape_string($db, $_POST['competencia1']);
  	  $_SESSION['competencia1'] = $edit;
     $edit = mysqli_real_escape_string($db, $_POST['competencia2']);
  	  $_SESSION['competencia2'] = $edit;
     $edit = mysqli_real_escape_string($db, $_POST['competencia3']);
  	  $_SESSION['competencia3'] = $edit;
    header('location: ../../index-admin.php#!/Ofertatrabajo');}
else{
}
}
if (isset($_POST['oferta_competencia'])) {
 $db = mysqli_connect('localhost', 'root', '254088Ma!', 'mandra');
    mysqli_set_charset($db, 'utf8');
     $competencia1= mysqli_real_escape_string($db, $_POST['competencia1']);
         $competencia2= mysqli_real_escape_string($db, $_POST['competencia2']);
         $competencia3= mysqli_real_escape_string($db, $_POST['competencia3']);
         $pericidad1= mysqli_real_escape_string($db, $_POST['pericidad1']);
        $pericidad2= mysqli_real_escape_string($db, $_POST['pericidad2']);
        $pericidad3= mysqli_real_escape_string($db, $_POST['pericidad3']);
     $id= mysqli_real_escape_string($db, $_POST['id']);
      	$query = "INSERT INTO trabajo_has_tecnica (tecnica_idtecnica, importancia, pericidad, trabajo_id_trabajo) VALUES ('$competencia1', '1', '$pericidad1', '$id')";
     	$insertado1 =mysqli_query($db, $query);
    $query = "INSERT INTO trabajo_has_tecnica (tecnica_idtecnica, importancia, pericidad, trabajo_id_trabajo) VALUES ('$competencia2', '2', '$pericidad2', '$id')";
     	$insertado =mysqli_query($db, $query);
    $query = "INSERT INTO trabajo_has_tecnica (tecnica_idtecnica, importancia, pericidad, trabajo_id_trabajo) VALUES ('$competencia3', '3', '$pericidad3', '$id')";
     	$insertado =mysqli_query($db, $query);
if($insertado1){
      	 $_SESSION['idtrabajo'] = $id;
    header('location: ../../index-admin.php#!/Ofertahab');
}else{
        echo "Mal hecho";
}
}
if (isset($_POST['oferta_habilidad'])) {
 $db = mysqli_connect('localhost', 'root', '254088Ma!', 'mandra');
    mysqli_set_charset($db, 'utf8');
     $habilidad1= mysqli_real_escape_string($db, $_POST['habilidad1']);
    $habilidad2= mysqli_real_escape_string($db, $_POST['habilidad2']);
    $habilidad3= mysqli_real_escape_string($db, $_POST['habilidad3']);
         $id= mysqli_real_escape_string($db, $_POST['id']);
    $query = "INSERT INTO trabajo_has_habilidad (habilidad_idhabilidad, importancia, trabajo_id_trabajo) VALUES ('$habilidad1', '1', '$id')";
             	$insertado1 =mysqli_query($db, $query);
 $query = "INSERT INTO trabajo_has_habilidad (habilidad_idhabilidad, importancia, trabajo_id_trabajo) VALUES ('$habilidad2', '2', '$id')";
             	$insertado =mysqli_query($db, $query);
     $query = "INSERT INTO trabajo_has_habilidad (habilidad_idhabilidad, importancia, trabajo_id_trabajo) VALUES ('$habilidad3', '3', '$id')";
             	$insertado =mysqli_query($db, $query);
    if($insertado1){
    header('location: ../../index-admin.php#!/Ofertaexito');
}else{
        echo "Mal hecho";
}
}

?>
