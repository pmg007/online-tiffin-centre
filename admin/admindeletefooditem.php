<?php 
	require '../db/connect.php'; 
	require '../functions/functions.php';
	session_start();
	if(!isset($_SESSION['aname'])){
		header('Location:adminlogin.php');
	}
	
	if(isset($_POST['deleteitem'])){
		$food_item=$_POST['food_item'];
  		$select=$db->query("SELECT food_item FROM fooditems WHERE food_item='{$food_item}'");
 		if($select->num_rows){
 			$delete=$db->query("DELETE FROM fooditems WHERE food_item='{$food_item}'");
 			if($delete){
 				echo "<script>alert('successfully deleted..:)..!!')</script>";
 			}else{
 				echo "<script>alert('try again..!!')</script>";
 			}
 		}else{
 			echo "<script>alert('no such food item exists..!!')</script>";
 		} 		
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
 		<h2>Delete food item</h2>
 		<form role="form" id="add" name="add" action="" class="common-form" method="POST" autocomplete="off">
			<div class="form-group">
				<input type="text" placeholder="ENTER FOOD ITEM TO BE DELETED" class="form-control" id="food_item" name="food_item" required pattern="[a-zA-Z\s]+" style="text-transform: uppercase;">
			</div>
			<div class="btnContainer ">
					<button class="btn btn-md common-btn-theme-dark login-btn common-btn " type="submit" name="deleteitem" id="deleteitem">Delete food item</button>
			</div>
		</form>
 	</div>
 </body>
 </html>
