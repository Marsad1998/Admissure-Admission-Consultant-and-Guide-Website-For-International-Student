<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include '../connect/db.php'; ?>
		<?php include '../inc/code.php'; ?>
		<?php include '../links/header.php'; ?>
		<style>
			.custom_field{
				/*border: 2px solid red;*/
				border-radius: 0px;
			}
		</style>
	</head>

	<body>
		<?php include '../links/nav.php'; ?>
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-sm-4">
				<br><br><br><br><br>
					<div class="jumbotron text-center">
						<form action="" method="POST" role="form" id="Signupform">
							<legend>Register</legend>
							<br>
								<?php getMessage(@$msg, @$sts) ?>
								<div class="form-group">
									<input type="text" class="form-control custom_field" name="user_name" placeholder="First Name">
								</div>
								<div class="form-group">
									<input type="text" class="form-control custom_field" name="user_surname" placeholder="Surname">
								</div>
								<div class="form-group">
									<input type="text" class="form-control custom_field" name="user_phone" placeholder="Telephone">
								</div>
								<br>

								<div class="form-group">
									<input type="email" class="form-control custom_field" name="user_email" placeholder="Email">
								</div>
								<div class="form-group">
									<input type="password" class="form-control custom_field" name="user_password" placeholder="Password">
								</div>
								<div class="form-group">
									<input type="password" class="form-control custom_field" name="user_cpassword" placeholder="Confirm Password">
								</div>
						
							<button type="submit" class="btn btn-primary btn-block custom_field" name="registerForm">Submit</button>
							<a href="" style="color: red">Reset Password</a>
						</form>
					</div>
				</div>	
			</div>
		</div>

		<?php include '../links/footer.php'; ?>
	</body>
</html>