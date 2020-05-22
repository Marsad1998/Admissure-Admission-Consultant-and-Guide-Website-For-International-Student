<?php include '../connect/db.php'; ?>
<?php include '../inc/code.php'; ?>
<?php if (!isset($_SESSION['admin_login'])): redirect("login.php")?>
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
			  border: 2px solid #dedede;
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

/* line 27, bootstrap-select.scss */
select.bs-select-hidden,
select.selectpicker {
  display: none !important;
}

/* line 32, bootstrap-select.scss */
.bootstrap-select {
  width: 220px \0;
  /*IE9 and below*/
}
/* line 37, bootstrap-select.scss */
.bootstrap-select.btn-group > .dropdown-toggle {
  height: 100%;
}
/* line 43, bootstrap-select.scss */
.bootstrap-select > .dropdown-toggle {
  width: 100%;
  padding-right: 25px;
  z-index: 1;
}
/* line 48, bootstrap-select.scss */
.bootstrap-select > .dropdown-toggle.bs-placeholder, .bootstrap-select > .dropdown-toggle.bs-placeholder:hover, .bootstrap-select > .dropdown-toggle.bs-placeholder:focus, .bootstrap-select > .dropdown-toggle.bs-placeholder:active {
  color: #999;
}
/* line 56, bootstrap-select.scss */
.bootstrap-select > select {
  position: absolute !important;
  bottom: 0;
  left: 50%;
  display: block !important;
  width: 0.5px !important;
  height: 100% !important;
  padding: 0 !important;
  opacity: 0 !important;
  border: none;
}
/* line 67, bootstrap-select.scss */
.bootstrap-select > select.mobile-device {
  top: 0;
  left: 0;
  display: block !important;
  width: 100% !important;
  z-index: 2;
}
/* line 77, bootstrap-select.scss */
.has-error .bootstrap-select .dropdown-toggle, .error .bootstrap-select .dropdown-toggle {
  border-color: #b94a48;
}
/* line 82, bootstrap-select.scss */
.bootstrap-select.fit-width {
  width: auto !important;
}
/* line 86, bootstrap-select.scss */
.bootstrap-select:not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn) {
  width: 220px;
}
/* line 90, bootstrap-select.scss */
.bootstrap-select .dropdown-toggle:focus {
  outline: thin dotted #333333 !important;
  outline: 5px auto -webkit-focus-ring-color !important;
  outline-offset: -2px;
}

/* line 97, bootstrap-select.scss */
.bootstrap-select.form-control {
  margin-bottom: 0;
  padding: 0;
  border: none;
}
/* line 102, bootstrap-select.scss */
.bootstrap-select.form-control:not([class*="col-"]) {
  width: 100%;
}
/* line 106, bootstrap-select.scss */
.bootstrap-select.form-control.input-group-btn {
  z-index: auto;
}
/* line 110, bootstrap-select.scss */
.bootstrap-select.form-control.input-group-btn:not(:first-child):not(:last-child) > .btn {
  border-radius: 0;
}

