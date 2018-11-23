<?php
session_start();

// initializing variables
$admin_name = "";
$password = "";
$errors = array(); 
// connect to the database
$db = mysqli_connect('localhost', 'root', '254088Ma!', 'mandra');

//if ($db->connect_error) {
//  die("Connection failed: " . $db->connect_error);
//}  else{
//  echo "Connected successfully";
//}
if (isset($_POST['login_admin'])) {
  $admin_name='';
  $password='';
 $admin_name = mysqli_real_escape_string($db, $_POST['admin_name']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  if (empty($admin_name)) {
 	array_push($errors, "Nombre requerido para la operación");
  }
  if (empty($password)) {
  	array_push($errors, "Password requerido para la operación");
  }
  if (count($errors) == 0) {
    $password = md5($password);
  	$query = "SELECT * FROM admin WHERE admin_name='$admin_name' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['admin_name'] = $admin_name;
  	  $_SESSION['success'] = "Ahora estás en el sistema";
  	  header('location: ../index-admin.php');
  	}else {
  		array_push($errors, "Email/password incorrectos");
  	}
  }
}

?>
