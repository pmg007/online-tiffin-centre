<?php 
	require '../project/db/connect.php'; 
	require '../project/functions/functions.php';
	session_start();
	if(!isset($_SESSION['phone'])){
		header('Location:login.php');
	}
	include '../project/includes/dashtmpl.php';
?>
