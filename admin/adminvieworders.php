<?php 
    require '../db/connect.php'; 
    require '../functions/functions.php';
    session_start();
    if(!isset($_SESSION['aname'])){
      header('Location:adminlogin.php');
    }
  	$records=array();
  	$results=$db->query("SELECT * FROM placeorder ORDER by dateselect;");
    $income=0;
  	if($results->num_rows){
  		while ($row=$results->fetch_object()) {
  			$records[]=$row;
        $income=$income+$row->total;
  		}
  		$results->free();
  	}
    
  	require 'admindashtmpl.php';
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
                  <th>Customer Name</th>
                  <th>Phone</th>
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
                  <td><?php echo $r->customer_name; ?></td>
                  <td><?php echo $r->phone; ?></td>
                  <td><?php echo $r->address; ?></td>
                  <td><?php echo $r->cart; ?></td>
                  <td><?php echo $r->total; ?></td>
                </tr>
                <?php 
            		}
            	  }
                ?>
                <tr style="color: RED;font-weight: bolder;">
                  <td>Total income</td>
                  <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                  <td><?php echo $income; ?></td>
                </tr>
                
              </tbody>
            </table>
          </div>
 	</div>
 </body>
 </html>
