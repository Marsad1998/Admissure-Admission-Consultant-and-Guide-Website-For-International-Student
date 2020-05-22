<!-- timeline item 1 -->
						    <div class="row">
						        <!-- timeline item 1 left dot -->
						        <div class="col-auto text-center flex-column d-none d-sm-flex">
						            <div class="row h-0">
						                <div class="col">&nbsp;</div>
						                <div class="col">&nbsp;</div>
						            </div>
						            <h5 class="m-2">
						                <span class="badge badge-pill bg-success border">&nbsp;</span>
						            </h5>
						            <div class="row h-100">
						                <div class="col border-right">&nbsp;</div>
						                <div class="col">&nbsp;</div>
						            </div>
						        </div>
						        <!-- timeline item 1 event content -->
						        <div class="col py-2">
						            <div class="card border-success"> 
						                <div class="card-body">
						                    <h4 class="card-title">Admissure Support</h4>
						                    <?php 	
							                    $_SERVER['REQUEST_URI']."<br>";
												$ext = explode("/", $_SERVER['REQUEST_URI']);
												$a = count($ext) - 2;
												$ext[$a];

						                    ?>
						                    <input type="text" class="d-none" value="<?=$ext[$a]?>" id="adminORuser">

						                    <p class="card-text" id="chatMessageSupport" style="height: 200px;overflow: auto;">
						                    	
						                    </p>
						                    <div class="row">
						                    	<div class="col-sm-10">
								                    <input type="text" class="form-control msgText">
						                    	</div>
						                    	<div class="col-sm-2">
						                    		<button class="btn btn-success btn-block sendMessage" id="<?=$fetchUser['user_id']?>">Send</button>
						                    	</div>
						                    </div>
						                </div>
						            </div>
						        </div>
						    </div>
						    <!--/row-->
						    <div class="row">
						        <div class="col-auto text-center flex-column d-none d-sm-flex">
						            <div class="row h-50">
						                <div class="col border-right">&nbsp;</div>
						                <div class="col">&nbsp;</div>
						            </div>
						            <h5 class="m-2">
						                <span class="badge badge-pill bg-success border">&nbsp;</span>
						            </h5>
						            <div class="row h-50">
						                <div class="col">&nbsp;</div>
						                <div class="col">&nbsp;</div>
						            </div>
						        </div>
						        <div class="col py-2">
						            <div class="card border-success">
						                <div class="card-body">
						                    <h4 class="card-title">Admissure Review Team</h4>
						                    <p class="card-text" id="chatMessageSupport2" style="height: 200px;overflow: auto;">
						                    	
						                    </p>
						                    <div class="row">
						                    	<div class="col-sm-10">
								                    <input type="text" class="form-control msgText2">
						                    	</div>
						                    	<div class="col-sm-2">
						                    		<button class="btn btn-success btn-block sendMessage2" id="<?=$fetchUser['user_id']?>">Send</button>
						                    	</div>
						                    </div>
						                </div>
						            </div>
						        </div>
						    </div>
						    <!--/row-->