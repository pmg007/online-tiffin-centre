<!DOCTYPE html>
<html lang="en">
<head>
	<?php include'../project/includes/includes.php'; ?>	
	<title>Login</title>
	<?php session_start(); session_destroy(); ?>
</head>
<body>

<!--header begins-->
	<?php include '../project/includes/header.php'; ?>
<!--header ends-->

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
									<form role="form" id="log_in" name="log_in" action="loginresult.php" class="common-form" method="post" autocomplete="off">
										<div class="form-group">
											<input type="text" placeholder="ENTER YOUR MOBILE NUMBER" class="form-control" name="phone" id="phone" required minlength="10" maxlength="10" pattern="[7-9]{1}[0-9]{9}">
										</div>
										<div class="form-group">
											<input type="password" placeholder="ENTER YOUR PASSWORD" class="form-control" id="password" name="password" required minlength="8" maxlength="24" pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
											
										</div>
										<div class="btnContainer ">
												<button class="btn btn-md common-btn-theme-dark login-btn common-btn " type="submit" name="login"id="login"> LOGIN</button>
										</div>
										</form>
										</div>
										</div>										
									
									<h4>DON'T HAVE AN ACCOUNT YET?</h4>
									<div class="btnContainer">
										<button class="btn btn-md common-btn-theme-dark login-btn common-btn " type="submit" name="createuser"id="createuser"><a href="signup.php"><span style="color: #FFFFFF;">Create new account</span></a></button>
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
<!--footer begins-->
		<?php include '../project/includes/footer.php'; ?>
<!--footer ends-->
</body>
</body>
</html>
