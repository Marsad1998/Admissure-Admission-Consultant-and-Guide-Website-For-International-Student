<?php 
	require_once '../connect/db.php';
	if (isset($_POST['user_email2'])) {
		if (empty($_POST["user_name"])) {
			$msg = "Name is required";
			$sts = "warning";
	 		echo json_encode(array('sts' => $sts, 'msg' => $msg));
	 		exit();
		}else{
		    $user_name = test_input($_POST["user_name"]);
		    // check if name only contains letters and whitespace
		    if (!preg_match("/^[a-zA-Z ]*$/",$user_name)) {
				$msg = "Only letters and white space allowed IN User Name";
				$sts = "warning";
		 		echo json_encode(array('sts' => $sts, 'msg' => $msg));
		 		exit();
		    }else{
				if (empty($_POST["user_email2"])) {
					$msg = "Email is required";
					$sts = "warning";
			 		echo json_encode(array('sts' => $sts, 'msg' => $msg));					
			 		exit();
				}else{
					$user_email2 = test_input($_POST["user_email2"]);
				    // check if e-mail address is well-formed
				    if (!filter_var($user_email2, FILTER_VALIDATE_EMAIL)) {
				      	$msg = "Invalid email format";
						$sts = "warning";
				 		echo json_encode(array('sts' => $sts, 'msg' => $msg));
				 		exit();
				    }else{
				    	if (empty($_POST["user_surname"])) {
						    $msg = "Surname is required";
							$sts = "warning";
					 		echo json_encode(array('sts' => $sts, 'msg' => $msg));
					 		exit();
						}else{
						    $user_surname = test_input($_POST["user_surname"]);
						    // check if name only contains letters and whitespace
						    if (!preg_match("/^[a-zA-Z ]*$/",$user_surname)) {
						      	$msg = "Only letters and white space allowed In Surname";
								$sts = "warning";
						 		echo json_encode(array('sts' => $sts, 'msg' => $msg));
						 		exit();
						    }else{
								$user_password2 = $_POST['user_password2'];
								// Validate password strength
								$uppercase = preg_match('@[A-Z]@', $user_password2);
								$lowercase = preg_match('@[a-z]@', $user_password2);
								$number    = preg_match('@[0-9]@', $user_password2);
								$specialChars = preg_match('@[^\w]@', $user_password2);

								if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($user_password2) < 8) {
								    $msg =  'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
									$sts = "warning";
							 		echo json_encode(array('sts' => $sts, 'msg' => $msg));
							 		exit();
								}else{
									$user_cpassword = $_POST['user_cpassword'];
									if ($user_password2 === $user_cpassword) {
									$user_phone = $_POST['user_phone'];
										$checkEmail = fetchRecord($dbc, "users", "user_email", $user_email2)['user_email'];
										if ($checkEmail != $user_email2) {
											$q = mysqli_query($dbc,"INSERT INTO users (user_name, user_surname, user_phone, user_email, user_password, user_pic, user_sts) VALUES ('$user_name', '$user_surname', '$user_phone', '$user_email2', '$user_password2','place.png', '1')");
												if ($q) {
													$id = mysqli_insert_id($dbc);
													$q2 = mysqli_query($dbc,"INSERT INTO user_steps (user_login,user_id) VALUES ('1','$id')");
													if ($q2) {
														$q3 = mysqli_query($dbc,"INSERT INTO user_data (user_id) VALUES ('$id')");
														if ($q3) {
															$msg = "You have Successfully Registered";
															$sts = "success";
													 		echo json_encode(array('sts' => $sts, 'msg' => $msg));
													 		exit();
														}else {
															$msg = mysqli_error($dbc);
															$sts = "error";
															exit();
														}
													}else{
														$msg = mysqli_error($dbc);
														$sts = "error";
														exit();
													}
												}else{
													$msg = mysqli_error($dbc);
													$sts = "error";
											 		echo json_encode(array('sts' => $sts, 'msg' => $msg));
											 		exit();
												}
										}else{
											$msg = "Email Already Exist";
											$sts = "error";
										 	echo json_encode(array('sts' => $sts, 'msg' => $msg));
										 	exit();
										}
									}else{
										$msg = "Password Does not Match";
										$sts = "error";
										echo json_encode(array('sts' => $sts, 'msg' => $msg));
										exit();
									}
								}
						    }
						}
				    }
				}

		    }
		}
	}
	
	// logging students code
 	if (isset($_POST['user_email'])) {
 		# code...
 		$_SESSION['user_email'] = $user_email= $_POST['user_email'];
 		$user_password = $_POST['user_password'];
	 	$q=mysqli_query($dbc,"SELECT * FROM users WHERE user_email = '$user_email' AND user_password = '$user_password'");
 		if (mysqli_num_rows($q)==1) {
	 		$msg= "Logging";
	 		$sts= "success";
	 		$_SESSION['user_login'] = $user_email;
	 		// redirect("../module/",1500);
	 		echo json_encode(array('sts' => $sts, 'msg' => $msg));
	 		exit();
 		}else{
	 		$msg= "Invalid Email OR Password";
	 		$sts= "danger";
	 		echo json_encode(array('sts' => $sts, 'msg' => $msg));
	 		exit();
 		}
 	}
 	
 	if (isset($_POST['user_id'])) {
 		$user_id = $_POST['user_id'];
		$ext = explode(".", $_FILES["file"]["name"]);
		$extension = end($ext);
		echo $name = uniqid().".".$extension;
		$location = "../files/".$name;
		move_uploaded_file($_FILES["file"]["tmp_name"], $location);
		$q = mysqli_query($dbc,"UPDATE user_data SET user_data_step1 = '$name' WHERE user_id = '$user_id'");
		checkUser($dbc,$user_id);
		checkUserApp($dbc,$user_id);
		exit();
	}
 	
 	if (isset($_POST['user_id2'])) {
 		$user_id = $_POST['user_id2'];
		$ext = explode(".", $_FILES["file2"]["name"]);
		$extension = end($ext);
		echo $name = uniqid().".".$extension;
		$location = "../files/".$name;
		move_uploaded_file($_FILES["file2"]["tmp_name"], $location);
		$q = mysqli_query($dbc,"UPDATE user_data SET user_data_step2 = '$name' WHERE user_id = '$user_id'");
		checkUser($dbc,$user_id);
		checkUserApp($dbc,$user_id);
		exit();
	}
 	
 	if (isset($_POST['user_id3'])) {
 		$user_id = $_POST['user_id3'];
		$ext = explode(".", $_FILES["file3"]["name"]);
		$extension = end($ext);
		echo $name = uniqid().".".$extension;
		$location = "../files/".$name;
		move_uploaded_file($_FILES["file3"]["tmp_name"], $location);
		$q = mysqli_query($dbc,"UPDATE user_data SET user_data_step3 = '$name' WHERE user_id = '$user_id'");
		checkUser($dbc,$user_id);
		checkUserApp($dbc,$user_id);
		exit();
	}

	if (isset($_POST['revision'])) {
		$id = $_POST['revision'];
		$uni = $_POST['uni'];
		$q = mysqli_query($dbc,"UPDATE user_data SET user_data_revision = '1', user_data_uni = '$uni', user_data_sts = '0' WHERE user_id = '$id'");
		echo 'Your Application Send for Revision Successfully';
		checkUserApp($dbc,$id);
		exit();
	}

	if (isset($_POST['user_idNew'])) {
		$id = $_POST['user_idNew'];
		$skip_review = $_POST['skip_review'];
		if ($skip_review == 'skip_review') {
			$q = mysqli_query($dbc,"UPDATE user_data SET user_data_revision = '0' AND user_data_sts = '1' WHERE user_id = '$id'"); 	
		}else{
			$q = mysqli_query($dbc,"UPDATE user_data SET user_data_revision = '1' AND user_data_sts = '1' WHERE user_id = '$id'"); 	
		}
		echo 'Your Application Submitted Successfully';
		checkUserApp($dbc,$id);
		exit();
	}

	if (isset($_POST['text'])) {
		$text = validate_data($dbc, $_POST['text']);
		$chat_user = $_POST['chat_user'];
		$adminORuser = $_POST['adminORuser'];
		if ($adminORuser == 'admin') {
			$q2 = mysqli_query($dbc,"INSERT INTO user_chat (user_chat_text, user_id, user_chat_type, user_chat_bw) VALUES ('$text', '$chat_user', 'Admissure Support', 'admin')");
		}else{
			$q2 = mysqli_query($dbc,"INSERT INTO user_chat (user_chat_text, user_id, user_chat_type, user_chat_bw) VALUES ('$text', '$chat_user', 'Admissure Support', 'user')");
		}
		exit();
	}

	if (isset($_POST['getUser']) && isset($_POST['getUser']) != "") {
		$id = $_POST['getUser'];
		$q = mysqli_query($dbc,"SELECT user_chat.*, users.* FROM users INNER JOIN user_chat ON user_chat.user_id = users.user_id WHERE users.user_id = '$id' AND user_chat.user_chat_type = 'Admissure Support' ORDER BY user_chat_time ASC");
		while($r = mysqli_fetch_assoc($q)){
			$response[] = $r;
		}
		echo json_encode($response);	
		exit();	
	}

	if (isset($_POST['text2'])) {
		$text2 = validate_data($dbc, $_POST['text2']);
		$chat_user2 = $_POST['chat_user2'];
		$adminORuser2 = $_POST['adminORuser2'];
		if ($adminORuser2 == 'admin') {
			$q2 = mysqli_query($dbc,"INSERT INTO user_chat (user_chat_text, user_id, user_chat_type, user_chat_bw) VALUES ('$text2', '$chat_user2', 'Review Team', 'admin')");
		}else{
			$q2 = mysqli_query($dbc,"INSERT INTO user_chat (user_chat_text, user_id, user_chat_type, user_chat_bw) VALUES ('$text2', '$chat_user2', 'Review Team', 'user')");
		}
		exit();
	}

	if (isset($_POST['getUser2']) && isset($_POST['getUser2']) != "") {
		$id = $_POST['getUser2'];
		$q = mysqli_query($dbc,"SELECT user_chat.*, users.* FROM users INNER JOIN user_chat ON user_chat.user_id = users.user_id WHERE users.user_id = '$id' AND user_chat.user_chat_type = 'Review Team' ORDER BY user_chat_time ASC");
		while($r = mysqli_fetch_assoc($q)){
			$response[] = $r;
		}
		echo json_encode($response);	
		exit();	
	}

	if (isset($_POST['testimonalText'])) {
		$test_user = $_POST['test_user'];
		$testimonalText = validate_data($dbc, $_POST['testimonalText']);
		$testimonalTextid = $_POST['testimonalTextid'];
		if ($testimonalTextid == '') {
			$q2 = mysqli_query($dbc,"INSERT INTO testimonals (test_text, user_id) VALUES ('$testimonalText', '$test_user')");
			echo 'Add Successfully';
			exit();
		}else{
			$q2 = mysqli_query($dbc,"UPDATE testimonals SET test_text = '$testimonalText' WHERE test_id = '$testimonalTextid'");
			echo 'Updated Successfully';
			exit();
		}
	}

	if (isset($_POST['getTest']) && isset($_POST['getTest']) != "") {
		$id = $_POST['getTest'];
		$q = mysqli_query($dbc,"SELECT * FROM testimonals WHERE user_id = '$id'");
		// $response = array();
		while($r = mysqli_fetch_assoc($q)){
			$response[] = $r;
		}
		echo json_encode($response);	
		exit();	
	}

	if (isset($_POST['getTest2']) && isset($_POST['getTest2']) != "") {
		$id = $_POST['getTest2'];
		$q = mysqli_query($dbc,"SELECT * FROM testimonals WHERE test_id = '$id'");
		$response = array();
		while($r = mysqli_fetch_assoc($q)){
			$response = $r;
		}
		echo json_encode($response);	
		exit();	
	}

	if (isset($_POST['user_id_pic'])) {
		$user_id_pic = $_POST['user_id_pic'];
		$ext = explode(".", $_FILES["user_pic"]["name"]);
		$extension = end($ext);
		echo $name = uniqid().".".$extension;
		$location = "../files/".$name;
		move_uploaded_file($_FILES["user_pic"]["tmp_name"], $location);
		$q = mysqli_query($dbc,"UPDATE users SET user_pic = '$name' WHERE user_id = '$user_id_pic'");
		exit();
	}

	if (isset($_POST['editData'])) {
		$editData = validate_data($dbc, $_POST['editData']);
		$edit_data_field = $_POST['edit_data_field'];
		$edit_user = $_POST['edit_user'];
		$q2 = mysqli_query($dbc,"UPDATE users SET $edit_data_field = '$editData' WHERE user_id = '$edit_user'");
		checkUser($dbc,$editData);
		exit();
	}

	if (isset($_POST['withdrawAmount'])) {
		$withdrawAmount = $_POST['withdrawAmount'];
		$user_withdraw = $_POST['user_withdraw'];
		$q2 = mysqli_query($dbc,"INSERT INTO withdrawals (withdraw_amount, withdraw_sts, user_id) VALUES ('$withdrawAmount', '0', '$user_withdraw')");
		if ($q2) {
			$total_balance = fetchRecord($dbc, "users", "user_id", $user_withdraw)['user_balance'];
			$new_balance = $total_balance - $withdrawAmount;
			$q2 = mysqli_query($dbc,"UPDATE users SET user_balance = '$new_balance' WHERE user_id = '$user_withdraw'");
			exit();
		}
	}

	if (isset($_POST['emails'])) {
		$emails = validate_data($dbc,$_POST['emails']);
		$message = wordwrap($_POST['message'],70);
		mail($emails,"Referral Email",$message);
		exit();
	}

	if (isset($_POST['admin_email'])) {
		$admin_id = validate_data($dbc,$_POST['admin_id']);
		$admin_email = validate_data($dbc,$_POST['admin_email']);
		$admin_password = validate_data($dbc,$_POST['admin_password']);
		$admin_name = validate_data($dbc,$_POST['admin_name']);
		if ($admin_id == "") {
			$q2 = mysqli_query($dbc,"INSERT INTO admin (admin_email ,admin_password, admin_name) VALUES ('$admin_email' ,'$admin_password', '$admin_name')");		
			if ($q2) {
				echo 'Admin Added Successfully';
				exit();
			}else {
				echo mysqli_error($dbc);
				exit();
			}
		}else{
			$q2 = mysqli_query($dbc,"UPDATE admin SET admin_email = '$admin_email' ,admin_password = '$admin_password', admin_name = '$admin_name' WHERE admin_id = '$admin_id'");		
			if ($q2) {
				echo 'Admin Updated Successfully';
				exit();
			}else {
				echo mysqli_error($dbc);
				exit();
			}
		}
	}

	if (isset($_POST['admin']) && isset($_POST['admin']) != "") {
		$id = $_POST['admin'];
		$q = mysqli_query($dbc,"SELECT * FROM admin");
		while($r = mysqli_fetch_assoc($q)){
			$response[] = $r;
		}
		echo json_encode($response);	
		exit();	
	}

	if (isset($_POST['admin_id']) && isset($_POST['admin_id']) != "") {
		$id = $_POST['admin_id'];
		$q = mysqli_query($dbc,"SELECT * FROM admin WHERE admin_id = '$id'");
		$response[] = array();
		while($r = mysqli_fetch_assoc($q)){
			$response = $r;
		}
		echo json_encode($response);	
		exit();	
	}

	if (isset($_POST['id_update'])) {
		$id_update = validate_data($dbc, $_POST['id_update']);
		$q2 = mysqli_query($dbc,"UPDATE user_data SET user_data_revision = '3' WHERE user_id = '$id_update'");
		exit();
	}

	if (isset($_POST['id_update2'])) {
		$id_update2 = validate_data($dbc, $_POST['id_update2']);
		$q2 = mysqli_query($dbc,"UPDATE user_data SET user_data_sts = '1' WHERE user_id = '$id_update2'");
		exit();
	}
	
	// logging Admin code
 	if (isset($_POST['admin_password2'])) {
 		# code...
 		$_SESSION['admin_email2'] = $admin_email2= $_POST['admin_email2'];
 		$admin_password2 = $_POST['admin_password2'];
	 	$q = mysqli_query($dbc,"SELECT * FROM admin WHERE admin_email = '$admin_email2' AND admin_password = '$admin_password2'");
 		if (mysqli_num_rows($q) == 1) {
	 		$msg = "Logging";
	 		$sts = "success";
	 		$_SESSION['admin_login'] = $admin_email2;
	 		echo json_encode(array('sts' => $sts, 'msg' => $msg));	 		
	 		exit();
		}else{
	 		$msg = "Invalid Email or Password (Admin)";
	 		$sts = "danger";
	 		echo json_encode(array('sts' => $sts, 'msg' => $msg));	 		
	 		exit();
		}
 	}
 	
 	if (isset($_POST['user_id4'])) {
 		$user_id4 = $_POST['user_id4'];
		$ext = explode(".", $_FILES["file4"]["name"]);
		$extension = end($ext);
		$name = uniqid().".".$extension;
		$location = "../files/".$name;
		move_uploaded_file($_FILES["file4"]["tmp_name"], $location);
		$q = mysqli_query($dbc,"UPDATE user_data SET user_data_offer = '$name' WHERE user_id = '$user_id4'");
		if ($q) {
			echo $name = uniqid().".".$extension;
		}else {
			echo mysqli_error($dbc);		
		}
		checkUser($dbc,$user_id4);
		checkUserApp($dbc,$user_id4);
		exit();
	}

	if (isset($_POST['loadTest']) && isset($_POST['loadTest']) != "") {
		$id = $_POST['loadTest'];
		$q = mysqli_query($dbc,"SELECT testimonals.*, users.* FROM testimonals INNER JOIN users ON testimonals.user_id = users.user_id");
		while($r = mysqli_fetch_assoc($q)){
			$response[] = $r;
		}
		echo json_encode($response);	
		exit();	
	}

	if (isset($_POST['testID'])) {
		$testID = validate_data($dbc, $_POST['testID']);
		$previous = fetchRecord($dbc, "testimonals", "test_id", $testID)['test_sts'];
		if ($previous == 1) {
			$q2 = mysqli_query($dbc,"UPDATE testimonals SET test_sts = '0' WHERE test_id = '$testID'");
		}else{
			$q2 = mysqli_query($dbc,"UPDATE testimonals SET test_sts = '1' WHERE test_id = '$testID'");
		}
		exit();
	}

	if (isset($_POST['loadWithdraw']) && isset($_POST['loadWithdraw']) != "") {
		$id = $_POST['loadWithdraw'];
		$q = mysqli_query($dbc,"SELECT withdrawals.*, users.* FROM withdrawals INNER JOIN users ON withdrawals.user_id = users.user_id");
		while($r = mysqli_fetch_assoc($q)){
			$response[] = $r;
		}
		echo json_encode($response);	
		exit();	
	}

	if (isset($_POST['withDrawvalue']) && isset($_POST['withDrawvalue']) != "") {
		$withDrawvalue = $_POST['withDrawvalue'];
		$withDrawID_id = $_POST['withDrawID_id'];
		$q2 = mysqli_query($dbc,"UPDATE withdrawals SET withdraw_sts = '$withDrawvalue' WHERE withdraw_id = '$withDrawID_id'");
		exit();	
	}

	if (isset($_POST['uni_name']) && isset($_POST['uni_name']) != "") {
		$uni_name = $_POST['uni_name'];
		$uni_web = $_POST['uni_web'];
		$uni_sts = $_POST['uni_sts'];
		$q2 = mysqli_query($dbc,"INSERT INTO universities (uni_name, uni_web, uni_sts) VALUES ('$uni_name', '$uni_web','$uni_sts')");;
		if ($q2) {
			echo 'University Added Successfully';
			exit();	
		}else{
			echo mysqli_error($dbc);
		}
	}

	if (isset($_POST['logoinput'])) {
		$logoinput = $_POST['logoinput'];
		$ext = explode(".", $_FILES["logofile2"]["name"]);
		$extension = end($ext);
		echo $name = uniqid().".".$extension;
		$location = "../files/".$name;
		move_uploaded_file($_FILES["logofile2"]["tmp_name"], $location);
		$q = mysqli_query($dbc,"UPDATE universities SET uni_logo = '$name' WHERE uni_id = '$logoinput'");
		exit();
	}

	if (isset($_POST['uni_id2'])) {
		$uni_id2 = $_POST['uni_id2'];
		$ext = explode(".", $_FILES["fileFile2"]["name"]);
		$extension = end($ext);
		echo $name = uniqid().".".$extension;
		$location = "../files/".$name;
		move_uploaded_file($_FILES["fileFile2"]["tmp_name"], $location);
		$q = mysqli_query($dbc,"UPDATE universities SET uni_form = '$name' WHERE uni_id = '$uni_id2'");
		exit();
	}

	if (isset($_POST['uni_idhome'])) {
		$uni_idhome = validate_data($dbc, $_POST['uni_idhome']);
		$home = validate_data($dbc, $_POST['home']);
		if ($home == "1") {
			$q2 = mysqli_query($dbc,"UPDATE universities SET uni_sts = '3' WHERE uni_id = '$uni_idhome'");
		}elseif ($home == "2") {
			$q2 = mysqli_query($dbc,"UPDATE universities SET uni_sts = '0' WHERE uni_id = '$uni_idhome'");
		}elseif ($home == "3") {
			$q2 = mysqli_query($dbc,"UPDATE universities SET uni_sts = '1' WHERE uni_id = '$uni_idhome'");
		}else{
			$q2 = mysqli_query($dbc,"UPDATE universities SET uni_sts = '2' WHERE uni_id = '$uni_idhome'");
		}
		exit();
	}

	if (isset($_POST['uni_idsts'])) {
		$uni_idsts = validate_data($dbc, $_POST['uni_idsts']);
		$uni_sts = validate_data($dbc, $_POST['uni_sts']);
		if ($uni_sts == '1') {
			$q2 = mysqli_query($dbc,"UPDATE universities SET uni_sts = '0' WHERE uni_id = '$uni_idsts'");
		}elseif ($uni_sts == '2') {
			$q2 = mysqli_query($dbc,"UPDATE universities SET uni_sts = '3' WHERE uni_id = '$uni_idsts'");
		}elseif ($uni_sts == '3') {
			$q2 = mysqli_query($dbc,"UPDATE universities SET uni_sts = '2' WHERE uni_id = '$uni_idsts'");
		}else{
			$q2 = mysqli_query($dbc,"UPDATE universities SET uni_sts = '1' WHERE uni_id = '$uni_idsts'");
		}
		exit();
	}

	if (isset($_POST['uni_selected']) && isset($_POST['uni_selected']) != "") {
		$id = $_POST['uni_selected'];
		$q = mysqli_query($dbc,"SELECT * FROM universities WHERE uni_id = '$id'");
		$response = array();
		while($r = mysqli_fetch_assoc($q)){
			$response = $r;
		}
		echo json_encode($response);	
		exit();	
	}

	if (isset($_POST['del_test_id'])) {
		$del_test_id = $_POST['del_test_id'];
		$q = mysqli_query($dbc,"DELETE FROM testimonals WHERE test_id = '$del_test_id'");
		exit();
	}

	@$fetchUser = mysqli_fetch_assoc(mysqli_query($dbc,"SELECT * FROM users WHERE user_email = '$_SESSION[user_login]'"));
	@$fetchAdmin = mysqli_fetch_assoc(mysqli_query($dbc,"SELECT * FROM admin WHERE admin_email = '$_SESSION[admin_login]'"));

