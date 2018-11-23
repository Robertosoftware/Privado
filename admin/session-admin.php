<?php 
  session_start(); 

  if (!isset($_SESSION['admin_name'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: admin/login-admin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['admin_name']);
  	header("location: admin/login-admin.php");
  }

?>
