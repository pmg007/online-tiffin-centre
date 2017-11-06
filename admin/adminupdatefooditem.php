<?php 
	require '../db/connect.php'; 
	require '../functions/functions.php';
	session_start();
	if(!isset($_SESSION['aname'])){
		header('Location:adminlogin.php');
	}
	
	if(isset($_POST['updateitem'])){
		$food_item=$_POST['food_item'];
 		$new_price=$_POST['new_price'];
  		$select=$db->query("SELECT food_item FROM fooditems WHERE food_item='{$food_item}'");
 		if($select->num_rows){
 			$update=$db->query("UPDATE fooditems SET item_price='{$new_price}' WHERE food_item='{$food_item}'");
 			if($update){
 				echo "<script>alert('successfully updated..:)..!!')</script>";
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
 		<h2>Update price of food item</h2>
 		<form role="form" id="add" name="add" action="" class="common-form" method="POST" autocomplete="off">
			<div class="form-group">
				<input type="text" placeholder="ENTER FOOD ITEM TO BE UPDATED" class="form-control" id="food_item" name="food_item" required pattern="[a-zA-Z\s]+" style="text-transform: uppercase;">
			</div>
			<div class="form-group">
				<input type="number" placeholder="ENTER NEW PRICE" class="form-control" id="new_price" name="new_price" required>										
			</div>
			<div class="btnContainer ">
					<button class="btn btn-md common-btn-theme-dark login-btn common-btn " type="submit" name="updateitem" id="updateitem">Update price of food item</button>
			</div>
		</form>
 	</div>
 </body>
 </html>
