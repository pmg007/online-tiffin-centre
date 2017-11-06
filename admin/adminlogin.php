
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../../project/images/logo1.png">
  <!--css-->
  <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../bootstrap/css/combine.css">
  <link rel="stylesheet" type="text/css" href="../../bootstrap/css/slick.css">
  <link rel="stylesheet" type="text/css" href="../../bootstrap/css/dashboard.css">
  <!--javascript-->
  
  <script type="text/javascript" src="../../bootstrap/js/jquery.min.js"></script>
  <script type="text/javascript" src="../../bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript"src="../../bootstrap/js/slick.min.js"></script>

	<title>Login</title>
</head>
<body>

<!--login begins-->

	<div class="pageContainer">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="innerpage loginPage">
								<div class="pageTitle">
									<h4><span> LOGIN</span></h4>
									<h5 class="pgheading" style="text-transform: uppercase;">enter your credentials</h5>
									
								</div>
								<div class="col-lg-6 col-lg-offset-3 col-md-12  container">
									<form role="form" id="log_in" name="log_in" action="adminloginresult.php" class="common-form" method="POST" autocomplete="off">
										<div class="form-group">
											<input type="text" placeholder="ENTER YOUR NAME" class="form-control" name="aname" id="aname"required pattern="[a-zA-Z0-9\s]+">
										</div>
										<div class="form-group">
											<input type="password" placeholder="ENTER YOUR PASSWORD" class="form-control" id="apassword" name="apassword" required minlength="8" maxlength="24">										
										</div>
										<div class="btnContainer ">
												<button class="btn btn-md common-btn-theme-dark login-btn common-btn " type="submit" name="login" id="login"> LOGIN</button>
										</div>
										</form>
										<h4><a href="../index.php">Home</a></h4>
										</div>
										</div>										
									

								</div>
							</div>

						</div>
		
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--login ends-->
</body>
</body>
</html>
<?php session_start();session_destroy(); ?>

