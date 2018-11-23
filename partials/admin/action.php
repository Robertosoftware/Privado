<?php
session_start();
$nombre="";
$descripcion="";
$db = mysqli_connect('localhost', 'root', '254088Ma!', 'mandra');
        mysqli_set_charset($db, 'utf8');
if (isset($_POST['categoria'])) {
$nombre="";
$descripcion="";
 $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
  $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
    $query = "Insert into categoria (nombre, descripcion) values ('$nombre','$descripcion')";
  	$results = mysqli_query($db, $query);
      	  header('location: ../../index-admin.php#!/Categoria');
}
if (isset($_GET['dcategoria'])) {
     $delete = mysqli_real_escape_string($db, $_GET['dcategoria']);
    $query = "Delete from categoria where idcategoria='$delete'";
      	$results = mysqli_query($db, $query);
    if($results){
    header('location: ../../index-admin.php#!/Categoria');
    echo "<br/><br/><span>Borrado exitosamente...!!</span>";    
    }else{
        echo "ERROR";
    }   
}
if (isset($_GET['ecategoria'])) {
         $edit = mysqli_real_escape_string($db, $_GET['ecategoria']);
  	  $_SESSION['id'] = $edit;
        header('location: ../../index-admin.php#!/Categoria-editar');
}
if (isset($_POST['categoria_editar'])) {
$nombre="";
$descripcion="";
$id="";
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
  $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
    $query = "Update categoria set nombre='$nombre', descripcion='$descripcion' where idcategoria = '$id'";
  	$results = mysqli_query($db, $query);
        if($results){
      	  header('location: ../../index-admin.php#!/Categoria');}
    else{
                echo "ERROR";
    }
}
if (isset($_POST['ingles'])) {
 $nivel = mysqli_real_escape_string($db, $_POST['nivel']);
    $query = "Insert into ingles (nivel) values ('$nivel')";
  	$results = mysqli_query($db, $query);
      	  header('location: ../../index-admin.php#!/Ingles');
}
if (isset($_GET['dingles'])) {
     $delete = mysqli_real_escape_string($db, $_GET['dingles']);
    $query = "Delete from ingles where idingles='$delete'";
      	$results = mysqli_query($db, $query);
    if($results){
    header('location: ../../index-admin.php#!/Ingles');
    echo "<br/><br/><span>Borrado exitosamente...!!</span>";    
    }else{
        echo "ERROR";
    }   
}
if (isset($_GET['eingles'])) {
         $edit = mysqli_real_escape_string($db, $_GET['eingles']);
  	  $_SESSION['id'] = $edit;
        header('location: ../../index-admin.php#!/Ingles-editar');
}
if (isset($_POST['ingles_editar'])) {
$nombre="";
$id="";
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $nivel = mysqli_real_escape_string($db, $_POST['nivel']);
    $query = "Update ingles set nivel='$nivel' where idingles = '$id'";
  	$results = mysqli_query($db, $query);
        if($results){
      	  header('location: ../../index-admin.php#!/Ingles');}
    else{
                echo "ERROR";
    }
}
if (isset($_POST['subcategoria'])) {
$nombre="";
$categoria="";
 $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
  $categoria = mysqli_real_escape_string($db, $_POST['categoria2']);
    $query = "Insert into subcategoria (nombre, categoria_idcategoria) values ('$nombre','$categoria')";
  	$results = mysqli_query($db, $query);
      	  header('location: ../../index-admin.php#!/Subcategoria');
}
if (isset($_GET['dsubcategoria'])) {
     $delete = mysqli_real_escape_string($db, $_GET['dsubcategoria']);
    $query = "Delete from subcategoria where idsubcategoria='$delete'";
      	$results = mysqli_query($db, $query);
    if($results){
    header('location: ../../index-admin.php#!/Subcategoria');
    echo "<br/><br/><span>Borrado exitosamente...!!</span>";    
    }else{
        echo "ERROR";
    }   
}
if (isset($_GET['esubcategoria'])) {
         $edit = mysqli_real_escape_string($db, $_GET['esubcategoria']);
  	  $_SESSION['id'] = $edit;
        header('location: ../../index-admin.php#!/Subcategoria-edita');
}
if (isset($_POST['subcategoria_editar'])) {
$nombre="";
$descripcion="";
$id="";
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
  $categoria = mysqli_real_escape_string($db, $_POST['categoria2']);
    $query = "Update subcategoria set nombre='$nombre', categoria_idcategoria='$categoria' where idsubcategoria = '$id'";
  	$results = mysqli_query($db, $query);
        if($results){
      	  header('location: ../../index-admin.php#!/Subcategoria');}
    else{
                echo "ERROR";
    }
}
if (isset($_POST['competencia'])) {
$db = mysqli_connect('localhost', 'root', '254088Ma!', 'mandra');
        mysqli_set_charset($db, 'utf8');
$nombre="";
$subcategoria="";
 $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
  $subcategoria = mysqli_real_escape_string($db, $_POST['subcategoria']);
    $query = "Insert into competencia (nombre, subcategoria_idsubcategoria) values ('$nombre','$subcategoria')";
  	$results = mysqli_query($db, $query);
      	  header('location: ../../index-admin.php#!/Competencia');
}
if (isset($_GET['dcompetencia'])) {
     $delete = mysqli_real_escape_string($db, $_GET['dcompetencia']);
    $query = "Delete from competencia where idcompetencia='$delete'";
      	$results = mysqli_query($db, $query);
    if($results){
    header('location: ../../index-admin.php#!/Competencia');
    echo "<br/><br/><span>Borrado exitosamente...!!</span>";    
    }else{
        echo "ERROR";
    }   
}
if (isset($_GET['ecompetencia'])) {
         $edit = mysqli_real_escape_string($db, $_GET['ecompetencia']);
  	  $_SESSION['id'] = $edit;
        header('location: ../../index-admin.php#!/Competencia-editar');
}
if (isset($_POST['competencia_editar'])) {
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
  $subcategoria = mysqli_real_escape_string($db, $_POST['subcategoria']);
    $query = "Update competencia set nombre='$nombre', subcategoria_idsubcategoria='$subcategoria' where idcompetencia = '$id'";
  	$results = mysqli_query($db, $query);
        if($results){
      	  header('location: ../../index-admin.php#!/Competencia');}
    else{
                echo "ERROR";
    }
}
if (isset($_POST['tecnica2'])) {
    $nombre="";
$competencia2="";
 $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
  $competencia2 = mysqli_real_escape_string($db, $_POST['competencia4']);
    $query = "Insert into tecnica (nombre, competencia_idcompetencia) values ('$nombre','$competencia2')";
  	$results = mysqli_query($db, $query);
      	  header('location: ../../index-admin.php#!/Tecnica');
}
if (isset($_GET['dtecnica'])) {
     $delete = mysqli_real_escape_string($db, $_GET['dtecnica']);
    $query = "Delete from tecnica where idtecnica='$delete'";
      	$results = mysqli_query($db, $query);
    if($results){
    header('location: ../../index-admin.php#!/Tecnica');
    echo "<br/><br/><span>Borrado exitosamente...!!</span>";    
    }else{
        echo "ERROR";
    }   
}
if (isset($_GET['etecnica'])) {
         $edit = mysqli_real_escape_string($db, $_GET['etecnica']);
  	  $_SESSION['id'] = $edit;
        header('location: ../../index-admin.php#!/Tecnica-editar');
}
if (isset($_POST['tecnica_editar'])) {
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
  $competencia = mysqli_real_escape_string($db, $_POST['competencia4']);
    $query = "Update tecnica set nombre='$nombre', competencia_idcompetencia='$competencia' where idtecnica = '$id'";
  	$results = mysqli_query($db, $query);
        if($results){
      	  header('location: ../../index-admin.php#!/Tecnica');}
    else{
                echo "ERROR";
    }
}
if (isset($_POST['localidad'])) {
 $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
    $query = "Insert into localidad (nombre) values ('$nombre')";
  	$results = mysqli_query($db, $query);
      	  header('location: ../../index-admin.php#!/Localidad');
}
if (isset($_GET['dlocalidad'])) {
     $delete = mysqli_real_escape_string($db, $_GET['dlocalidad']);
    $query = "Delete from localidad where idlocalidad='$delete'";
      	$results = mysqli_query($db, $query);
    if($results){
    header('location: ../../index-admin.php#!/Localidad');
    echo "<br/><br/><span>Borrado exitosamente...!!</span>";    
    }else{
        echo "ERROR";
    }   
}
if (isset($_GET['elocalidad'])) {
         $edit = mysqli_real_escape_string($db, $_GET['elocalidad']);
  	  $_SESSION['id'] = $edit;
        header('location: ../../index-admin.php#!/Localidad-editar');
}
if (isset($_POST['localidad_editar'])) {
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
    $query = "Update localidad set nombre='$nombre' where idlocalidad = '$id'";
  	$results = mysqli_query($db, $query);
        if($results){
      	  header('location: ../../index-admin.php#!/Localidad');}
    else{
                echo "ERROR";
    }
}
if (isset($_POST['horario'])) {
 $nombre = mysqli_real_escape_string($db, $_POST['tipo']);
    $query = "Insert into horario (tipo) values ('$nombre')";
  	$results = mysqli_query($db, $query);
      	  header('location: ../../index-admin.php#!/Horario');
}
if (isset($_GET['dhorario'])) {
     $delete = mysqli_real_escape_string($db, $_GET['dhorario']);
    $query = "Delete from horario where id_horario='$delete'";
      	$results = mysqli_query($db, $query);
    if($results){
    header('location: ../../index-admin.php#!/Horario');
    echo "<br/><br/><span>Borrado exitosamente...!!</span>";    
    }else{
        echo "ERROR";
    }   
}
if (isset($_GET['ehorario'])) {
         $edit = mysqli_real_escape_string($db, $_GET['ehorario']);
  	  $_SESSION['id'] = $edit;
        header('location: ../../index-admin.php#!/Horario-editar');
}
if (isset($_POST['horario_editar'])) {
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $nombre = mysqli_real_escape_string($db, $_POST['nivel']);
    $query = "Update horario set tipo='$nombre' where id_horario = '$id'";
  	$results = mysqli_query($db, $query);
        if($results){
      	  header('location: ../../index-admin.php#!/Horario');}
    else{
                echo "ERROR";
    }
}
if (isset($_POST['educacion'])) {
 $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
    $query = "Insert into educacion (nombre) values ('$nombre')";
  	$results = mysqli_query($db, $query);
      	  header('location: ../../index-admin.php#!/Educacion');
}
if (isset($_GET['deducacion'])) {
     $delete = mysqli_real_escape_string($db, $_GET['deducacion']);
    $query = "Delete from educacion where ideducacion='$delete'";
      	$results = mysqli_query($db, $query);
    if($results){
    header('location: ../../index-admin.php#!/Educacion');
    echo "<br/><br/><span>Borrado exitosamente...!!</span>";    
    }else{
        echo "ERROR";
    }   
}
if (isset($_GET['eeducacion'])) {
         $edit = mysqli_real_escape_string($db, $_GET['eeducacion']);
  	  $_SESSION['id'] = $edit;
        header('location: ../../index-admin.php#!/Educacion-editar');
}
if (isset($_POST['educacion_editar'])) {
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
    $query = "Update educacion set nombre='$nombre' where ideducacion = '$id'";
  	$results = mysqli_query($db, $query);
        if($results){
      	  header('location: ../../index-admin.php#!/Educacion');}
    else{
                echo "ERROR";
    }
}
if (isset($_POST['sexo'])) {
 $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
    $query = "Insert into sexo (nombre) values ('$nombre')";
  	$results = mysqli_query($db, $query);
      	  header('location: ../../index-admin.php#!/Sexo');
}
if (isset($_GET['dsexo'])) {
     $delete = mysqli_real_escape_string($db, $_GET['dsexo']);
    $query = "Delete from sexo where idsexo='$delete'";
      	$results = mysqli_query($db, $query);
    if($results){
    header('location: ../../index-admin.php#!/Sexo');
    echo "<br/><br/><span>Borrado exitosamente...!!</span>";    
    }else{
        echo "ERROR";
    }   
}
if (isset($_GET['esexo'])) {
         $edit = mysqli_real_escape_string($db, $_GET['esexo']);
  	  $_SESSION['id'] = $edit;
        header('location: ../../index-admin.php#!/Sexo-editar');
}
if (isset($_POST['sexo_editar'])) {
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
    $query = "Update sexo set nombre='$nombre' where idsexo = '$id'";
  	$results = mysqli_query($db, $query);
        if($results){
      	  header('location: ../../index-admin.php#!/Sexo');}
    else{
                echo "ERROR";
    }
}
if (isset($_POST['empresa'])) {
 $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
  $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
    $correo = mysqli_real_escape_string($db, $_POST['correo']);
  $telefono = mysqli_real_escape_string($db, $_POST['telefono']);
    $query = "Insert into empresa (nombre, descripcion, correo, telefono) values ('$nombre','$descripcion','$correo','$telefono')";
  	$results = mysqli_query($db, $query);
      	  header('location: ../../index-admin.php#!/Empresa');
}
if (isset($_GET['dempresa'])) {
     $delete = mysqli_real_escape_string($db, $_GET['dempresa']);
    $query = "Delete from empresa where idempresa='$delete'";
      	$results = mysqli_query($db, $query);
    if($results){
    header('location: ../../index-admin.php#!/Empresa');
    echo "<br/><br/><span>Borrado exitosamente...!!</span>";    
    }else{
        echo "ERROR";
    }   
}
if (isset($_GET['eempresa'])) {
         $edit = mysqli_real_escape_string($db, $_GET['eempresa']);
  	  $_SESSION['id'] = $edit;
        header('location: ../../index-admin.php#!/Empresa-editar');
}
if (isset($_POST['empresa_editar'])) {
    $id = mysqli_real_escape_string($db, $_POST['id']);
 $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
  $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
    $correo = mysqli_real_escape_string($db, $_POST['correo']);
  $telefono = mysqli_real_escape_string($db, $_POST['telefono']);
    $query = "Update empresa set nombre='$nombre', descripcion='$descripcion', correo='$correo', telefono='$telefono' where idempresa = '$id'";
  	$results = mysqli_query($db, $query);
        if($results){
      	  header('location: ../../index-admin.php#!/Empresa');}
    else{
                echo "ERROR";
    }
}
if (isset($_GET['dusuario'])) {
     $delete = mysqli_real_escape_string($db, $_GET['dusuario']);
        $query = "Delete from usuario where user_register_id_usuario='$delete'";
        $results = mysqli_query($db, $query);
        $query = "Delete from user_register where id_usuario='$delete'";
      	$results = mysqli_query($db, $query);
    $query = "Delete from usuario_has_habilidad where user_register_id_usuario='$delete' ";
      	$results = mysqli_query($db, $query);
    $query = "Delete from usuario_has_tecnica where user_register_id_usuario='$delete' ";
      	$results = mysqli_query($db, $query);
    if($results){
    header('location: ../../index-admin.php#!/Usuarios');
    echo "<br/><br/><span>Borrado exitosamente...!!</span>";    
    }else{
        echo "ERROR";
    }   
}
if (isset($_GET['eusuario'])) {
         $edit = mysqli_real_escape_string($db, $_GET['eusuario']);
  	  $_SESSION['id'] = $edit;
        header('location: ../../index-admin.php#!/Usuarios-editar');
}
if (isset($_POST['usuario_editar'])) {
    $id = mysqli_real_escape_string($db, $_POST['id']);
 $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
  $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
    $correo = mysqli_real_escape_string($db, $_POST['correo']);
  $telefono = mysqli_real_escape_string($db, $_POST['telefono']);
    $query = "Update empresa set nombre='$nombre', descripcion='$descripcion', correo='$correo', telefono='$telefono' where idempresa = '$id'";
  	$results = mysqli_query($db, $query);
        if($results){
      	  header('location: ../../index-admin.php#!/Usuarios');}
    else{
                echo "ERROR";
    }
}
if (isset($_GET['dtrabajo'])) {
     $delete = mysqli_real_escape_string($db, $_GET['dtrabajo']);
        $query = "Delete from trabajo_has_habilidad where trabajo_id_trabajo='$delete'";
        $results = mysqli_query($db, $query);
        $query = "Delete from trabajo_has_tecnica where trabajo_id_trabajo='$delete'";
        $results = mysqli_query($db, $query);
         $query = "Delete from trabajo where id_trabajo='$delete'";
      	$results = mysqli_query($db, $query);
    if($results){
    header('location: ../../index-admin.php#!/Trabajo');
    echo "<br/><br/><span>Borrado exitosamente...!!</span>";    
    }else{
        echo "ERROR";
    }   
}
if (isset($_GET['etrabajo'])) {
         $edit = mysqli_real_escape_string($db, $_GET['etrabajo']);
  	  $_SESSION['id'] = $edit;
        header('location: ../../index-admin.php#!/Trabajo-editar');
}
if (isset($_POST['trabajo_editar'])) {
    $id = mysqli_real_escape_string($db, $_POST['id']);
 $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
  $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
    $correo = mysqli_real_escape_string($db, $_POST['correo']);
  $telefono = mysqli_real_escape_string($db, $_POST['telefono']);
    $query = "Update empresa set nombre='$nombre', descripcion='$descripcion', correo='$correo', telefono='$telefono' where idempresa = '$id'";
  	$results = mysqli_query($db, $query);
        if($results){
      	  header('location: ../../index-admin.php#!/Trabajo');}
    else{
                echo "ERROR";
    }
}
?>
