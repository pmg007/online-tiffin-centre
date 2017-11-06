<?php 
	require '../project/db/connect.php'; 
	require '../project/functions/functions.php';
	session_start();
	if(!isset($_SESSION['phone'])){
		header('Location:login.php');
	}
	
	if(isset($_POST['change'])){
			$newaddress=xss_safe(safe_input($_POST['newaddress']));$newaddress=$db->real_escape_string($newaddress);
  			$p=xss_safe(safe_input($_SESSION['password']));$p=$db->real_escape_string($p);
 			$m=xss_safe(safe_input($_SESSION['phone']));$m=$db->real_escape_string($m);
 			$update=$db->query("UPDATE userreg SET address='{$newaddress}' WHERE phone = '{$m}'");
 			if($update){
 				echo "<script>alert('updated successfully..!!')</script>";
 				$_SESSION['address']=$newaddress;
 			}else{
 				echo "<script>alert('try again!')</script>";
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
 		<form role="form" id="changeadd" name="changeadd" action="" class="common-form" method="POST" autocomplete="off">
			<div class="form-group">
				<input type="text" placeholder="NEW ADDRESS" class="form-control" id="newaddress" name="newaddress" required minlength="10" maxlength="50">
			</div>
			<div class="btnContainer ">
					<button class="btn btn-md common-btn-theme-dark login-btn common-btn " type="submit" name="change" id="change"> Change address</button>
			</div>
		</form>
 	</div>
 </body>
 </html>
