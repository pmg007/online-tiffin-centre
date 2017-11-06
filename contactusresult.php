<?php 
	require '../project/db/connect.php'; 
	require '../project/functions/functions.php';
	//error_reporting(0);	
	if(isset($_POST['submit'])){
		$cname=xss_safe(safe_input($_POST['cname']));$cname=$db->real_escape_string($cname);
		$number=xss_safe(safe_input($_POST['cnumber']));$number=$db->real_escape_string($number);
		$email=xss_safe(safe_input($_POST['cemail']));$email=$db->real_escape_string($email);
		$subject=xss_safe(safe_input($_POST['subject']));$subject=$db->real_escape_string($subject);
		$message=xss_safe(safe_input($_POST['message']));$message=$db->real_escape_string($message);
		if((check_mail($email_address))== false){
			echo "<script>alert('Please check your email domain...use gmail.com or outlook.com or yahoo.com or yahoo.co.in')</script>";
			echo '<h4><a href="contactus.php">Contact Us</a></h4>';
			die();
		}
		$insert=$db->query("INSERT INTO contactform (cname,cnumber,cemail,subject,message,created) 
			VALUES('{$cname}','{$number}','{$email}','{$subject}','{$message}',NOW())");
		if($insert){
			echo $db->affected_rows;
			echo 'success';
			echo '<h4><a href="index.php">Home</a></h4>';
			echo '<script type="text/javascript">window.alert("success")</script>';
			header('Location: index.php');
		} else{
			echo '<script type="text/javascript">window.alert("try again")</script>';
		}
		$insert->free();
	}else{		
		header('Location: contactus.php');
	}
	
?>