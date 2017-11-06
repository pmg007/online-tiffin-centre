<?php 
	require '../project/db/connect.php'; 
	require '../project/functions/functions.php';
	session_start();
	if(!isset($_SESSION['phone'])){
		header('Location:login.php');
	}
	$records=array();
	$results=$db->query("SELECT * FROM fooditems ORDER BY id");
	if($results->num_rows){
		while ($row=$results->fetch_object()) {
			$records[]=$row;
		}
		$results->free();
	}
	if(isset($_POST['place'])){
		$dateselect=$_POST['dateselect'];
		$mealtype=$_POST['mealtype'];
		$address=xss_safe(safe_input($_POST['address']));$address=$db->real_escape_string($address);
		$customer_name=$_SESSION['customer_name'];
		$phone=$_SESSION['phone'];
		date_default_timezone_set('Asia/Kolkata');
		if($mealtype=="BREAKFAST"){
			$t1 = new DateTime();
			$temp=$dateselect.' 07:00:00';
			$t2 = new DateTime($temp);
			//echo "<script>alert('".$t1." ".$t2."')</script>";
			if($t2>$t1){
			$total=0;
				$cart="";
				$menu=$db->query("SELECT * FROM fooditems");
				if($menu->num_rows){
					while($rr=$menu->fetch_object()){
						if($_POST[$rr->food_item]>0){
							$quantity=$_POST[ $rr->food_item];
							$cart.=" {$rr->food_item}: {$quantity} ";
							$total=$total+$rr->item_price*$quantity;
						}
					}
					if($total!=0){
						$insert=$db->query("INSERT INTO placeorder (ordertime,dateselect,mealtype,customer_name,phone,address,cart,total) VALUES(NOW(),'{$dateselect}','{$mealtype}','{$customer_name}','{$phone}','{$address}','{$cart}','{$total}')");
						if($insert){
							echo "<script>alert('Order successful..total amount to be paid on delivery".$total."')</script>";
						}else{
							echo "<script>alert('Ooops!!.....try again....')</script>";
						}
					}else{
						echo "<script>alert('Cart cannot be empty...please add something to your cart')</script>";
					}
				}


			}else{
				echo "<script>alert('Cant place order for breakfast now')</script>";
			}

		}

		else if($mealtype=="LUNCH"){
			$t1 = new DateTime();
			$temp=$dateselect.' 09:00:00';
			$t2 = new DateTime($temp);
			//echo "<script>alert('".$t1." ".$t2."')</script>";
			if($t2>$t1){
			$total=0;
				$cart="";
				$menu=$db->query("SELECT * FROM fooditems");
				if($menu->num_rows){
					while($rr=$menu->fetch_object()){
						if($_POST[$rr->food_item]>0){
							$quantity=$_POST[ $rr->food_item];
							$cart.=" {$rr->food_item}: {$quantity} ";
							$total=$total+$rr->item_price*$quantity;
						}
					}
					if($total!=0){
						$insert=$db->query("INSERT INTO placeorder (ordertime,dateselect,mealtype,customer_name,phone,address,cart,total) VALUES(NOW(),'{$dateselect}','{$mealtype}','{$customer_name}','{$phone}','{$address}','{$cart}','{$total}')");
						if($insert){
							echo "<script>alert('Order successful..total amount to be paid on delivery".$total."')</script>";
						}else{
							echo "<script>alert('Ooops!!.....try again....')</script>";
						}
					}else{
						echo "<script>alert('Cart cannot be empty...please add something to your cart')</script>";
					}
				}


			}else{
				echo "<script>alert('Cant place order for lunch now')</script>";
			}
		}

		else if($mealtype=="DINNER"){
			$t1 = new DateTime();
			$temp=$dateselect.' 15:30:00';
			$t2 = new DateTime($temp);
			//echo "<script>alert('".$t1." ".$t2."')</script>";
			if($t2>$t1){
			$total=0;
				$cart="";
				$menu=$db->query("SELECT * FROM fooditems");
				if($menu->num_rows){
					while($rr=$menu->fetch_object()){
						if($_POST[$rr->food_item]>0){
							$quantity=$_POST[ $rr->food_item];
							$cart.=" {$rr->food_item}: {$quantity}, ";
							$total=$total+$rr->item_price*$quantity;
						}
					}
					if($total!=0){
						$insert=$db->query("INSERT INTO placeorder (ordertime,dateselect,mealtype,customer_name,phone,address,cart,total) VALUES(NOW(),'{$dateselect}','{$mealtype}','{$customer_name}','{$phone}','{$address}','{$cart}','{$total}')");
						if($insert){
							echo "<script>alert('Order successful..total amount to be paid on delivery = ".$total."')</script>";
						}else{
							echo "<script>alert('Ooops!!.....try again....')</script>";
						}
					}else{
						echo "<script>alert('Cart cannot be empty...please add something to your cart')</script>";
					}
				}


			}else{
				echo "<script>alert('Cant place order for dinner now')</script>";
			}
		}
	}
	
	require '../project/includes/dashtmpl.php';
 ?> 
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
 		<h2>Place order (Order once placed can not be cancelled )</h2>
 		<form role="form" id="placeorder" name="place order" action="" class="common-form" method="POST" autocomplete="off">
			<div class="form-group">
				<label>Enter date</label>
				<input type="date" placeholder="ENTER DATE" class="form-control" id="dateselect" name="dateselect" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>"  required>
			</div>
			<div class="form-group">
				<label>Enter type of meal</label>
				<select id="mealtype" name="mealtype" required >
					<option value="" selected>--</option>
					<option value="BREAKFAST">BREAKFAST</option>
					<option value="LUNCH">LUNCH</option>
					<option value="DINNER">DINNER</option>
				</select>
			</div>
			<div class="form-group">
					<label>Enter address where food is to be delivered</label>
					<input type="text" placeholder="ENTER YOUR ADDRESS" class="form-control" id="address" name="address" required minlength="10" maxlength="80">
			</div>
			<div class="form-group">
				<div class="table-responsive">
	            <table class="table table-striped">
	              <thead>
	                <tr>
	                  <th>#</th>
	                  <th>Food Item</th>
	                  <th>Price</th>
	                  <th>Quantity</th>
	                </tr>
	              </thead>
	              <tbody>
	              <?php 
	              		if(!count($records)){
	              			echo '<tr><td>no records</td></tr>';
	              		} else{
	              			foreach ($records as $r) {
	              				
	              ?>
	                <tr>
	                  <td><?php echo $r->id; ?></td>
	                  <td><?php echo $r->food_item; ?></td>
	                  <td><?php echo $r->item_price; ?></td>
	                  <td>
	                  	<select id="<?php echo $r->food_item; ?>" name="<?php echo $r->food_item; ?>" required >
							<option value="0" selected>0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						</select>
	                  </td>
	                  
	                </tr>
	                <?php 
	            		}
	            	  }
	                ?>
	                
	              </tbody>
	            </table>
            </div>
          </div>
			<div class="btnContainer ">
					<button class="btn btn-md common-btn-theme-dark login-btn common-btn " type="submit" name="place" id="place">Place order</button>
			</div>
		</form>
 	</div>
 </body>
 </html>
