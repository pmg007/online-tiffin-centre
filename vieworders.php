<?php 
	require '../project/db/connect.php'; 
	require '../project/functions/functions.php';
	session_start();
	if(!isset($_SESSION['phone'])){
		header('Location:login.php');
	}
	$customer_name=$_SESSION['customer_name'];
	$phone=$_SESSION['phone'];
	$records=array();
	$results=$db->query("SELECT o_id,ordertime,dateselect,mealtype,address,cart,total FROM placeorder WHERE phone='{$phone}'ORDER BY dateselect DESC");
	if($results->num_rows){
		while ($row=$results->fetch_object()) {
			$records[]=$row;
		}
		$results->free();
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
 		<h2>View Orders</h2>
 		<div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Order Id</th>
                  <th>Order Time</th>
                  <th>Date</th>
                  <th>Meal type</th>
                  <th>Address</th>
                  <th>Cart</th>
                  <th>Total</th>
                </tr>
              </thead>
              <tbody>
              <?php 
              		if(!count($records)){
              			echo 'no records';
              		} else{
              			foreach ($records as $r) {
              				
              ?>
                <tr>
                  <td><?php echo $r->o_id; ?></td>
                  <td><?php echo $r->ordertime; ?></td>
                  <td><?php echo $r->dateselect; ?></td>
                  <td><?php echo $r->mealtype; ?></td>
                  <td><?php echo $r->address; ?></td>
                  <td><?php echo $r->cart; ?></td>
                  <td><?php echo $r->total; ?></td>
                </tr>
                <?php 
            		}
            	  }
                ?>
                
              </tbody>
            </table>
          </div>
 	</div>
 </body>
 </html>
