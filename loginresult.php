<?php 
	require '../project/db/connect.php'; 
	require '../project/functions/functions.php';
	//error_reporting(0);
	session_start();
	if(isset($_POST['login'])){
		//echo "<script>alert('reached here')</script>";
		//var_dump(isset($_POST['aname']));
		//var_dump($_POST['aname']);
		$phone=$_POST['phone'];$phone=xss_safe(safe_input($phone));$phone=$db->real_escape_string($phone);
		$password=$_POST['password'];$password=xss_safe(safe_input($password));$password=$db->real_escape_string($password);
		$encyrptpassword=md5($password);
		$select=$db->query("SELECT * FROM userreg WHERE phone='{$phone}' AND password='{$password}'");
		echo $select->num_rows;
		$status=false;
		if($select->num_rows) {
			$_SESSION['phone']=$phone;
			$row=$select->fetch_object();
			$_SESSION['customer_name']=$row->customer_name;
			$_SESSION['password']=$password;
			header('Location:custdash.php');
			echo "<script>alert('Login successful....!!!')</script>";
			$status=true;
		} else {
			//echo 'khnkhn';
			header('Location:login.php');
		}
		//if(!$status) echo "<script>alert('Wrong credentials...try again..:P..!!!')</script>";
	}else{
		header('Location:login.php');
	}
?>