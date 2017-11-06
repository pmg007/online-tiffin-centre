<?php 
	require '../project/db/connect.php'; 
	require '../project/functions/functions.php';
	//error_reporting(0);
	//echo 'helloworld';
	if(isset($_POST['createuser'])){
		$customer_name=xss_safe(safe_input($_POST['customer_name']));$customer_name=$db->real_escape_string($customer_name);
		$phone=xss_safe(safe_input($_POST['phone']));$phone=$db->real_escape_string($phone);
		$email_address=xss_safe(safe_input($_POST['email_address']));$email_address=$db->real_escape_string($email_address);
		$company_name=xss_safe(safe_input($_POST['company_name']));$company_name=$db->real_escape_string($company_name);
		$address=xss_safe(safe_input($_POST['address']));$address=$db->real_escape_string($address);
		$password=xss_safe(safe_input($_POST['password']));$password=$db->real_escape_string($password);
		if((check_mail($email_address))== false){
			echo "<script>alert('Please check your email domain...use gmail.com or outlook.com or yahoo.com or yahoo.co.in')</script>";
			echo '<h4><a href="signup.php">Signup</a></h4>';
			die();
		}
		$encryptpassword=md5($password);
		$insertcheck1=$db->query("SELECT * FROM userreg WHERE phone = '{$phone}'");
		$insertcheck2=$db->query("SELECT * FROM userreg WHERE email_address = '{$email_address}'");
		//echo $insertcheck1->num_rows. ' '.$insertcheck2->num_rows;
		if($insertcheck1->num_rows or $insertcheck2->num_rows) {
			echo '<script type="text/javascript">window.alert("the email address or the mobile number is already in use")</script>';
			echo '<h4><a href="signup.php">Signup</a></h4>';
			//header('Location:signup.php');
		} else {
			$insert=$db->query("INSERT INTO userreg (customer_name,phone,email_address,company_name,address,password) 
			VALUES('{$customer_name}','{$phone}','{$email_address}','{$company_name}','{$address}','{$password}')");
			if($insert){
				//echo $db->affected_rows;
				//echo 'success';
				//echo '<h4><a href="index.php">Home</a></h4>';
				echo "<script>alert('success!')</script>";
				//header('Location: index.php');
				echo '<h4><a href="index.php">Home</a></h4>';
			}
			else {
				echo "<script>alert('try again!')</script>";
				//header('Location: signup.php');
				echo '<h4><a href="signup.php">Signup</a></h4>';
			}
		}
		$insertcheck1->free();
		$insertcheck2->free();
	}else {
		header('Location:signup.php');
	}
		
?>