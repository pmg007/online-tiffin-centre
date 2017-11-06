<?php 
	require '../db/connect.php'; 
	require '../functions/functions.php';
	error_reporting(0);
	session_start();
	if(isset($_POST['login'])){
		//echo "<script>alert('reached here')</script>";
		//var_dump(isset($_POST['aname']));
		//var_dump($_POST['aname']);
		$a_name=$_POST['aname'];$a_name=xss_safe(safe_input($a_name));$a_name=$db->real_escape_string($a_name);
		$a_password=$_POST['apassword'];$a_password=xss_safe(safe_input($a_password));$a_password=$db->real_escape_string($a_password);
		$select=$db->query("SELECT * FROM admindetail WHERE a_name='{$a_name}' AND a_password='{$a_password}'");
		echo $select->num_rows;
		$status=false;
		if($select->num_rows) {
			$_SESSION['aname']=$a_name;
			$_SESSION['apassword']=$a_password;
			header('Location:admindash.php');
			echo "<script>alert('Login successful....!!!')</script>";
			$status=true;
		} else {
			//echo '<h4><a href="adminlogin.php">Adminlogin</a></h4>';
			header('Location:adminlogin.php');
		}
		//if(!$status) echo "<script>alert('Wrong credentials...try again..:P..!!!')</script>";
	}else{
		header('adminlogin.php');
	}
	$select->free();
?>