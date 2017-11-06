<?php 
	require '../db/connect.php'; 
	require '../functions/functions.php';
	session_start();
	if(!isset($_SESSION['aname'])){
		header('Location:adminlogin.php');
	}
	
	if(isset($_POST['change'])){
 		if($_POST['oldpassword']==$_SESSION['apassword']){
 			$newpassword=$_POST['newpassword'];
 			$update=$db->query("UPDATE admindetail SET a_password='{$newpassword}'");
 			if($update){
 				echo "<script>alert('updated successfully..!!')</script>";
 				$_SESSION['apassword']=$newpassword;
 			}else{
 				echo "<script>alert('try again!')</script>";
 			}
 		}
 		else{
 			header('adminchangepassword.php');
 			//echo "<script>alert('old does not match')</script>";
 		}
	 }else{
	 		header('adminchangepassword.php');
	 		//echo "<script>alert('not set')</script>";
	}
	include 'admindashtmpl.php';
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
				<input type="password" placeholder="ENTER YOUR NEW PASSWORD" class="form-control" id="newpassword" name="newpassword" required minlength="8" maxlength="24">										
			</div>
			<div class="btnContainer ">
					<button class="btn btn-md common-btn-theme-dark login-btn common-btn " type="submit" name="change" id="change"> Change password</button>
			</div>
		</form>
 	</div>
 </body>
 </html>
