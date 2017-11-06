<?php 
	require '../db/connect.php'; 
	require '../functions/functions.php';
	session_start();
	if(!isset($_SESSION['aname'])){
		header('Location:adminlogin.php');
	}
	
	if(isset($_POST['additem'])){
 		$food_item=$_POST['food_item'];
 		$item_price=$_POST['item_price'];
 		$select=$db->query("SELECT food_item FROM fooditems WHERE food_item='{$food_item}'");
 		if(!($select->num_rows)){
 			$insert=$db->query("INSERT INTO fooditems (food_item,item_price) VALUES ('{$food_item}','{$item_price}')");
 			if($insert){
 				echo "<script>alert('successfully added..:)..!!')</script>";
 			}else{
 				echo "<script>alert('try again..!!')</script>";
 			}
 		}else{
 			echo "<script>alert('food item already exists..!!')</script>";
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
 		<h2>Add food item</h2>
 		<form role="form" id="add" name="add" action="" class="common-form" method="POST" autocomplete="off">
			<div class="form-group">
				<input type="text" placeholder="ENTER FOOD ITEM(CAPS)" class="form-control" id="food_item" name="food_item" required pattern="[A-Z\s]+" style="text-transform: uppercase;">
			</div>
			<div class="form-group">
				<input type="number" placeholder="ENTER PRICE" class="form-control" id="item_price" name="item_price" required>										
			</div>
			<div class="btnContainer ">
					<button class="btn btn-md common-btn-theme-dark login-btn common-btn " type="submit" name="additem" id="additem">Add food item</button>
			</div>
		</form>
 	</div>
 </body>
 </html>