/* line 119, bootstrap-select.scss */
.bootstrap-select.btn-group:not(.input-group-btn), .bootstrap-select.btn-group[class*="col-"] {
  float: none;
  display: inline-block;
  margin-left: 0;
}
/* line 130, bootstrap-select.scss */
.bootstrap-select.btn-group.dropdown-menu-right, .bootstrap-select.btn-group[class*="col-"].dropdown-menu-right, .row .bootstrap-select.btn-group[class*="col-"].dropdown-menu-right {
  float: right;
}
/* line 135, bootstrap-select.scss */
.form-inline .bootstrap-select.btn-group, .form-horizontal .bootstrap-select.btn-group, .form-group .bootstrap-select.btn-group {
  margin-bottom: 0;
}
/* line 141, bootstrap-select.scss */
.form-group-lg .bootstrap-select.btn-group.form-control, .form-group-sm .bootstrap-select.btn-group.form-control {
  padding: 0;
}
/* line 145, bootstrap-select.scss */
.form-group-lg .bootstrap-select.btn-group.form-control .dropdown-toggle, .form-group-sm .bootstrap-select.btn-group.form-control .dropdown-toggle {
  height: 100%;
  font-size: inherit;
  line-height: inherit;
  border-radius: inherit;
}
/* line 155, bootstrap-select.scss */
.form-inline .bootstrap-select.btn-group .form-control {
  width: 100%;
}
/* line 159, bootstrap-select.scss */
.bootstrap-select.btn-group.disabled,
.bootstrap-select.btn-group > .disabled {
  cursor: not-allowed;
}
/* line 163, bootstrap-select.scss */
.bootstrap-select.btn-group.disabled:focus,
.bootstrap-select.btn-group > .disabled:focus {
  outline: none !important;
}
/* line 168, bootstrap-select.scss */
.bootstrap-select.btn-group.bs-container {
  position: absolute;
  height: 0 !important;
  padding: 0 !important;
}
/* line 173, bootstrap-select.scss */
.bootstrap-select.btn-group.bs-container .dropdown-menu {
  z-index: 1060;
}
/* line 180, bootstrap-select.scss */
.bootstrap-select.btn-group .dropdown-toggle .filter-option {
  display: inline-block;
  overflow: hidden;
  width: 100%;
  text-align: left;
}
/* line 187, bootstrap-select.scss */
.bootstrap-select.btn-group .dropdown-toggle .caret {
  position: absolute;
  top: 50%;
  right: 12px;
  margin-top: -2px;
  vertical-align: middle;
}
/* line 196, bootstrap-select.scss */
.bootstrap-select.btn-group[class*="col-"] .dropdown-toggle {
  width: 100%;
}
/* line 201, bootstrap-select.scss */
.bootstrap-select.btn-group .dropdown-menu {
  min-width: 100%;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
/* line 205, bootstrap-select.scss */
.bootstrap-select.btn-group .dropdown-menu.inner {
  display: block;
  position: static;
  float: none;
  border: 0;
  padding: 0;
  margin: 0;
  border-radius: 0;
  box-shadow: none;
}
/* line 216, bootstrap-select.scss */
.bootstrap-select.btn-group .dropdown-menu a.dropdown-item {
  position: relative;
  cursor: pointer;
  user-select: none;
}
/* line 221, bootstrap-select.scss */
.bootstrap-select.btn-group .dropdown-menu a.dropdown-item.active small {
  color: #fff;
}
/* line 225, bootstrap-select.scss */
.bootstrap-select.btn-group .dropdown-menu a.dropdown-item.disabled a {
  cursor: not-allowed;
}
/* line 229, bootstrap-select.scss */
.bootstrap-select.btn-group .dropdown-menu a.dropdown-item.hidden {
  display: none;
}
/* line 233, bootstrap-select.scss */
.bootstrap-select.btn-group .dropdown-menu a.dropdown-item span.dropdown-item-inner {
  display: block;
}
/* line 236, bootstrap-select.scss */
.bootstrap-select.btn-group .dropdown-menu a.dropdown-item span.dropdown-item-inner.opt {
  position: relative;
  padding-left: 2.25em;
}
/* line 241, bootstrap-select.scss */
.bootstrap-select.btn-group .dropdown-menu a.dropdown-item span.dropdown-item-inner span.check-mark {
  display: none;
}
/* line 245, bootstrap-select.scss */
.bootstrap-select.btn-group .dropdown-menu a.dropdown-item span.dropdown-item-inner span.text {
  display: inline-block;
}
/* line 250, bootstrap-select.scss */
.bootstrap-select.btn-group .dropdown-menu a.dropdown-item small {
  padding-left: 0.5em;
}
/* line 257, bootstrap-select.scss */
.bootstrap-select.btn-group .dropdown-menu .dropdown-item .span.check-mark {
  display: none;
}
/* line 261, bootstrap-select.scss */
.bootstrap-select.btn-group .dropdown-menu .dropdown-item .span.text {
  display: inline-block;
}
/* line 266, bootstrap-select.scss */
.bootstrap-select.btn-group .dropdown-menu .notify {
  position: absolute;
  bottom: 5px;
  width: 96%;
  margin: 0 2%;
  min-height: 26px;
  padding: 3px 5px;
  background: whitesmoke;
  border: 1px solid #e3e3e3;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
  pointer-events: none;
  opacity: 0.9;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
/* line 282, bootstrap-select.scss */
.bootstrap-select.btn-group .no-results {
  padding: 3px;
  background: #f5f5f5;
  margin: 0 5px;
  white-space: nowrap;
}
/* line 290, bootstrap-select.scss */
.bootstrap-select.btn-group.fit-width .dropdown-toggle .filter-option {
  position: static;
}
/* line 294, bootstrap-select.scss */
.bootstrap-select.btn-group.fit-width .dropdown-toggle .caret {
  position: static;
  top: auto;
  margin-top: -1px;
}
/* line 302, bootstrap-select.scss */
.bootstrap-select.btn-group.show-tick .dropdown-menu a.selected span.dropdown-item-inner span.check-mark {
  position: absolute;
  display: inline-block;
  right: 15px;
  margin-top: 5px;
}
/* line 309, bootstrap-select.scss */
.bootstrap-select.btn-group.show-tick .dropdown-menu a a span.text {
  margin-right: 34px;
}

/* line 316, bootstrap-select.scss */
.bootstrap-select.show-menu-arrow.open > .dropdown-toggle {
  z-index: 1061;
}
/* line 321, bootstrap-select.scss */
.bootstrap-select.show-menu-arrow .dropdown-toggle:before {
  content: '';
  border-left: 7px solid transparent;
  border-right: 7px solid transparent;
  border-bottom: 7px solid rgba(204, 204, 204, 0.2);
  position: absolute;
  bottom: -4px;
  left: 9px;
  display: none;
}
/* line 332, bootstrap-select.scss */
.bootstrap-select.show-menu-arrow .dropdown-toggle:after {
  content: '';
  border-left: 6px solid transparent;
  border-right: 6px solid transparent;
  border-bottom: 6px solid white;
  position: absolute;
  bottom: -4px;
  left: 10px;
  display: none;
}
/* line 345, bootstrap-select.scss */
.bootstrap-select.show-menu-arrow.dropup .dropdown-toggle:before {
  bottom: auto;
  top: -3px;
  border-top: 7px solid rgba(204, 204, 204, 0.2);
  border-bottom: 0;
}
/* line 352, bootstrap-select.scss */
.bootstrap-select.show-menu-arrow.dropup .dropdown-toggle:after {
  bottom: auto;
  top: -3px;
  border-top: 6px solid white;
  border-bottom: 0;
}
/* line 361, bootstrap-select.scss */
.bootstrap-select.show-menu-arrow.pull-right .dropdown-toggle:before {
  right: 12px;
  left: auto;
}
/* line 366, bootstrap-select.scss */
.bootstrap-select.show-menu-arrow.pull-right .dropdown-toggle:after {
  right: 13px;
  left: auto;
}
/* line 373, bootstrap-select.scss */
.bootstrap-select.show-menu-arrow.open > .dropdown-toggle:before, .bootstrap-select.show-menu-arrow.open > .dropdown-toggle:after {
  display: block;
}

/* line 380, bootstrap-select.scss */
.bs-searchbox,
.bs-actionsbox,
.bs-donebutton {
  padding: 4px 8px;
}

/* line 386, bootstrap-select.scss */
.bs-actionsbox {
  width: 100%;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
/* line 390, bootstrap-select.scss */
.bs-actionsbox .btn-group button {
  width: 50%;
}

/* line 395, bootstrap-select.scss */
.bs-donebutton {
  float: left;
  width: 100%;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
/* line 400, bootstrap-select.scss */
.bs-donebutton .btn-group button {
  width: 100%;
}

/* line 406, bootstrap-select.scss */
.bs-searchbox + .bs-actionsbox {
  padding: 0 8px 4px;
}
/* line 410, bootstrap-select.scss */
.bs-searchbox .form-control {
  margin-bottom: 0;
  width: 100%;
  float: none;
}
/* line 417, bootstrap-select.scss */
.input-group .bs-searchbox .form-control {
  width: 100%;
}

/*Tabs*/
.tabs {
  max-width: 1200px;
  margin-top: 20px;
  /*padding: 0 20px;*/
}
.tabs input {
  display: none;
}
.tabs label {
  display: inline-block;
  padding: 6px 0 6px 10px;
  margin: 0 -2px;
  width: 25%; /* =100/tabs number */
  border-bottom: 1px solid #000;
  /*text-align: left;*/
}
.tabs label:hover {
  cursor: pointer;
}
.tabs input + label {
  border: 1px solid #000;
  border-top: 1px solid blue;
  border-width: 2px 1px 0 1px;
}
.tabs #tab1:checked ~ .content #content1,
.tabs #tab2:checked ~ .content #content2,
.tabs #tab3:checked ~ .content #content3,
.tabs #tab4:checked ~ .content #content4 {
  display: block;
}
.tabs .content > div {
  display: none;
  padding-top: 20px;
  text-align: left;
  /*background-color: red;*/
  /*height: 192px;*/
  /*border-bottom: 1px solid;*/
  /*overflow: auto;*/
  margin-bottom: -21px
}
/* Styles for wrapping the search box */

.main {
    width: 50%;
    margin: 50px auto;
}

/* Bootstrap 4 text input with search icon */

.has-search .form-control {
    padding-left: 2.375rem;
}

.has-search .form-control-feedback {
    position: absolute;
    z-index: 2;
    display: block;
    width: 2.375rem;
    height: 2.375rem;
    line-height: 2.375rem;
    text-align: center;
    pointer-events: none;
    color: #aaa;
}

		</style>	
	</head>

	<body>
		<?php include '../links/nav.php'; ?>
		
	<?php 
		if ($fetchAdmin['admin_id'] != ""){
			$border_color = 'border-success';
			$bg_color = 'bg-success';
			$status = 'active';
		}
	?>

		<div class="container">
			<br><br><br><br>
      <!-- <br><br><br> -->
      <nav class="navbar navbar-expand-sm" style="background-color: #74a345;height: 35px;">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link">Welcome, <?=$fetchAdmin['admin_name']?></a>
            </li>
            <li class="nav-item">
              <a style="color: white;" class="nav-link" href="logout.php" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Log Out</a>
            </li>
          </ul>
      </nav><!--nav-->
      <br><br>

			<div class="row">
				<div class="col-sm-2">
					<div class="nav flex-column nav-pills <?=$status?>" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				  		<a class="nav-link custom_nav" style="border-radius: 0px;margin-bottom: 10px" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Admin</a>
						
						<a class="nav-link custom_nav" style="border-radius: 0px;margin-bottom: 10px" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Students</a>
						
						<a class="nav-link custom_nav" style="border-radius: 0px;margin-bottom: 10px" id="v-pills-university-tab" data-toggle="pill" href="#v-pills-university" role="tab" aria-controls="v-pills-university" aria-selected="false">Partner University</a>
						
						<a class="nav-link custom_nav" style="border-radius: 0px;margin-bottom: 10px" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">My Messages</a>
						
						<a class="nav-link custom_nav" style="border-radius: 0px;margin-bottom: 10px" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">My Testimonals</a>
						
						<a class="nav-link custom_nav" style="border-radius: 0px;margin-bottom: 10px" id="v-pills-friend-tab" data-toggle="pill" href="#v-pills-friend" role="tab" aria-controls="v-pills-friend" aria-selected="false">Withdrawal Request</a>
						
						<!-- <a class="nav-link custom_nav" style="border-radius: 0px;margin-bottom: 10px" href="logout.php">Logout</a> -->
					</div>
				</div> <!-- col -->
				<div class="col-sm-10">
					<div class="tab-content" id="v-pills-tabContent">
            <!-- <div class="container-fluid"> -->
            <div class="row">
              
              <div class="col-sm-8 p-1 ml-2" style="height: 36px; background-color: #DCDCDC; border-right: 1px solid blue;">
              </div>
              <div class="col-sm-3"><!-- 
                <input type="text" class="form-control-feedback">
                <span class="material-icons text-primary">search</span> -->

<!-- Actual search box -->
                <div class="form-group has-search">
                  <span class="material-icons form-control-feedback">search</span>
                  <input type="text" class="form-control" placeholder="Search" id="myInput">
                </div>              
              </div>
            </div>
            <!-- </div> -->
					  <div class="tab-pane fade show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
					  	<legend>Admin Setting
					  		<a class="btn btn-success float-right custom_btn2 custom_btn step1show" data-toggle="modal" href='#modal-id'>Add New</a>
					  	<div class="modal fade" id="modal-id">
					  		<div class="modal-dialog">
					  			<div class="modal-content">
					  				<div class="modal-header">
					  					<h4 class="modal-title">Add Admin</h4>
					  					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					  				</div>
					  				<div class="modal-body">
					  					<form action="" method="POST" role="form">
					  						<div class="form-group">
					  							<label for="">Admin Name</label>
					  							<input type="text" class="form-control" style="border-radius: 0px;" id="admin_name">
					  							<input type="text" class="form-control d-none" style="border-radius: 0px;" id="admin_id">
					  						</div>
					  						<div class="form-group">
					  							<label for="">Admin Email</label>
					  							<input type="email" class="form-control" style="border-radius: 0px;" id="admin_email">
					  						</div>
					  						<div class="form-group">
					  							<label for="">Password</label>
					  							<input type="text" class="form-control" style="border-radius: 0px;" id="admin_password">
					  						</div>					  						
					  				</div>
					  				<div class="modal-footer">
					  					<button type="button" class="btn btn-primary" id="addAdmin">Save changes</button>
					  					</form>
					  					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					  				</div>
					  			</div>
					  		</div>
					  	</div></legend>
					  	 <div class="tabs">
						   <input id="tab1" type="radio" name="tabs" checked>
						   <label for="tab1">
					  				<span class="material-icons text-primary">people_alt</span>
						   </label>
						   <div class="content">
						      <div id="content1">
						      </div>
						   </div>
						</div>
					  	<table class="table table-sm table-hover">
					  		<thead class="thead-primary">
					  			<tr>
					  				<td style="border-top: 0px">Sr.</td>
					  				<td style="border-top: 0px">Admin Name</td>
					  				<td>Admin Email</td>
					  				<td>Admin Password</td>
					  				<td>Action</td>
					  			</tr>
					  		</thead>
					  		<tbody id="adminContent">
					  		</tbody>
					  	</table>
					  </div><!-- admission -->


					  <div class="tab-pane fade show <?=$status?>" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
					  	<legend>Students</legend>
					  	<div class="tabs">
						   <input id="tab1" type="radio" name="tabs" checked>
						   <label for="tab1">
  		  				<span class="material-icons text-primary">people_alt</span>
						   </label>
						   <div class="content">
						      <div id="content1">
						      </div>
						   </div>
						</div>
					  	<table class="table table-responsive table-sm">
					  		<thead>
					  			<tr>
					  				<th style="border-top: 0px">Sr.</th>
					  				<th style="border-top: 0px">Full Name</th>
					  				<th style="width: 200px; border-top: 0px">Messgae</th></th>
					  				<th>Application Form</th>
					  				<th>Proof of English</th>
					  				<th>Personal Statement</th>
					  				<th>Review Request</th>
					  				<th>Submit Request</th>
					  				<th>Offer Letter</th>
					  			</tr>
					  		</thead>
					  		<tbody id="userContent">
					  			<?php 
                    $switch_check = 0;
                    $switch_check2 = 0;
					  				$q = get($dbc,"users");
					  				$x = 1;
					  				while ($r = mysqli_fetch_assoc($q)):?>
					  			<tr>
					  				<td><?=$x?></td>
					  				<td><?=$r['user_name']." ".$r['user_surname']?></td>
					  				<?php 
										$support = mysqli_query($dbc,"SELECT COUNT(user_chat_text) FROM user_chat WHERE user_chat_type = 'Admissure Support' AND user_id = '".$r['user_id']."'");
										$support1 = mysqli_fetch_array($support);

										$support2 = mysqli_query($dbc,"SELECT COUNT(user_chat_text) FROM user_chat WHERE user_chat_type = 'Review Team' AND user_id = '".$r['user_id']."'");
										$support21 = mysqli_fetch_array($support2);
									?>
					  				<td class="text-info"><span style="cursor: pointer;" onclick="loadSuportMessagethis(<?=$r['user_id']?>)">Support(<?=$support1['0']?>)</span> | <span style="cursor: pointer;" onclick="loadSuportMessagethis(<?=$r['user_id']?>)">Review(<?=$support21['0']?>)</span></td>
					  				
                    <td><a href="../files/<?=fetchRecord($dbc,"user_data","user_id",$r['user_id'])['user_data_step1']?>" download><?=fetchRecord($dbc,"user_data","user_id",$r['user_id'])['user_data_step1']?></a></td>
					  				
                    <td><a href="../files/<?=fetchRecord($dbc,"user_data","user_id",$r['user_id'])['user_data_step2']?>" download><?=fetchRecord($dbc,"user_data","user_id",$r['user_id'])['user_data_step2']?></a></td>
					  				
                    <td><a href="../files/<?=fetchRecord($dbc,"user_data","user_id",$r['user_id'])['user_data_step3']?>" download><?=fetchRecord($dbc,"user_data","user_id",$r['user_id'])['user_data_step3']?></a></td>
					  				
                    <td>
					  					<div class="custom-control custom-switch text-primary">
					  						<?php 
					  						$user_data = fetchRecord($dbc,"user_data","user_id",$r['user_id']);
					  						if ($user_data['user_data_revision'] == 1 OR $user_data['user_data_revision'] == 3) {
					  							$switch_check = "checked";
					  						}else{
					  							$switch_check = "";
					  						}

					  						?>
											<input type="checkbox" class="custom-control-input" id="customSwitch2<?=$r['user_id']?>" onchange="updateUserReview(<?=$r['user_id']?>)" <?=$switch_check?>>
											<label class="custom-control-label" for="customSwitch2<?=$r['user_id']?>"></label>
										</div>
					  				</td>
					  				<td>
					  					<div class="custom-control custom-switch text-primary">
					  						<?php 
					  						$user_data = fetchRecord($dbc,"user_data","user_id",$r['user_id']);
					  						if ($user_data['user_data_sts'] == 0) {
					  							$switch_check2 = "";
					  						}elseif ($user_data['user_data_sts'] == 1) {
					  							$switch_check2 = "checked";
					  						}
					  						?>
											<input type="checkbox" class="custom-control-input" id="customSwitch1<?=$r['user_id']?>" onchange="updateUser(<?=$r['user_id']?>)" <?=$switch_check2?>>
											<label class="custom-control-label" for="customSwitch1<?=$r['user_id']?>"></label>
										</div>
					  				</td>
					  				<td>
					  					<a id="updateDomData<?=$r['user_id']?>" href="../files/<?=fetchRecord($dbc,"user_data","user_id",$r['user_id'])['user_data_step3']?>" download><?=fetchRecord($dbc,"user_data","user_id",$r['user_id'])['user_data_offer']?></a>
					  					<a class="text-danger" data-toggle="modal" href='#modal-id<?=$r['user_id']?>'>[upload]</a>
					  					<div class="modal fade" id="modal-id<?=$r['user_id']?>">
					  						<div class="modal-dialog">
					  							<div class="modal-content">
					  								<div class="modal-header">
					  									<h4 class="modal-title">Upload Offer Letters</h4>
					  									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					  								</div>
					  								<div class="modal-body">
					  									<div class="msg"></div>
					  									<form method="POST" role="form" enctype="multipart/formdata">
					  										<div class="form-group">
					  											<label for="">File</label>
					  											<input type="file" class="form-control" id="user_data_file<?=$r['user_id']?>" name="user_data_file<?=$r['user_id']?>">
					  											<input type="text" class="form-control d-none" id="user_id4<?=$r['user_id']?>" name="user_id4<?=$r['user_id']?>" value="<?=$r['user_id']?>">
					  										</div>
					  								</div>
					  								<div class="modal-footer">
					  									<button type="button" id="<?=$r['user_id']?>" class="btn btn-primary offer_letter">Save changes</button>
					  									</form>
					  									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					  								</div>
					  							</div>
					  						</div>
					  					</div>
					  				</small></td>
					  			</tr>	    
					  			<?php 
					  				$x++;
					  				endwhile;
					  			?>
					  		</tbody>
					  	</table>

					  </div><!-- profile -->
					 
					  <div class="tab-pane fade show" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
					  	<div class="container py-2">
						    <h2 class="text-center text-dark py-3">Message</h2>
							<input type="text" class="d-none" value="<?=$fetchUser['user_id']?>" id='user_id23'>
						                    <?php 
						                    unset($_SESSION["user_login"]);
						                    if (!isset($_SESSION['user_login'])) {?>
							                    <select class="form-control form-control-xs selectpicker" name="" data-size="7" data-live-search="true" data-title="SELECT User TO Start Chart" id="state_list" data-width="100%" onchange="getChat(this.value)">
							                    	<?php 
							                    	$q = get($dbc,"users");
							                    	while ($r = mysqli_fetch_assoc($q)):?>
							                    		<option value="<?=$r['user_id']?>"><?=$r['user_name']?> <?=$r['user_surname']?></option>
							                    	<?php endwhile ?>
								                </select>
						                    <?php	
						                    	}else {
						                    		
						                    	}
						                    ?>							
						    <?php include '../module/chatbox.php'; ?>
						</div>
						<!--container-->

					  </div><!-- message -->
					  
					  <div class="tab-pane fade show" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
					  	<legend>Testimonals</legend>
					  	<div class="tabs">
						   <input id="tab1" type="radio" name="tabs" checked>
						   <label for="tab1">
					  				<span class="material-icons text-primary">people_alt</span>
						   </label>
						   <div class="content">
						      <div id="content1"></div>
						   </div>
						</div>
					  	<table class="table table-sm table-hover">
					  		<thead class="thead-primary">
					  			<tr>
					  				<th style="border-top: 0px">Sr.</th>
					  				<th style="border-top: 0px">User Name</th>
					  				<th>Testimonial</th>
					  				<th>Feature on Home</th>
					  			</tr>
					  		</thead>
					  		<tbody id="TestContent">
					  		</tbody>
					  	</table>
					  </div><!-- testimonals -->
					  
					  <div class="tab-pane fade show" id="v-pills-friend" role="tabpanel" aria-labelledby="v-pills-friend-tab">
					  	<legend>Withdrawal Request</legend>
					  	<div class="tabs">
						   <input id="tab1" type="radio" name="tabs" checked>
						   <label for="tab1">
					  				<span class="material-icons text-primary">people_alt</span>
						   </label>
						   <div class="content">
						      <div id="content1"></div>
						   </div>
						</div>
					  	<table class="table table-sm table-hover">
					  		<thead class="thead-primary">
					  			<tr>
					  				<th style="border-top: 0px">Sr.</th>
					  				<th style="border-top: 0px">User Name</th>
					  				<th>Amount</th>
					  				<th>Status</th>
					  			</tr>
					  		</thead>
					  		<tbody id="withdrawContent">
					  		</tbody>
					  	</table>
					  </div><!-- friend -->
					  
					  <div class="tab-pane fade show" id="v-pills-university" role="tabpanel" aria-labelledby="v-pills-university-tab">
					  	<legend>Partner Universities 
					  		<a class="btn btn-success float-right custom_btn2 custom_btn step1show" data-toggle="modal" href='#university'>Add New</a>
					  		<div class="modal fade" id="university">
					  			<div class="modal-dialog">
					  				<div class="modal-content">
					  					<div class="modal-header">
					  						<h4 class="modal-title">Add Universities</h4>
					  						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					  					</div>
					  					<div class="modal-body">
					  						<form action="" method="POST" role="form">
					  							<div class="form-group">
					  								<label for="">Name</label>
					  								<input type="text" class="form-control" id="uni_name">
					  							</div>	
					  							<div class="form-group">
					  								<label for="">Website</label>
					  								<input type="url" class="form-control" id="uni_web">
					  							</div>						
					  							<div class="form-group">
					  								<label for="">Status</label>
					  								<select id="uni_sts" class="form-control">
					  									<option value="">~~SELECT~~</option>
					  									<option value="1">Active Only</option>
					  									<option value="2">Feature On Home</option>
					  									<option value="3">Both</option>
					  									<option value="0">Deactive</option>
					  								</select>
					  							</div>						
                          <div class="form-group">
                            <label for="">Logo</label>
                            <input type="file" class="form-control" id="uni_logo3">
                          </div>
					  					</div>
					  					<div class="modal-footer">
					  						<button type="button" id="addUni" class="btn btn-primary">Save changes</button>
					  						</form>
					  						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					  					</div>
					  				</div>
					  			</div>
					  		</div>
					  	</legend>
					  	<div class="tabs">
						   <input id="tab1" type="radio" name="tabs" checked>
						   <label for="tab1">
					  				<span class="material-icons text-primary">people_alt</span>
						   </label>
						   <div class="content">
						      <div id="content1">
						      </div>
						   </div>
						</div>
						<small>
					  	<table class="table table-hover table-sm table-hover">
					  		<thead>
					  			<tr>
					  				<th style="border-top: 0px">Sr.</th>
					  				<th style="border-top: 0px">Uni Name</th>
					  				<th>Logo</th>
					  				<th>Application Form</th>
					  				<th>Feature on Home</th>
					  				<th>Status</th>
					  			</tr>
					  		</thead>
					  		<tbody>
					  			<?php 
					  			$j = 1;
					  			$q = get($dbc,"universities");
					  			$switch_check3 = 0;
					  			$switch_check4 = 0;
					  			while ($r = mysqli_fetch_assoc($q)):?>
					  				<tr>
					  					<td><?=$j?></td>
					  					<td><span class="text-info"><?=$r['uni_name']?></span><br><span class="text-danger"><?=$r['uni_web']?></span></td>
					  					<td>
					  						<img style="height: 10%; width: 30%;" src="../files/<?=$r['uni_logo']?>" id="logo<?=$r['uni_id']?>">
					  						<br>
					  						<span class="text-danger" onclick="logofile(<?=$r['uni_id']?>)">Upload</span>
					  						<input type="file" class="d-none" onchange="uploadLogo(this,<?=$r['uni_id']?>)" id="logofile2<?=$r['uni_id']?>">
					  						<input type="text" class="d-none" value="<?=$r['uni_id']?>" id="logoinput<?=$r['uni_id']?>">
					  					</td>
					  					<td>
					  						<span id="uniForm<?=$r['uni_id']?>"><?=$r['uni_form']?></span>
					  						<br>
					  						<span class="text-danger" onclick="formFile(<?=$r['uni_id']?>)">Upload</span>
					  						<input type="file" class="d-none" onchange="uploadForm(<?=$r['uni_id']?>)" id="fileFile2<?=$r['uni_id']?>">
					  						<input type="text" class="d-none" value="<?=$r['uni_id']?>" id="fileinput<?=$r['uni_id']?>">
					  					</td>
					  					<td>
						  					<div class="custom-control custom-switch text-primary">
						  						<?php 
						  						if ($r['uni_sts'] == 2 OR $r['uni_sts'] == 3) {
						  							$switch_check3 = "checked";
						  						}else{
						  							$switch_check3 = "";
						  						}
						  						?>
												<input type="checkbox" class="custom-control-input" id="customSwitchhome<?=$r['uni_id']?>" onchange="updateUnihome(<?=$r['uni_id']?>,<?=$r['uni_sts']?>)" <?=$switch_check3?>>
												<label class="custom-control-label" for="customSwitchhome<?=$r['uni_id']?>"></label>
										</td>
					  					<td>
						  					<div class="custom-control custom-switch text-primary">
						  						<?php 
						  						if ($r['uni_sts'] == 1 OR $r['uni_sts'] == 3) {
						  							$switch_check4 = "checked";
						  						}else{
						  							$switch_check4 = "";
						  						}
						  						?>
												<input type="checkbox" class="custom-control-input" id="customSwitchsts<?=$r['uni_id']?>" onchange="updateUnists(<?=$r['uni_id']?>,<?=$r['uni_sts']?>)" <?=$switch_check4?>>
												<label class="custom-control-label" for="customSwitchsts<?=$r['uni_id']?>"></label>
					  					</td>
					  				</tr>
					  			<?php 
					  				$j++;
							  		endwhile ?>
					  		</tbody>
					  	</table>
					  	</small>
					  </div><!-- logout -->

					</div><!-- tabs body -->
				</div><!-- col -->
			</div><!-- row -->
		</div><!-- container -->
		<?php include '../links/footer.php'; ?>
	</body>
</html>
<?php endif; ?>
