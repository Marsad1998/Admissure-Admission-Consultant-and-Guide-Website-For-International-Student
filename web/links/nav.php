<nav class="navbar navbar-expand-md navbar-light fixed-top bg-white">
			<!-- <a class="navbar-brand" href="#"><img src="../images/logo-default-216x47.png" width="216" height="47"></a> -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item" style="margin-left:100px;">
						<a class="navbar-brand" href="#"><img src="../images/logo-default-216x47.png" width="216" height="47"></a>
					</li>
				</ul>
				<form class="form-inline mt-2 mt-md-0">
					<ul class="navbar-nav mr-auto" style="margin-right:105px!important;">
					<li class="nav-item active">
						<a class="nav-link" href="#"><img style="border:dotted 1px; border-radius: 0px; margin-right: 10px" src="../files/<?=$fetchUser['user_pic']?>" width="30"><span class="text-capitalize"><?=$fetchUser['user_name']." ".$fetchUser['user_surname'] ?></span></a>
					</li>
					&nbsp;&nbsp;<li><img src="../../menu.png" alt="" width="30px;" style="margin-top: 5px;"></li>
				</ul>
					<!-- <a class="my-2 my-sm-0"><span class="navbar-toggler-icon"></span></a> -->
				</form>
			</div>
		</nav>
