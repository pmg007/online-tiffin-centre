<!DOCTYPE html>
<html lang="en">
<head>
	<?php include '../project/includes/includes.php'; ?>	
	<title>Signup</title>
	<?php session_start(); session_destroy(); ?>
</head>
<body>
<!--header begins-->
	<?php include '../project/includes/header.php'; ?>
<!--header ends-->
<?php //require('contactusresult.php'); ?>
<!--sign up form begins-->
	<div class="pageContainer">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="innerpage loginPage">
								<div class="pageTitle">
									<h4><span> SIGN UP</span></h4>
									<h5 class="pgheading" style="text-transform: uppercase;">Registration for new customer</h5>
									
								</div>
								<div class="col-lg-6 col-lg-offset-3 col-md-12  container">
									<form role="form" id="signup" name="signup" action="signupresult.php" class="common-form" method="post" autocomplete="off">
										<div class="form-group">
											<input type="text" placeholder="ENTER YOUR FULL NAME" class="form-control" name="customer_name" id="customer_name" required minlength="5" maxlength="15" pattern="[a-zA-Z\s]+">
										</div>
										<div class="form-group">
											<input type="text" placeholder="ENTER YOUR MOBILE NUMBER" class="form-control" name="phone" id="phone" required minlength="10" maxlength="10" pattern="[7-9]{1}[0-9]{9}">
										</div>
										<div class="form-group">
											<input type="email" placeholder="ENTER YOUR EMAIL ADDRESS" class="form-control" name="email_address" id="email_address" required>
										</div>
										<div class="form-group">
											<input type="text" placeholder="ENTER YOUR COMPANY/COLLEGE NAME" class="form-control" name="company_name" id="company_name" required minlength="5">
										</div>
										<div class="form-group">
												<input type="text" placeholder="ENTER YOUR ADDRESS" class="form-control" id="address" name="address" required minlength="10" maxlength="80">
										</div>
										<div class="form-group">
											<input type="password" placeholder="PASSWORD (at least 8 char,1 UC,1LC,1SC,1NC)" class="form-control" id="pass" name="pass" required minlength="8" maxlength="24" pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
											
										</div>
										<div class="btnContainer ">
												<button class="btn btn-md common-btn-theme-dark login-btn common-btn " type="submit" name="createuser"id="createuser"> SIGN UP</button>
										</div>
										</div>
										</div>										
									</form>
								</div>
							</div>

						</div>
		
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--sign up form ends-->

<!--footer begins-->
		<?php include '../project/includes/footer.php';?>
<!--footer ends-->
</body>
</body>
</html>
</body>
</html>