function checkUser($dbc,$value){
	@$fetchUser2 = mysqli_fetch_array(mysqli_query($dbc,"SELECT * FROM users WHERE user_id = '$value'"));
	for ($i = 1; $i <= 15; $i++) {
		if ($i == 14) {
			
		}else{
			if ($fetchUser2[$i] != null OR $fetchUser2[$i] != "" OR $fetchUser2[$i] != "0") {
				$q = mysqli_query($dbc,"UPDATE users SET user_sts = '1' WHERE user_id = $value");
				return 'Status Updated';
			}
		}
	}
}
function checkUserApp($dbc,$value){
	@$fetchUserData = mysqli_fetch_array(mysqli_query($dbc,"SELECT * FROM user_data WHERE user_id = '$value'"));
	for ($i = 1; $i < 9; $i++) {
		if ($i == "6") {
			if ($fetchUserData[$i] != null OR $fetchUserData[$i] != "" OR $fetchUserData[$i] != "0" OR $fetchUserData[$i] != "1") {
				$q = mysqli_query($dbc,"UPDATE users_data SET user_data_sts = '1' WHERE user_id = $value");
			}
		}else{
			if ($fetchUserData[$i] != null OR $fetchUserData[$i] != "" OR $fetchUserData[$i] != "0") {
				$q = mysqli_query($dbc,"UPDATE users_data SET user_data_sts = '1' WHERE user_id = $value");
			}
		}
	}
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>

