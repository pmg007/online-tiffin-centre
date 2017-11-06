<?php 
	require '../project/db/connect.php'; 
	require '../project/functions/functions.php';
	session_start();
	if(!isset($_SESSION['phone'])){
		header('Location:login.php');
	}
	
	if(isset($_POST['change'])){
 			$newphone=xss_safe(safe_input($_POST['newphone']));$newphone=$db->real_escape_string($newphone);
 			$select=$db->query("SELECT phone FROM userreg WHERE phone='{$newphone}'");
 			if(!($select->num_rows)){
 				$m=$_SESSION['phone'];
 				$update=$db->query("UPDATE userreg SET phone='{$newphone}' WHERE phone = '{$m}'");
 				$_SESSION['phone']=$newphone;
 				echo "<script>alert('updated successfully..!!')</script>";
 			} else{
 				echo "<script>alert('this mobile is already in use...try again!')</script>";
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
 		<h2>Change mobile number</h2>
 		<form role="form" id="changephone" name="changephone" action="" class="common-form" method="POST" autocomplete="off">
			<div class="form-group">
				<input type="text" placeholder="ENTER YOUR NEW MOBILE NUMBER" class="form-control" name="newphone" id="newphone" required minlength="10" maxlength="10" pattern="[7-9]{1}[0-9]{9}">
			</div>
			<div class="btnContainer ">
					<button class="btn btn-md common-btn-theme-dark login-btn common-btn " type="submit" name="change" id="change"> Change mobile number</button>
			</div>
		</form>
 	</div>
 </body>
 </html>
