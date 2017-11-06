<!DOCTYPE html>
<html lang="en">
<head>
	<?php include'../project/includes/includes.php'; ?>	
	<title>Contact us</title>
	<?php session_start(); session_destroy(); ?>
</head>
<body>
<!--header begins-->
	<?php include '../project/includes/header.php'; ?>
<!--header ends-->

<?php// require 'contactusresult.php'; ?>
<!--contact form begins-->
	<div class="">
			<div class="container innerpage">
				<div class="common_inner">
					<div class="clearfix text-uppercase mb10 ob font16 text-center">
						<div class="menu-sub-head disinbl">
							send us an email
						</div>
						<div style="font-size: small;color: RED"><br><br>all fields are mandatory</div>
					</div>
				</div>
				<div>
					<form role="form" class="common-form text-center form_tooltip" id="contact_form" name="contact_form" action="contactusresult.php"  method="post" autocomplete="off">
					<input type="hidden" name="page" value="contactus" />
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group mb20">
									<input type="text" placeholder="ENTER YOUR NAME" class="form-control" id="cname" name="cname" required minlength="5" maxlength="15" pattern="[a-zA-Z\s]+">
								</div>
								<div class="form-group mb20">
									<input type="text" placeholder="ENTER YOUR MOBILE NUMBER" class="form-control" id="cnumber" name="cnumber" required minlength="10" maxlength="10" pattern="[7-9]{1}[0-9]{9}">
								</div>
								<div class="form-group mb20">
									<input type="email" placeholder="ENTER YOUR EMAIL" class="form-control" id="cemail" name="cemail" required >
								</div>
								<div class="form-group mb20">
									<input type="text" placeholder="ENTER YOUR SUBJECT" class="form-control" id="subject" name="subject" required>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group mb20">
									<textarea class="form-control contact-text" placeholder="ENTER YOUR MESSAGE" id="message" name="message" required minlength="10"></textarea>
								</div>
																
								<div class="btnContainer ">
									<button class="btn btn-md  back-btn common-btn common-btn-theme-light btn-block form-btn" type="submit" name="submit" id="submit">
										SUBMIT
									</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
<!--contact form ends-->

<!--footer begins-->
		<?php include '../project/includes/footer.php'; ?>
<!--footer ends-->
</body>
</body>
</html>