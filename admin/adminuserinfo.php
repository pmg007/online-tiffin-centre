<?php 
	require '../db/connect.php'; 
	require '../functions/functions.php';
	session_start();
	if(!isset($_SESSION['aname'])){
		header('Location:adminlogin.php');
	}
	$records=array();
	$results=$db->query("SELECT id,customer_name,phone,email_address,company_name,address FROM userreg");
	if($results->num_rows){
		while ($row=$results->fetch_object()) {
			$records[]=$row;
		}
		$results->free();
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
    <h2>Users info</h2>
 		<div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Mobile</th>
                  <th>email</th>
                  <th>Company Name</th>
                  <th>Address</th>
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
                  <td><?php echo $r->id; ?></td>
                  <td><?php echo $r->customer_name; ?></td>
                  <td><?php echo $r->phone; ?></td>
                  <td><?php echo $r->email_address; ?></td>
                  <td><?php echo $r->company_name; ?></td>
                  <td><?php echo $r->address; ?></td>
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
