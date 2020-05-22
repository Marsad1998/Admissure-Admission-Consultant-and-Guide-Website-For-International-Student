<?php include '../connect/db.php'; ?>
<?php include '../inc/code.php'; ?>
<?php if (!isset($_SESSION['user_login'])): redirect("../index.html")?>
<?php else: ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include '../links/header.php'; ?>	
		<style>
			.custom_nav{
				background-color: gray;
				color: white;
			}
			.custom_nav:hover{
				color: white;
				background-color: #007bff;
			}
			.customText {
				color: green;
			}
			.custom_link{
				color: red;
			}
			.custom_btn{
				border-radius: 0px;
			}
			.custom_btn2{
				padding: 5px 40px 5px 40px;
			}
			.customText2{
				font-size: 15px;
				position: relative;
				top: 14px;
			}
			/* Customize the label (the container) */
			.custom_checkbox {
			  display: block;
			  position: relative;
			  padding-left: 35px;
			  margin-bottom: 12px;
			  cursor: pointer;
			  font-size: 22px;
			  -webkit-user-select: none;
			  -moz-user-select: none;
			  -ms-user-select: none;
			  user-select: none;
			}

			/* Hide the browser's default checkbox */
			.custom_checkbox input {
			  position: absolute;
			  opacity: 0;
			  cursor: pointer;
			  height: 0;
			  width: 0;
			}

			/* Create a custom checkbox */
			.checkmark {
			  position: absolute;
			  top: 20px;
			  left: 0;
			  height: 25px;
			  width: 25px;
			  background-color: #eee;
			}

			/* On mouse-over, add a grey background color */
			.custom_checkbox:hover input ~ .checkmark {
			  background-color: #ccc;
			}

			/* When the checkbox is checked, add a blue background */
			.custom_checkbox input:checked ~ .checkmark {
			  background-color: #2196F3;
			}

			/* Create the checkmark/indicator (hidden when not checked) */
			.checkmark:after {
			  content: "";
			  position: absolute;
			  display: none;
			}

			/* Show the checkmark when checked */
			.custom_checkbox input:checked ~ .checkmark:after {
			  display: block;
			}

			/* Style the checkmark/indicator */
			.custom_checkbox .checkmark:after {
			  left: 9px;
			  top: 5px;
			  width: 5px;
			  height: 10px;
			  border: solid white;
			  border-width: 0 3px 3px 0;
			  -webkit-transform: rotate(45deg);
			  -ms-transform: rotate(45deg);
			  transform: rotate(45deg);
			}
			/* Chat containers */
			.container2 {
			  /*border: 2px solid #dedede;*/
			  background-color: #f1f1f1;
			  border-radius: 5px;
			  padding: 10px;
			  margin: 10px 0;
			}

			/* Darker chat container2 */
			.darker {
			  border-color: #ccc;
			  background-color: #ddd;
			}

			/* Clear floats */
			.container2::after {
			  content: "";
			  clear: both;
			  display: table;
			}

			/* Style images */
			.container2 img {
			  float: left;
			  max-width: 60px;
			  width: 100%;
			  margin-right: 20px;
			  border-radius: 50%;
			}

			/* Style the right image */
			.container2 img.right {
			  float: right;
			  margin-left: 20px;
			  margin-right:0;
			}

			/* Style time text */
			.time-right {
			  float: right;
			  color: #aaa;
			}

			/* Style time text */
			.time-left {
			  float: left;
			  color: #999;
			}
			.text-danger{
				cursor: pointer;
			}

			#blah{
			  position: relative;
			  cursor: pointer;
			  border-radius: 50%;
			  border: 1px dashed;
			}
			.blah{
			  width : 70%;
			  height: 40%;
			  margin-left: 70px;
			}
		</style>	
	</head>

	<body>
		<?php include '../links/nav.php'; ?>
		
	<?php 
		$fetchUsersts = fetchRecord($dbc, "user_data", "user_id", $fetchUser['user_id']);
		if ($fetchUser['user_id'] != ""){
			$border_color = 'border-success';
			$bg_color = 'bg-warning';
			$status = 'active';
		}

		if ($fetchUsersts['user_data_step1'] != "" AND $fetchUsersts['user_data_step2'] != "" AND $fetchUsersts['user_data_step3'] != ""){
			$border_color1 = 'border-success';
			$bg_color1 = 'bg-warning';
		}

		if ($fetchUsersts['user_data_revision'] == "1") {
			$btn_sts1 = 'disabled';
			$btn_sts = '';
		}else{
			$btn_sts = 'disabled';
			$btn_sts1 = '';
		}

		if ($fetchUsersts['user_data_revision'] == '3') {
			$border_color3 = 'border-success';
			$border_color4 = 'border-success';
			$bg_color3 = 'bg-warning';
			$bg_color4 = 'bg-warning';
			$btn_sts1 = 'disabled';
			$btn_sts2 = 'disabled';
			$btn_sts4 = 'disabled';
		}else{
			// $btn_sts = 'disabled';
			$btn_sts2 = '';
		}

		?>
				<!-- conatine fluid -->
		<div class="container">
			<br><br><br><br>
			<div class="row">
				<div class="col-sm-3">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				  		<a class="nav-link custom_nav <?=$status?>" style="border-radius: 0px;margin-bottom: 10px" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">My Profile</a>
						
						<a class="nav-link custom_nav" style="border-radius: 0px;margin-bottom: 10px" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">My Admission</a>
						
						<a class="nav-link custom_nav" style="border-radius: 0px;margin-bottom: 10px" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">My Messages</a>
						
						<a class="nav-link custom_nav" style="border-radius: 0px;margin-bottom: 10px" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">My Testimonals</a>
						
						<a class="nav-link custom_nav" style="border-radius: 0px;margin-bottom: 10px" id="v-pills-friend-tab" data-toggle="pill" href="#v-pills-friend" role="tab" aria-controls="v-pills-friend" aria-selected="false">Refer a Friend</a>
						
						<a class="nav-link custom_nav" style="border-radius: 0px;margin-bottom: 10px" href="logout.php">Logout</a>
					</div>
				</div> <!-- col -->
				<div class="col-sm-9">
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show <?=$status?>" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
						<nav class="navbar navbar-expand-sm" style="background-color: #f4f4f4;height: 35px;border-right: 1px solid #4c6fbd;">
								  <ul class="navbar-nav ml-auto">
								    <li class="nav-item">
								      <a class="nav-link"><b>Referral Bouns:</b>&nbsp;$: <?=$fetchUser['user_balance']?></a>
								    </li>
								    <li class="nav-item">
								      <span class="nav-link" style="color:#77a240">[Widthdraw]</span>
								    </li>
								  </ul>
							  </nav><br>
								<div class="container">
									<div class="row">
										<div class="col-sm-4"><legend>My Admission</legend></div><!--col-sm-4-->
									<div class="col-sm-8">
										<button style="margin-right:100px;" class="btn btn-success float-right custom_btn2 custom_btn step1show">Start New</button>
									</div><!--col-sm-8-->
								   </div><!--row-->
							 </div><!--conatiner-->
							 <hr>
							 <div class="container"><legend>University 1</legend></div>
							 <hr>
							<div class="container py-2">
							    <!-- <h2 class="font-weight-light text-center text-muted py-3">Bootstrap 4 Timeline</h2> -->
							    <!-- timeline item 1 -->
							    <div class="row">
							        <!-- timeline item 1 left dot -->
							         <div class="col-auto text-center flex-column d-none d-sm-flex">
							            <div class="row h-25">
							                <div class="col">&nbsp;</div>
							                <div class="col">&nbsp;</div>
							            </div>
							            <h5 class="m-2">
										<small><?=date("m/d/o",strtotime($fetchUser['user_time']))?></small>
										<span class="badge badge-pill <?=$bg_color ?> border">&nbsp;</span>
							            </h5>
							            <div class="row h-75">
							             <div class="col border-right" style="margin-right: -85px;">&nbsp;</div>
							              <div class="col">&nbsp;</div>
							            </div>
							        </div>
							        <!-- timeline item 1 event content -->
							        <div class="col py-2">
							            <div class="">
							                <div class="card-body">
							                    <h5 class="card-title text-muted">
							                    	Create <span style="color:#178404">My Admissure</span> Account 
							                    	 <span class="wrapper">
							                    	 	<button style="
							                    	 	padding: 6px 70px 7px 70px;background-color: #004593;
							                    	 	 color: white;
							                    	 	 border-radius:0px;
							                    	 	 " class="btn btn-info" type="submit">Done</button>
							                    	 </span>
													<style>
													.wrapper:before{
													  content:" ";
													  width: 80px;
													  height: 2px; 
													 /* margin: 0 10px;*/
													  vertical-align: super;
													  background-color:grey;
													  display:inline-block;
												      }
													</style>
							                    </h5><!--h6-->
							                    <p class="card-text">Sign up to become as prospective student seeking our specialist student services.</p>
							                </div>
							            </div>
							        </div>
							    </div>
							    <!--/row-->
							    <!-- timeline item 2 -->
							    <div class="row">
							         <div class="col-auto text-center flex-column d-none d-sm-flex">
							             <div class="row h-0">
							               <div class="col border-right" style="margin-right:-85px;">&nbsp;</div>
							                <div class="col">&nbsp;</div>
							            </div>
							           <h5 class="m-2">
							               <small><?=date("m/d/o",strtotime($fetchUser['user_time']))?></small> <span class="badge badge-pill <?=$bg_color1 ?> border">&nbsp;</span>
							            </h5>
							            <div class="row h-100">
							            <!-- <p style="margin-top: 174px;">13/23/2020</p> -->
							            <br><br><br><br><br><br><br>
							            <?=date("m/d/o",strtotime($fetchUser['user_time']))?>
							            <br><br><br><br><br><br>
							            <?=date("m/d/o",strtotime($fetchUser['user_time']))?>
							            <br><br><br><br><br><br><br><br>
							            <?=date("m/d/o",strtotime($fetchUser['user_time']))?>
							            <div class="col border-right" style="margin-right: -4px;">&nbsp;</div><div class="col">&nbsp;</div>
							            </div>
							        </div>
							        <div class="col py-2">
							            <div class="step2menu">
							                <div class="card-body">
							                   <!--  <div class="float-right"><?=date("l, M jS Y h:m A",strtotime($fetchUser['user_time']))?></div> -->
							                   	<style>
													.second:before{
													  content:" ";
													  width: 50px;
													  height: 2px; 
													 /* margin: 0 10px;*/
													  vertical-align: super;
													  background-color:grey;
													  display:inline-block;
												      }
													</style>
							                    <h5 class="card-title">Select a <span class="customText">University</span> to Start Application
							                    	<span class="second">
							                    	 	<button style="
							                    	 	padding:7px 45px 8px 45px;background-color: #004593;
							                    	 	 color: white;
							                    	 	 border-radius: 0px;
							                    	 	 " class="btn btn-info" type="submit">Done</button>
							                    	 </span>
							                    </h5>
							                    <p class="card-text">
							                    	<div class="row justify-content-start">
							                    		<div class="col-sm-6">
									                    	<select name="" id="user_uni" class="form-control" required="required">
									                    		<option value="">~~SELECT University~~</option>
									                    		<?php
									                    		$q = get($dbc,"universities WHERE uni_sts != 0");
									                    		while ($r = mysqli_fetch_assoc($q)):?>
									                    		<option <?php if(@$fetchUsersts['user_data_uni'] == $r['uni_id']) {
										                    		echo "selected";
										                    		} ?> 
									                    			value="<?=$r['uni_id']?>"><?=$r['uni_name']?></option>
									                    		<?php endwhile ?>
									                    	</select>
							                    		</div> <!-- inner col -->
							                    	</div><!-- inner row -->
							                    	<div class="row">
							                    		<div class="col-sm-2">
							                    			<label class="custom_checkbox">
																<input type="checkbox" id="checkbox1">
																<span class="checkmark"></span>
															</label>
							                    		</div>
							                   		<div class="col-sm-8">
							                    			<br>
							                    			<img id="uniLogo" src="../images/logo-default-216x47.png" alt="" width="200">
							                    		</div><!-- col -->
							                    	</div><!-- row -->
							                    	 <br><br>
							                    	<div class="row">
							                    		<div class="col-sm-12">
							                    			<span class="customText">Step 1:</span>
										                    <div class="float-right"><?=date("l, M jS Y h:m A",strtotime($fetchUser['user_time']))?></div>
							                    			<p>Download the Blank Application Form <br><a href="" class="custom_link">northumbria_form.pdf</a></p>
							                    			<a href="../index.html" disabled download class="btn btn-dark custom_btn disabled downloadButton">Download Now</a>
							                    		</div><!-- col -->
							                    	</div><!-- row -->
							                    	<br>
							                    	<div class="row">
							                    		<div class="col-sm-12">
							                    			<span class="customText">Step 2:</span>
										                    <div class="float-right"><?=date("l, M jS Y h:m A",strtotime($fetchUser['user_time']))?></div>
							                    			<p>Upload your Complete Application Form <br><a id="step1output" class="custom_link">
							                    				<?=fetchRecord($dbc, "user_data", "user_id", $fetchUser['user_id'])['user_data_step1'] ?>
							                    			</a></p>
							                    			<button class="btn btn-dark custom_btn2 custom_btn step1show">Upload</button>
							                    			<form method='POST' enctype="multipart/form-data" id="formData1">
								                    			<input type="file" class="step1" id="step1" name="step1" hidden="">
								                    			<input type="text" value="<?=$fetchUser['user_id']?>" hidden class="step1" name="user_id" id="user_id">
							                    			</form>
							                    			<br><br>
															<div class="progress complete">
															  <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">100%</div>
															</div>
															<div class="progress" id="progress">
															  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
															</div>
															<label class="customText complete">File Uploaded Successfully</label>				
														</div><!-- col -->
							                    	</div><!-- row -->
							                    	<br>
							                    	<div class="row">
							                    		<div class="col-sm-12">
							                    			<span class="customText">Step 3:</span>
										                    <div class="float-right"><?=date("l, M jS Y h:m A",strtotime($fetchUser['user_time']))?></div>
							                    			<p>Upload your Personal Statement <br><a id="step2output" class="custom_link">
							                    				<?=fetchRecord($dbc, "user_data", "user_id", $fetchUser['user_id'])['user_data_step2'] ?>
							                    			</a></p>
							                    			<button class="btn btn-dark custom_btn2 custom_btn step2show">Upload</button>
							                    			<form method='POST' enctype="multipart/form-data" id="formData2">
								                    			<input type="file" class="step2" id="step2" name="step2" hidden="">
								                    			<input type="text" value="<?=$fetchUser['user_id']?>" hidden class="step2" name="user_id2" id="user_id2">
							                    			</form>
							                    			<br><br>
															<div class="progress complete2">
															  <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">100%</div>
															</div>
															<div class="progress" id="progress2">
															  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
															</div>
															<label class="customText complete2">File Uploaded Successfully</label>
							                    		</div><!-- col -->
							                    	</div><!-- row -->
							                    	<br>
							                    	<div class="row">
							                    		<div class="col-sm-12">
							                    			<!-- <span class="customText">Step 2:</span> -->
							                    			<p>Proof of English Proficiency <br><a id="step3output" class="custom_link">
							                    				<?=fetchRecord($dbc, "user_data", "user_id", $fetchUser['user_id'])['user_data_step3'] ?>
							                    			</a></p>
							                    			<button class="btn btn-dark custom_btn2 custom_btn step3show">Upload</button>
							                    			<form method='POST' enctype="multipart/form-data" id="formData3">
								                    			<input type="file" class="step3" id="step3" name="step3" hidden="">
								                    			<input type="text" value="<?=$fetchUser['user_id']?>" hidden class="step3" name="user_id3" id="user_id3">
							                    			</form>
							                    			<br><br>
															<div class="progress complete3">
															  <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">100%</div>
															</div>
															<div class="progress" id="progress3">
															  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
															</div>
															<label class="customText complete3">File Uploaded Successfully</label>
							                    		</div><!-- col -->
							                    	</div><!-- row -->
							                    	<br><br>
							                    	<div class="row">
							                    		<div class="col-sm-12">
							                    			<p class="custom_link">To get Admissure Review Team ti check your application for <br>error click the button below</p>
							                    			<button class="btn btn-danger custom_btn2 <?=$btn_sts1?> custom_btn reviewBtn" id="<?=$fetchUser['user_id']?>">Review</button>
							                    		</div><!-- col -->
							                    	</div><!-- row -->
							                    	<div class="row">
							                    		<div class="col-sm-12">
							                    			<label class="custom_checkbox">
																<input type="checkbox" value="skip_review" id="checkbox2" <?=$btn_sts2?>>
																<span class="checkmark"></span> <span class="customText2">Skip the review, just submit to the University.</span>
															</label>
							                    		</div>
							                    	</div>
							                    </p>
							                </div>
							            </div>
							        </div>
							    </div>
							    <!--/row-->
							    <!-- timeline item 3 -->
							    <div class="row">
							        <div class="col-auto text-center flex-column d-none d-sm-flex">
							            <div class="row h-25">
							            <div class="col border-right" style="margin-right: -85px;">&nbsp;</div>
							                <div class="col">&nbsp;</div>
							            </div>
							            <h5 class="m-2">
							                <small><?=date("m/d/o",strtotime($fetchUser['user_time']))?></small> <span class="badge badge-pill <?=$bg_color3?> border">&nbsp;</span>
							            </h5>
							            <div class="row h-75">
							                <div class="col border-right" style="margin-right: -85px;">&nbsp;</div>
							                <div class="col">&nbsp;</div>
							            </div>
							        </div>
							        <div class="col py-2">
							            <div class="">
							                <div class="card-body">
							                    <!-- <div class="float-right text-muted"><?=date("l, M jS Y h:m A",strtotime($fetchUser['user_time']))?></div> -->
							                    <style>
							                    	.third:before{
													  content:" ";
													  width: 80px;
													  height: 2px; 
													 /* margin: 0 10px;*/
													  vertical-align: super;
													  background-color:grey;
													  display:inline-block;
												      }
							                    </style>
							                    <h5 class="card-title">Admissure Review Team - Review!
							                    <span class="third">
							                    	 	<button style="
							                    	 	padding:7px 45px 8px 45px;background-color: #004593;
							                    	 	 color: white;
							                    	 	 border-radius: 0px;
							                    	 	 " class="btn btn-info" type="submit">Done</button>
							                     </span>
							                    </h5>
							                    <p>We have completed your application review for accurancies and error, please check "My Message" to review our comment  and recommendation</p>
							                </div>
							            </div>
							        </div>
							    </div>
							    <!--/row-->

							    <!--/row-->
							    <!-- timeline item 3 -->
							    <div class="row">
							        <div class="col-auto text-center flex-column d-none d-sm-flex">
							            <div class="row h-25">
							                <div class="col border-right" style="margin-right: -85px;">&nbsp;</div>
							                <div class="col">&nbsp;</div>
							            </div>
							            <h5 class="m-2">
							               <small><?=date("m/d/o",strtotime($fetchUser['user_time']))?></small> <span class="badge badge-pill <?=$bg_color4?> border">&nbsp;</span>
							            </h5>
							            <div class="row h-75">
							               <div class="col border-right" style="margin-right: -85px;">&nbsp;</div>
							                <div class="col">&nbsp;</div>
							            </div>
							        </div>
							        <div class="col py-2">
							            <div class="">
							                <div class="card-body">
							                    <!-- <div class="float-right text-muted"><?=date("l, M jS Y h:m A",strtotime($fetchUser['user_time']))?></div> -->
							                    <style>
							                    	.lastone:before{
													  content:" ";
													  width: 130px;
													  height: 2px; 
													 /* margin: 0 10px;*/
													  vertical-align: super;
													  background-color:grey;
													  display:inline-block;
												      }
							                    </style>
							                    <h5 class="card-title">Application Submission
							                    <span class="lastone">
							                    	 	<button style="
							                    	 	padding: 6px 70px 7px 70px;background-color: #004593;
							                    	 	 color: white;
							                    	 	 border-radius:0px;
							                    	 	 " class="btn btn-info" type="submit">Done</button>
							                   </span>
							                    </h5>
							                    <button class="btn btn-danger custom_btn custom_btn2 <?=$btn_sts?> submitBtn" id="<?=$fetchUser['user_id']?>">Submit</button>
							                </div>
							            </div>
							        </div>
							    </div>
							    <!--/row-->
							    <!-- timeline item 4 -->
							    <div class="row">
							        <div class="col-auto text-center flex-column d-none d-sm-flex">
							            <div class="row h-25">
							            <div class="col border-right" style="margin-right:-85px;">&nbsp;</div>
							            <div class="col">&nbsp;</div>
							            </div>
							            <h5 class="m-2">
							               <small><?=date("m/d/o",strtotime($fetchUser['user_time']))?></small> <span class="badge badge-pill <?=$bg_color3?> border">&nbsp;</span>
							            </h5>
							            <div class="row h-75">
							                <div class="col">&nbsp;</div>
							                <div class="col">&nbsp;</div>
							            </div>
							        </div>
							        <div class="col py-2">
							            <div class="">
							                <div class="card-body">
							                    <!-- <div class="float-right text-muted"><?=date("l, M jS Y h:m A",strtotime($fetchUser['user_time']))?></div> -->
							                    <style>
							                    	.last:before{
													  content:" ";
													  width: 200px;
													  height: 2px; 
													 /* margin: 0 10px;*/
													  vertical-align: super;
													  background-color:grey;
													  display:inline-block;
												      }
							                    </style>
							                    <h5 class="card-title">Admission Offer
							                    <span class="last">
							                    	 	<button style="
							                    	 	padding: 6px 70px 7px 70px;background-color: #004593;
							                    	 	 color: white;
							                    	 	 border-radius:0px;
							                    	 	 " class="btn btn-info" type="submit">Done</button>
							                   </span>
							                    </h5>
							                    <a href="../files/<?=$fetchUsersts['user_data_offer']?>" download >Offer Letter</a>
							                </div>
							            </div>
							        </div>
							    </div>
							    <!--/row-->
							</div>
							<!--container-->
						</div><!-- profile -->
						<!-- <nav class="navbar navbar-expand-sm" style="background-color: #f4f4f4;height: 35px;border-right: 1px solid #4c6fbd;">
						  <ul class="navbar-nav ml-auto">
						    <li class="nav-item">
						      <a class="nav-link"><b>Referral Bouns:</b>&nbsp;$100.00</a>
						    </li>
						    <li class="nav-item">
						      <span class="nav-link" style="color:#77a240">[Widthdraw]</span>
						    </li>
						  </ul>
					  </nav> -->
					  <div class="tab-pane fade show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
					  	<legend>My Profile</legend>
					  	<hr>
					  	<div class="row">
					  		<div class="col-sm-3">
					  			<label for="">FIRST NAME</label><br><br>
					  			<label for="">SURNAME</label><br><br>
					  			<label for="">EMAIL</label><br><br>
					  			<label for="">PASSWORD</label><br><br>
					  			<label for="">COUNTRY</label><br><br>
					  			<label for="">STATE</label><br><br>
					  			<label for="">ADDRESS</label><br><br>
					  			<label for="">PHONE</label><br><br>
					  		</div><!-- col -->
					  		<div class="col-sm-3">
					  			<label id="user_name"><?=((empty($fetchUser['user_name']))?"None":$fetchUser['user_name']);?></label><br><br>
					  			<label id="user_surname"><?=((empty($fetchUser['user_surname']))?"None":$fetchUser['user_surname']);?></label><br><br>
					  			<label id="user_email"><?=((empty($fetchUser['user_email']))?"None":$fetchUser['user_email']);?></label><br><br>
					  			<label id="user_password"><?=((empty($fetchUser['user_password']))?"None":$fetchUser['user_password']);?></label><br><br>
					  			<label id="user_country"><?=((empty($fetchUser['user_country']))?"None":$fetchUser['user_country']);?></label><br><br>
					  			<label id="user_state"><?=((empty($fetchUser['user_state']))?"None":$fetchUser['user_state']);?></label><br><br>
					  			<label id="user_address"><?=((empty($fetchUser['user_address']))?"None":$fetchUser['user_address']);?></label><br><br>
					  			<label id="user_phone"><?=((empty($fetchUser['user_phone']))?"None":$fetchUser['user_phone']);?></label><br><br>
					  		</div><!-- col -->
					  		<div class="col-sm-2">
					  			<label class="text-danger editData" data-type="user_name" id="<?=$fetchUser['user_name'];?>"><img src="../../edit.png" alt="" width="22px"><small>[Edit]</small></label>
					  			<br><br>
					  			<label class="text-danger editData" data-type="user_surname" id="<?=$fetchUser['user_surname'];?>"><img src="../../edit.png" alt="" width="22px"><small>[Edit]</small></label><br><br>
					  			<label class="text-danger editData" data-type="user_email" id="<?=$fetchUser['user_email'];?>" ><img src="../../edit.png" alt="" width="22px"><small>[Edit]</small></label><br><br>
					  			<label class="text-danger editData" data-type="user_password" id="<?=$fetchUser['user_password'];?>" ><img src="../../edit.png" alt="" width="22px"><small>[Edit]</small></label><br><br>
					  			<label class="text-danger editData" data-type="user_country" id="<?=$fetchUser['user_country'];?>" ><img src="../../edit.png" alt="" width="22px"><small>[Edit]</small></label><br><br>
					  			<label class="text-danger editData" data-type="user_state" id="<?=$fetchUser['user_state'];?>" ><img src="../../edit.png" alt="" width="22px"><small>[Edit]</small></label><br><br>
					  			<label class="text-danger editData" data-type="user_address" id="<?=$fetchUser['user_address'];?>" ><img src="../../edit.png" alt="" width="22px"><small>[Edit]</small></label><br><br>
					  			<label class="text-danger editData" data-type="user_phone" id="<?=$fetchUser['user_phone'];?>" ><img src="../../edit.png" alt="" width="22px"><small>[Edit]</small></label><br><br>
					  		</div><!-- col -->
					  		<div class="col-sm-4">
					  			<input type='file' name="uploadPic" id="uploadPic" onchange="readURL(this);" style="display: none;">
					            <img id="blah" class="img-thumbnail blah" src="../files/<?=$fetchUser['user_pic']?>" alt="Invalid Image Type Click To Change">
					  		</div>
					  	</div><!-- row -->
					  	<legend>Emergency Contact</legend>
					  	<hr>
					  	<div class="row">
					  		<div class="col-sm-3">
					  			<label for="">NEXT OF KIN</label><br><br>
					  			<label for="">NEXT OF KIN TELEPHONE</label><br><br>
					  		</div><!-- col -->
					  		<div class="col-sm-3">
					  			<label id="kin_name"><?=((empty($fetchUser['kin_name']))?"None":$fetchUser['kin_name']);?></label><br><br>
					  			<label id="kin_phone"><?=((empty($fetchUser['kin_phone']))?"None":$fetchUser['kin_phone']);?></label><br><br>
					  		</div><!-- col -->
					  		<div class="col-sm-3">
					  			<span class="text-danger editData" data-type="kin_name" id="<?=$fetchUser['kin_name'];?>"><img src="../../edit.png" alt="" width="22px"><small>[Edit]</small></span><br><br>
					  			<span class="text-danger editData" data-type="kin_phone" id="<?=$fetchUser['kin_phone'];?>"><img src="../../edit.png" alt="" width="22px"><small>[Edit]</small></span><br><br>
					  		</div><!-- col -->
					  	</div><!-- row -->
					  	<legend>Refferral Bonus <?php if ($fetchUser['user_sts'] == '0'): ?>
					  				<?php 
					  					$title = 'Account is Not Verified';
					  				?>
					  				<span title="Not Verified" class="material-icons text-danger">error</span>
					  			<?php else: ?>
					  				<span title="Verified" class="material-icons text-success">check_circle</span>
					  			<?php endif ?></legend>
					  	<hr>	
					  	<div class="row">
					  		<div class="col-sm-3">
					  			<label for="">ACCOUNT</label><br><br>
					  			<label for="">SORT Code</label><br><br>
					  		</div><!-- col -->
					  		<div class="col-sm-3">
					  			<label id="user_account"><?=((empty($fetchUser['user_account']))?"None":$fetchUser['user_account']);?></label><br><br>
					  			<label id="user_code"><?=((empty($fetchUser['user_code']))?"None":$fetchUser['user_code']);?></label><br><br>
					  		</div><!-- col -->
					  		<div class="col-sm-3">
					  			<span class="text-danger editData" data-type="user_account" id="<?=$fetchUser['user_account'];?>"><img src="../../edit.png" alt="" width="22px"><small>[Edit]</small></span><br><br>
					  			<span class="text-danger editData" data-type="user_code" id="<?=$fetchUser['user_code'];?>"><img src="../../edit.png" alt="" width="22px"><small>[Edit]</small></span><br><br>
					  		</div><!-- col -->
					  	</div><!-- row -->					  	
					  	<!-- CODE Comments  here paste -->
					  	<!-- <a class="btn btn-primary" data-toggle="modal" href='#dataEdit'>Trigger modal</a> -->
					  	<div class="modal fade" id="dataEdit">
					  		<div class="modal-dialog">
					  			<div class="modal-content">
					  				<div class="modal-header">
					  					<h4 class="modal-title">Edit Data</h4>
					  					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					  				</div>
					  				<div class="modal-body">
					  					<form action="" method="POST" role="form">
					  						<div class="form-group">
					  							<input type="text" class="form-control" id="edit_data">
					  							<input type="text" class="form-control d-none" id="edit_data_field">
					  						</div>
					  				</div>
					  				<div class="modal-footer">
					  					<button type="button" class="btn btn-primary editForm">Save changes</button>
					  					</form>
					  					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					  				</div>
					  			</div>
					  		</div>
					  	</div>
					  </div><!-- admission -->
					  
					  <div class="tab-pane fade show" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
					  	<div class="container py-2">
						    <h2 class="text-center text-dark py-3">My Message</h2>
							<input type="text" value="<?=$fetchUser['user_id']?>" id='user_id23' hidden>
						    <?php include 'chatbox.php'; ?>
						</div>
						<!--container-->

					  </div><!-- message -->
					  
					  <div class="tab-pane fade show" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
					  	<legend>My Testimonals</legend>
					  	<hr>
					  	<form action="" method="POST" role="form">
					  		<div class="form-group">
					  			<div class="row">
					  				<div class="col-sm-3">
							  			<label for="">New Testimonals</label>
					  				</div>
					  				<div class="col-sm-6">
							  			<input type="text" class="form-control" id="testimonalText" style="border-radius: 0px">
							  			<input type="text" class="form-control d-none" id="testimonalTextid" style="border-radius: 0px">
					  				</div>
					  				<div class="col-sm-3">
								  		<button class="btn btn-primary" id="testimonals" style="border-radius: 0px">Add</button>
					  				</div>
					  			</div>
					  		</div>
					  	</form>
					  	<br>
					  	<p>Previous Testimonals</p>
					  	<hr>
					  	<span class="previosTest"></span>
					  </div><!-- testimonals -->
					  
					  <div class="tab-pane fade show" id="v-pills-friend" role="tabpanel" aria-labelledby="v-pills-friend-tab">
					  	<h3>Widrawal detail</h3>
					  	<div class="row">
					  		<div class="col-sm-8">
					  			<div class="row">
					  				<div class="col-sm-3">ACCOUNT</div>
					  				<div class="col-sm-3">7854</div>
					  				<div class="col-sm-3">SORT CODE</div>
					  				<div class="col-sm-3">12-45-547</div>
					  			</div><!-- inner -->
					  		</div><!-- col -->
					  		<div class="col-sm-2">
					  			<?php if ($fetchUser['user_sts'] == '0'): ?>
					  				<?php 
					  					$stsbtn = 'disabled'; 
					  					$title = 'Account is Not Verified';
					  				?>
					  				<span title="Not Verified" class="material-icons text-danger">error</span>
					  			<?php else: ?>
					  				<?php $stsbtn = ''; ?>
					  				<span title="Verified" class="material-icons text-success">check_circle</span>
					  			<?php endif ?>
					  		</div>
					  	</div><!-- row -->
					  	<div class="row">
					  		<div class="col-sm-12">
					  			<span class="text-danger">You Withdrawal Account must be in your name and must be verified.</span>
					  		</div><!-- col -->
					  	</div><!-- row -->
					  	<br>
					  	<div class="row">
					  		<div class="col-sm-3">
					  			<div class="input-group">
					  				<span class="input-group-btn">
					  					<button class="btn btn-secondary" style="border-radius: 0px;" type="button">$</button>
					  				</span>
					  				<input style="border-radius: 0px;" type="number" id="withdrawAmount" class="form-control">
					  			</div>
					  		</div>
					  		<div class="col-sm-3">
					  			<button style="border-radius: 0px;" title="<?=$title?>" type="button" id="withdrawBtn" class="btn btn-primary <?=$stsbtn?>">Withdraw</button>
					  		</div>
					  	</div>
					  	<br>
					  	<div class="row">
					  		<div class="col-sm-12">
					  			<div id="accordion">
									<div class="card">
										<div class="card-header">
									    	<a class="card-link" data-toggle="collapse" href="#collapseOne">
									      		Withdrawal History <span class="material-icons text-success">add_circle</span>
									    	</a>
									  	</div>
										<div id="collapseOne" class="collapse" data-parent="#accordion">
											<div class="card-body">
										      <table class="table table-inverse">
										       	<thead>
										       		<tr>
										       			<th>Date</th>
										       			<th>Amount</th>
										       			<th>Status</th>
										       		</tr>
										       	</thead>
										       	<tbody>
												    <?php 
												    $q = mysqli_query($dbc,"SELECT * FROM withdrawals WHERE user_id = ".$fetchUser['user_id']."");
												    while ($r = mysqli_fetch_assoc($q)):?>
										       		<tr>
										       			<td><?=date('m/d/Y',strtotime($r['withdraw_time']));?></td>
										       			<td><?=$r['withdraw_amount'];?></td>
										       			<td>
										       				<?php 
										       				if ($r['withdraw_sts'] == '0') {	
										       					echo '<span class="btn btn-info btn-sm">Pending</span>';
										       				}elseif ($r['withdraw_sts'] == '1') {
										       					echo '<span class="btn btn-warning btn-sm">Cancelled</span>';
										       				}
										       				else{
										       					echo '<span class="btn btn-primary btn-sm">Cleared</span>';
										       				}
										       			?></td>
										       		</tr>
												    <?php
														endwhile
												    ?>
										       	</tbody>
										       </table> 
										    </div>
										</div>
									</div>
								</div>
					  		</div>
					  	</div> <!-- row -->
					  	<br>
					  	<div class="row">
					  		<div class="col-sm-4">
					  			<div class="form-group">
					  				<label for="">Refferal Link</label>	
					  				<?php if ($fetchUser['user_sts'] == '1'): ?>
						  				<input style="border-radius: 0px;" type="text" class="form-control" value="<?=$_SERVER['SERVER_NAME'];?><?=$_SERVER['REQUEST_URI'];?>signup.php?referral=<?=base64_encode($fetchUser['user_id'])?>">
					  				<?php else: ?>
						  				<input style="border-radius: 0px;" type="text" class="form-control" value="You Are Not Verified User">
					  				<?php endif ?>

					  			</div>
					  		</div>
					  		<div class="col-sm-2">
					  			<br>
					  			<div class="btn-group btn-group-sm" style="margin-top: 10px" role="group" aria-label="Basic example">
					  				<iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Flocalhost%2Fupwork%2FAdmissure%2520Design%2Fweb%2Fmodule%2Findex.php&layout=button&size=small&width=67&height=20&appId" width="67" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
					  			</div>
					  		</div>
					  	</div><!-- row -->
					  	<div class="row">
					  		<div class="col-sm-8">
					  			<label>Share via Email</label>
					  			<input type="email" class="form-control" id="emails" placeholder="abc@abc.com">
					  			<br>
					  			<textarea id="message" class="form-control" rows="10" required="required"></textarea>
					  			<br>
					  			<button type="button" class="btn btn-primary" id="sendEmail">Send</button>
					  		</div>
					  	</div>
					  	<br>
					  	<br>
					  	<br>
					  </div><!-- friend -->
					  
					  <div class="tab-pane fade" id="v-pills-logout" role="tabpanel" aria-labelledby="v-pills-logout-tab"></div><!-- logout -->

					</div><!-- tabs body -->
				</div><!-- col -->
			</div><!-- row -->
		</div><!-- container -->
		<?php include '../links/footer.php'; ?>
	</body>
</html>
<?php endif; ?>
