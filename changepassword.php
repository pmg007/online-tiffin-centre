<?php 
	require '../project/db/connect.php'; 
	require '../project/functions/functions.php';
	session_start();
	if(!isset($_SESSION['phone'])){
		header('Location:login.php');
	}
	
	if(isset($_POST['change'])){
		$oldpassword=xss_safe(safe_input(($_POST['oldpassword']));
 		if($oldpassword==$_SESSION['password']){
 			$newpassword=xss_safe(safe_input(($_POST['newpassword']));
 			$p=$_SESSION['password'];
 			$m=$_SESSION['phone'];
 			$update=$db->query("UPDATE userreg SET password='{$newpassword}' WHERE phone = '{$m}'");
 			if($update){
 				echo "<script>alert('updated successfully..!!')</script>";
 				$_SESSION['password']=$newpassword;
 			}else{
 				echo "<script>alert('try again!')</script>";
 			}
 		}
 		else{
 			//header('changepassword.php');
 			echo "<script>alert('old does not match')</script>";
 		}
	 }else{
	 		header('changepassword.php');
	 		//echo "<script>alert('not set')</script>";
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
 		<h2>Change password</h2>
 		<form role="form" id="log_in" name="log_in" action="" class="common-form" method="POST" autocomplete="off">
			<div class="form-group">
				<input type="password" placeholder="ENTER YOUR OLD PASSWORD" class="form-control" id="oldpassword" name="oldpassword" required minlength="8" maxlength="24">
			</div>
			<div class="form-group">
				<input type="password" placeholder="ENTER YOUR NEW PASSWORD" class="form-control" id="newpassword" name="newpassword" required minlength="8" maxlength="24" pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">										
			</div>
			<div class="btnContainer ">
					<button class="btn btn-md common-btn-theme-dark login-btn common-btn " type="submit" name="change" id="change"> Change password</button>
			</div>
		</form>
 	</div>
 </body>
 </html>
