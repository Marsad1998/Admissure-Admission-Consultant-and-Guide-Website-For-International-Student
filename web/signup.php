<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include 'connect/db.php'; ?>
		
		<?php include 'links/header.php'; ?>
		<style>
			.custom_field{
				/*border: 2px solid red;*/
				border-radius: 0px;
			}
		</style>
	</head>

	<body>
		<?php include 'links/nav.php';
		 $referral = base64_decode($_REQUEST['referral']);
		 ?>
		
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-sm-4">
				<br><br><br><br><br>
					<div class="jumbotron text-center">
						<form action="" method="POST" role="form" id="">
							<legend>Register</legend>
							<br>
								<?php getMessage(@$msg, @$sts) ?>
								<div class="form-group">

									<input type="text" name="referral" value="<?=$referral?>">

									<input type="text" class="form-control custom_field" name="user_name" placeholder="First Name" >
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
						
							<!-- <button type="submit" class="btn btn-primary btn-block custom_field" name="registerFormfinal">Submit</button> -->
							<input type="submit" name="referform" class="btn btn-primary btn-block custom_field">
							<a href="" style="color: red">Reset Password</a>
						</form>
					</div>
				</div>	
			</div>
		</div>

		<?php include 'links/footer.php'; ?>
	</body>
</html>

<?php
if (isset($_POST['referform'])) {

	echo json_encode($_POST);



	echo $referral = $_REQUEST['referral'];
	$userdata=[


	'user_name'  => $_REQUEST['user_name'],
	'user_surname'  => $_REQUEST['user_surname'],
	'user_phone'  => $_REQUEST['user_phone'],
	'user_email'  => $_REQUEST['user_email'],
	'user_password'  => $_REQUEST['user_password'],
];

if(insert_data($dbc,"users",$userdata)){

	if($referral){
		$getUser = mysqli_fetch_assoc(mysqli_query($dbc,"SELECT * FROM users WHERE user_id = '$referral' "));


			$NewBlance = $getUser['user_balance'] + 10;
			$user_idNew = $getUser['user_id'];

			mysqli_query($dbc, "UPDATE users SET user_balance = '$NewBlance' WHERE user_id = '$user_idNew' ");

	}




}
		


}


?>