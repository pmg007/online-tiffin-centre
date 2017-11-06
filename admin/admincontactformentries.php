<?php 
  	require '../db/connect.php'; 
  	require '../functions/functions.php';
  	session_start();
  	if(!isset($_SESSION['aname'])){
  		header('Location:adminlogin.php');
  	}
  	$records=array();
  	$results=$db->query("SELECT * FROM contactform ORDER BY created DESC");
  	if($results->num_rows){
  		while ($row=$results->fetch_object()) {
  			$records[]=$row;
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
 		<h2>Contact form entries</h2>
 		<div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Mobile</th>
                  <th>email</th>
                  <th>Subject</th>
                  <th>Message</th>
                  <th>created</th>
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
                  <td><?php echo $r->cname; ?></td>
                  <td><?php echo $r->cnumber; ?></td>
                  <td><?php echo $r->cemail; ?></td>
                  <td><?php echo $r->subject; ?></td>
                  <td><?php echo $r->message; ?></td>
                  <td><?php echo $r->created; ?></td>
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
