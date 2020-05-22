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
						<form action="" method="POST" role="form">
							<legend>Sign In</legend>
							<?php getMessage(@$msg, @$sts) ?>
							<br>
								<div class="form-group">
									<input type="email" class="form-control custom_field" name="user_email" placeholder="Email Address">
								</div> 
								<div class="form-group">
									<input type="password" class="form-control custom_field" name="user_password" placeholder="Password">
								</div>
						
							<button type="submit" class="btn btn-primary btn-block custom_field" name="loginForm">Submit</button>
							<a href="" style="color: red">Reset Password</a>
						</form>
					</div>
				</div>	
			</div>
		</div>

		<?php include '../links/footer.php'; ?>
	</body>
</html>