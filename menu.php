<?php 
	require '../project/db/connect.php'; 
	require '../project/functions/functions.php';
	$records=array();
	$results=$db->query("SELECT food_item, item_price FROM fooditems");
	if($results->num_rows){
		while ($row=$results->fetch_object()) {
			$records[]=$row;
		}
		$results->free();
	}

 ?> 

 <!DOCTYPE html>
<html lang="en">
<head>
	<?php include'../project/includes/includes.php'; ?>	
	<title>Menu</title>
</head>
<body>
<!--header begins-->
	<?php include '../project/includes/header.php'; ?>
<!--header ends-->
<!--menu begins-->
	<div class="pageContainer">
				<div class="container">
					<div class="row">
					<div class="pageTitle">
						<h3><span> MENU</span></h3>			
					</div>
						<table class="table table-responsive table-striped" id="breakfast">
						  <thead>
						    <tr>
						      <th>#</th>
						      <th>Food Item</th>
						      <th>Price</th>
						    </tr>
						  </thead>
						  <tbody>
						  	<?php 
						  		$k=0;
		              			if(!count($records)) {
		              				echo '<tr><td>no food items</td><td></td><td></td></tr>';
		              			} else{
		              				foreach ($records as $r) {
		              					$k=$k+1;
		              				
		              		?>
			                <tr>
			                  <td><?php echo $k; ?></td>
			                  <td><?php echo $r->food_item ;?></td>
			                  <td><?php echo $r->item_price; ?></td>
			                </tr>
			                <?php 
			            		}
			            	  }
			                ?>
						  </tbody>
						</table>
					</div>
				</div>	
<!--menu ends-->
<!--footer begins-->
		<?php include '../project/includes/footer.php'; ?>
<!--footer ends-->
</body>
</body>
</html>