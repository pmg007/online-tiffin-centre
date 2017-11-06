<?php 
	require '../project/db/connect.php'; 
	require '../project/functions/functions.php';
	session_start();
	if(!isset($_SESSION['phone'])){
		header('Location:login.php');
	}
	
	if(isset($_POST['change'])){
 			$newmail=xss_safe(safe_input($_POST['newmail']));$newmail=$db->real_escape_string($newmail);
 			$select=$db->query("SELECT email_address FROM userreg WHERE email_address='{$newmail}'");
 			if(!($select->num_rows)){
 				$m=$_SESSION['phone'];
 				$update=$db->query("UPDATE userreg SET email_address='{$newmail}' WHERE phone = '{$m}'");
 				$_SESSION['email_address']=$newmail;
 				echo "<script>alert('updated successfully..!!')</script>";
 			} else{
 				echo "<script>alert('this email address is already is use...please try with other email address')</script>";
 			}
	}
	include '../project/includes/dashtmpl.php';
 ?> 
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
 		<h2>Change address</h2>
 		<form role="form" id="changemail" name="changemail" action="" class="common-form" method="POST" autocomplete="off">
			<div class="form-group">
				<input type="email" placeholder="ENTER YOUR NEW EMAIL ADDRESS" class="form-control" name="newmail" id="newmail" required>
			</div>
			<div class="btnContainer ">
					<button class="btn btn-md common-btn-theme-dark login-btn common-btn " type="submit" name="change" id="change"> Change email address</button>
			</div>
		</form>
 	</div>
 </body>
 </html>
