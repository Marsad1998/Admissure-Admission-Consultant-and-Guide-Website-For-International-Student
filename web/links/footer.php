<!-- Bootstrap core JavaScript ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="../js/custom.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
		<script>
			$(document).ready(function () {
				$('.myTable').DataTable();
				$('.complete').hide();
                $('#progress').hide();
				$('.complete2').hide();
                $('#progress2').hide();
				$('.complete3').hide();
                $('#progress3').hide();

                $(document).on('click','.editData',function () {
                	var data = $(this).attr('id');
                	var field = $(this).attr('data-type');
    				$('#edit_data').val(data);
    				$('#edit_data_field').val(field);
    				$('#dataEdit').modal('show');
                });
			});

			// function editData(data) {
			// 	$('#edit_data').text(data);
			// 	$('#dataEditModal').modal('show');
			// }			

			$('#checkbox1').change(function() {
			  if ($(this).is(':checked')) {
			  	$(".downloadButton").removeClass('disabled');
			  } else {
			  	$(".downloadButton").addClass('disabled');
			  }
			});

			$('#checkbox2').change(function() {
			  if ($(this).is(':checked')) {
			  	$(".submitBtn").removeClass('disabled');
			  	var abc = $('#checkbox2').val();
			  } else {
			  	$(".submitBtn").addClass('disabled');
			  	var abc = $('#checkbox2').val();
			  }
			});

			$(".reviewBtn").on('click',function () {
				var id = $(this).attr('id');
				var uni = $('#user_uni').val();
				$.ajax({
					type: 'POST',
					url: '../inc/code.php',
					data: {revision:id,uni:uni},
					dataType: 'text',
					success:function (msg,status) {
						swal('Review',msg.trim(),'success');
					}
				});
			});

			$(".submitBtn").on('click',function () {
				var id = $(this).attr('id');
				if ($(this).is(':checked')) {
				  	var skip_review = $('#checkbox2').val();
			  	}
				$.ajax({
					type: 'POST',
					url: '../inc/code.php',
					data: {user_idNew:id, skip_review:skip_review},
					dataType: 'text',
					success:function (msg,status) {
						swal('Data Submitted',msg.trim(),'success');
					}
				});
			});
			
			$('.step1show').on('click',function () {
				$('#step1').click();
			});

			$('.step2show').on('click',function () {
				$('#step2').click();
			});

			$('.step3show').on('click',function () {
				$('#step3').click();
			});

			$('#step1').on('change',function () {
				var fileExtension = ['pdf', 'docx', 'doc'];
			        if ($.inArray($("#step1").val().split('.').pop().toLowerCase(), fileExtension) == -1) {
			            swal("Extention Error","Only formats are allowed : "+fileExtension.join(', '),"warning");
			        }else{	
			        	if ($("#step1")[0].files[0].size < 2000000) {
				        	var formData = new FormData();
							formData.append('file', $('#step1')[0].files[0]);
							formData.append('user_id',$('#user_id').val());
						    $.ajax({
					            type: 'POST',
					            url: '../inc/code.php',
					            data: formData,
					            contentType: false,
					            cache: false,
					            processData: false,	
					            beforeSend:function() {
					                $('.complete').hide();
					                $('#progress').show();
					            },
					            success:function (msg,status) {
					                $("#step1output").addClass('text-danger').html(msg.trim());
					                $('.complete').show();
					                $('#progress').hide();
					                $('#formData1').each(function(){
					                    this.reset();
					                });    
					            }
					        });//ajax call
			        	}else{
			        		swal("Size Error","File Size Must be Less than 2MB","error");
			        	}
			        }
			});

			$('#step2').on('change',function () {
				var fileExtension = ['pdf', 'docx', 'doc'];
			        if ($.inArray($("#step2").val().split('.').pop().toLowerCase(), fileExtension) == -1) {
			            swal("Extention Error","Only formats are allowed : "+fileExtension.join(', '),"warning");
			        }else{	
			        	if ($("#step2")[0].files[0].size < 2000000) {
				        	var formData = new FormData();
							formData.append('file2', $('#step2')[0].files[0]);
							formData.append('user_id2',$('#user_id2').val());
						    $.ajax({
					            type: 'POST',
					            url: '../inc/code.php',
					            data: formData,
					            contentType: false,
					            cache: false,
					            processData: false,	
					            beforeSend:function() {
					                $('.complete2').hide();
					                $('#progress2').show();
					            },
					            success:function (msg,status) {
					                $("#step2output").addClass('text-danger').html(msg.trim());
					                $('.complete2').show();
					                $('#progress2').hide();
					                $('#formData2').each(function(){
					                    this.reset();
					                });    
					            }
					        });//ajax call
			        	}else{
			        		swal("Size Error","File Size Must be Less than 2MB","error");
			        	}
			        }
			});

			$('#step3').on('change',function () {
				var fileExtension = ['pdf', 'docx', 'doc'];
			        if ($.inArray($("#step3").val().split('.').pop().toLowerCase(), fileExtension) == -1) {
			            swal("Wrong Extention", "Only formats are allowed : "+fileExtension.join(', '), "error");
			        }else{	
			        	if ($("#step3")[0].files[0].size < 2000000) {
				        	var formData = new FormData();
							formData.append('file3', $('#step3')[0].files[0]);
							formData.append('user_id3',$('#user_id3').val());
						    $.ajax({
					            type: 'POST',
					            url: '../inc/code.php',
					            data: formData,
					            contentType: false,
					            cache: false,
					            processData: false,	
					            beforeSend:function() {
					                $('.complete3').hide();
					                $('#progress3').show();
					            },
					            success:function (msg,status) {
					                $("#step3output").addClass('text-danger').html(msg.trim());
					                $('.complete3').show();
					                $('#progress3').hide();
					                $('#formData3').each(function(){
					                    this.reset();
					                });    
					            }
					        });//ajax call
			        	}else{
				            swal("File Size Errorr", "Only 20MB Maximum is allowed : ", "error");
			        	}
			        }
			});

			$('.sendMessage').on('click',function () {
				var text = $(".msgText").val();
				var id = $('.sendMessage').attr('id');
				var adminORuser = $("#adminORuser").val();
				$.ajax({
					type: 'POST',
					url: '../inc/code.php',
					data:{text : text, chat_user:id, adminORuser:adminORuser},
					dataType: 'text',
					success:function (msg,status) {
						$('.msgText').val("");
						$('.msgText').focus();
						loadMsg(id);
					}
				});
			});

			$('.sendMessage2').on('click',function () {
				var text2 = $(".msgText2").val();
				var id2 = $('.sendMessage2').attr('id');
				var adminORuser2 = $("#adminORuser").val();
				$.ajax({
					type: 'POST',
					url: '../inc/code.php',
					data:{text2 : text2, chat_user2:id2, adminORuser2:adminORuser2},
					dataType: 'text',
					success:function (msg,status) {
						$('.msgText2').val("");
						$('.msgText2').focus("");
						loadMsg2(id2);
					}
				});
			});

			window.onload=function () {
				loadMsg();
				loadMsg2();
				loadTestimonals();
				loadAdmin();
				loadTest();
			}

			// $(document).ready(function () {
			// });

			function loadMsg(user_id_fromadmin = null) {
				if (user_id_fromadmin != null) {
					var user_id = user_id_fromadmin;
				}else {
					var user_id = $('#user_id23').val();			
				}
				$.ajax({
					type: 'POST',
					url: '../inc/code.php',
					data:{getUser : user_id},
					dataType: 'json',
					success:function (msg,status) {
						var userText = '';
						$.each(msg, function (index, value) {
							if (value['user_chat_bw'] == 'admin') {
								var user_admin = 'Admin'
							}else{
								var user_admin = value['user_name']+" "+value['user_surname'];
							}
							userText += '<div class="container2">\
						                    		<b>'+user_admin+':</b>\
													<p>'+value['user_chat_text']+'</p>\
													<span class="time-right">'+value['user_chat_time']+'</span>\
												</div>';
						});
						$('#chatMessageSupport').append(userText);
						    var objDiv = document.getElementById("chatMessageSupport");
						    objDiv.scrollTop = objDiv.scrollHeight;
						}
				});
			}

			function loadMsg2(user_id_fromadmin2 = null) {
				if (user_id_fromadmin2 != null) {
					var user_id = user_id_fromadmin2;
				}else {
					var user_id = $('#user_id23').val();			
				}
				$.ajax({
					type: 'POST',
					url: '../inc/code.php',
					data:{getUser2 : user_id},
					dataType: 'json',
					success:function (msg,status) {
						var userText = '';
						$.each(msg, function (index, value) {
							if (value['user_chat_bw'] == 'admin') {
								var user_admin = 'Admin'
							}else{
								var user_admin = value['user_name']+" "+value['user_surname'];
							}
							userText += '<div class="container2">\
						                    		<b>'+user_admin+':</b>\
													<p>'+value['user_chat_text']+'</p>\
													<span class="time-right">'+value['user_chat_time']+'</span>\
												</div>';
						});
						$('#chatMessageSupport2').append(userText);
						    var objDiv = document.getElementById("chatMessageSupport2");
						    objDiv.scrollTop = objDiv.scrollHeight;
						}
				});
			}

			$('#testimonals').on('click',function (e) {
				e.preventDefault();
				var test_user = $('#user_id23').val();
				var testimonalText = $('#testimonalText').val();
				var testimonalTextid = $('#testimonalTextid').val();
				$.ajax({
					type: 'POST',
					url: '../inc/code.php',
					data:{testimonalText : testimonalText, test_user : test_user, testimonalTextid:testimonalTextid},
					dataType: 'text',
					success:function (msg,status) {
						$('#testimonalText').val("");
						swal('Thank You',msg.trim(),'success');
						$("#testimonals").text("Add");
						loadTestimonals();
					}

				});
			});

			function loadTestimonals() {
				var user_id = $('#user_id23').val();
				var tbl = "testimonals";
				var col = "test_id";
				$.ajax({
					type: 'POST',
					url: '../inc/code.php',
					data:{getTest : user_id},
					dataType: 'json',
					success:function (msg,status) {
						var testimonals = "";
						$.each(msg, function(index, value) {
							testimonals += '<p class="forHover">'+value['test_text']+'<br><span class="text-danger" onclick="editTest('+value['test_id']+')">Edit</span> | <span class="text-danger" onclick="deleteDataTest('+value['test_id']+')">Delete</span></p>'
						});
						$(".previosTest").empty().append(testimonals);
					}
				});
			}

			function editTest(id) {
				$.ajax({
					type: 'POST',
					url: '../inc/code.php',
					data:{getTest2 : id},
					dataType: 'json',
					success:function (msg) {
						$("#testimonalText").val(msg['test_text']);
						$("#testimonalTextid").val(msg['test_id']);
						$("#testimonals").text("Edit");
					}
				});
			}

			$('.editForm').on('click',function () {
				var editData = $('#edit_data').val();
				var edit_data_field = $('#edit_data_field').val();
				var edit_user = $("#user_id23").val();
				$.ajax({
					type: 'POST',
					url: '../inc/code.php',
					data:{editData : editData, edit_data_field : edit_data_field, edit_user : edit_user},
					dataType: 'text',
					success:function (msg) {
						$("#"+edit_data_field).html("").text(editData);
						$('#dataEdit').modal('hide');
					}
				});
			});

			$("#withdrawBtn").on('click',function () {
				var withdrawAmount = $('#withdrawAmount').val();
				var avaialableAmount = $('#avaialableAmount').html();
				var user_withdraw = $('#user_id23').val();
				var update_balance = avaialableAmount - withdrawAmount;
				if (Number(withdrawAmount) > Number(avaialableAmount)) {
					swal('Insufficient Balance','You Do not have enough Amount Available','warning');
					var withdrawAmount = $('#withdrawAmount').val("");
				}else{
					$.ajax({
						type: 'POST',
						url: '../inc/code.php',
						data:{user_withdraw : user_withdraw, withdrawAmount : withdrawAmount},
						dataType: 'text',
						success:function (msg) {
							swal('Congratulations','You Request Submitted and in Progress','success');
							var withdrawAmount = $('#withdrawAmount').val("");
							var withdrawAmount = $('#avaialableAmount').html(update_balance);
						}					
					});
				}
			});

			$('#sendEmail').on('click',function () {
				var emails = $('#emails').val();
				var message = $('#message').val();
				var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				if (regex.test(emails) === true) {
					$.ajax({
						type: 'POST',
						url: '../inc/code.php',
						data:{emails : emails, message : message},
						dataType: 'text',
						success:function (msg) {
							swal('Email Sent!','You Email Sent Successfully','success');
							var emails = $('#emails').val("");
							var message = $('#message').val("");
						}					
					});
				}else{
					swal('Invalid Email','Please Enter Valid Email','error');
				}
			});

			$('#addAdmin').on('click',function () {
				var admin_email = $('#admin_email').val();
				var admin_password = $('#admin_password').val();
				var admin_name = $('#admin_name').val();
				var admin_id = $('#admin_id').val();
				var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				if (regex.test(admin_email) === true) {
					$.ajax({
						type: 'POST',
						url: '../inc/code.php',
						data:{admin_id : admin_id, admin_email : admin_email, admin_password : admin_password, admin_name : admin_name},
						dataType: 'text',
						success:function (msg) {
							swal(msg,'Admin ','success');
							var admin_id = $('#admin_id').val("");
							var admin_email = $('#admin_email').val("");
							var admin_name = $('#admin_name').val("");
							var admin_password = $('#admin_password').val("");
							$('#modal-id').modal('hide');
							loadAdmin();
						}					
					});
				}else{
					swal('Invalid Email','Please Enter Valid Email','error');
				}
			});

			function loadAdmin() {
				var admin = "all";
				$.ajax({
					type: 'POST',
					url: '../inc/code.php',
					data:{admin : admin},
					dataType: 'json',
					success:function (msg,status) {
						var adminContent = "";
						var x = 1;
						$.each(msg, function(index, value) {
							adminContent += '<tr><td>'+x+'</td><td>'+value['admin_name']+'</td><td>'+value['admin_email']+'</td><td>'+value['admin_password']+'</td><td><span style="cursor:pointer;" onclick="editAdmin('+value['admin_id']+')" class="text-info"><span class="material-icons">create</span></span></td></tr>';
							x++;
						});
						$("#adminContent").empty().html(adminContent);
					}
				});
			}

 			function editAdmin(admin_id) {
				$.ajax({
					type: 'POST',
					url: '../inc/code.php',
					data:{admin_id : admin_id},
					dataType: 'json',
					success:function (msg,status) {
						$('#admin_id').val(msg.admin_id);
						$('#admin_name').val(msg.admin_name);
						$('#admin_email').val(msg.admin_email);
						$('#admin_password').val(msg.admin_password);
						$("#modal-id").modal('show');
						// $("#adminContent").empty().html(adminContent);
					}
				});
 			}	

 			function updateUserReview(id_update){
 				$.ajax({
					type: 'POST',
					url: '../inc/code.php',
					data:{id_update : id_update},
					dataType: 'text',
					success:function (msg,status) {
					}
				});
 			}

 			function updateUser(id_update2){
 				$.ajax({
					type: 'POST',
					url: '../inc/code.php',
					data:{id_update2 : id_update2},
					dataType: 'text',
					success:function (msg,status) {
					}
				});
 			}

 			function loginAdmin(){
 				var admin_email2 = $("#admin_email2").val();
 				var admin_password2 = $("#admin_password2").val();
 				$.ajax({
					type: 'POST',
					url: '../inc/code.php',
					data:{admin_email2 : admin_email2, admin_password2 : admin_password2},
					dataType: 'json',
					success:function (msg,status) {
						if (msg.sts == 'success') {
		                	$(".msg").addClass('text-danger').html(msg.msg.trim());
	                  		window.location = "index.php";
                		}else{
	                		$(".msg").addClass('text-danger').html(msg.msg.trim());
                		}
					}
				});	
 			}

			$('.offer_letter').on('click',function () {
				var id = $(this).attr('id');
				var fileExtension = ['pdf', 'docx', 'doc'];
			        if ($.inArray($("#user_data_file"+id).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
			            swal("Extention Error","Only formats are allowed : "+fileExtension.join(', '),"warning");
			        }else{	
			        	if ($("#user_data_file"+id)[0].files[0].size < 2000000) {
				        	var formData = new FormData();
							formData.append('file4', $('#user_data_file'+id)[0].files[0]);
							formData.append('user_id4',$('#user_id4'+id).val());
						    $.ajax({
					            type: 'POST',
					            url: '../inc/code.php',
					            data: formData,
					            contentType: false,
					            cache: false,
					            processData: false,	
					            success:function (msg,status) {
					            	$('#updateDomData'+id).empty().html(msg)
					                $(".msg").html(msg);
					            }
					        });//ajax call
			        	}else{
			        		swal("Size Error","File Size Must be Less than 2MB","error");
			        	}
			        }
			});

			function getChat(chat_user3) {
				$(".sendMessage").attr("id",chat_user3);
				$(".sendMessage2").attr("id",chat_user3);
				$('#chatMessageSupport').html("");
				$('#chatMessageSupport2').html("");
				loadMsg(chat_user3);
				loadMsg2(chat_user3);
			}

			function loadTest() {
				var loadTest = "all";
				$.ajax({
					type: 'POST',
					url: '../inc/code.php',
					data:{loadTest : loadTest},
					dataType: 'json',
					success:function (msg,status) {
						var TestContent = "";
						var x = 1;
						var sts = 0;
						$.each(msg, function(index, value) {
							if (value['test_sts'] == 1) {
								sts = "checked";
							}else {
								sts = "";
							}
							TestContent += '<tr>\
							<td>'+x+'</td>\
							<td>'+value['test_text']+'</td>\
							<td>'+value['user_name']+'</td>\
							<td>\
							<input type="checkbox" onchange="updateTest('+value['test_id']+')" '+sts+'>\
							</td>\
							</tr>';
							x++;
						});
						$("#TestContent").empty().html(TestContent);
					}
				});
			}

			$(document).ready(function () {
				loadWithdraw()
			})

			function loadWithdraw() {
				var loadWithdraw = "all";
				$.ajax({
					type: 'POST',
					url: '../inc/code.php',
					data:{loadWithdraw : loadWithdraw},
					dataType: 'json',
					success:function (msg,status) {
						var withdrawContent = "";
						var x = 1;
						var sts0 = 0;
						var sts1 = 0;
						var sts2 = 0;
						$.each(msg, function(index, value) {
							if (value['withdraw_sts'] == 0) {
								sts0 = "selected";
							}else if (value['withdraw_sts'] == 1) {
								sts1 = "selected";
							}
							else {
								sts2 = "selected";
							}
							withdrawContent += '<tr>\
							<td>'+x+'</td>\
							<td>'+value['user_name']+'</td>\
							<td>'+value['withdraw_amount']+'</td>\
							<td>\
							<select onchange="updateWithdraw(this.value'+','+value['withdraw_id']+')">\
					  			<option value="">~~SELECT~~</option>\
					  			<option '+sts2+' value="2">Approved</option>\
					  			<option '+sts1+' value="1">Cancelled</option>\
					  			<option '+sts0+' value="0">Pending</option>\
					  		</select>\
							</td>\
							</tr>';
							x++;
						});
						$("#withdrawContent").empty().html(withdrawContent);
					}
				});
			}

			function updateTest(testID) {
				$.ajax({
					type: 'POST',
					url: '../inc/code.php',
					data:{testID : testID},
					dataType: 'text',
					success:function (msg,status) {
					}
				});
			}

			function updateWithdraw(withDrawvalue,withDrawID_id) {
				$.ajax({
					type: 'POST',
					url: '../inc/code.php',
					data:{withDrawvalue : withDrawvalue,withDrawID_id : withDrawID_id,},
					dataType: 'text',
					success:function (msg,status) {
					}
				});
			}

			$('#addUni').on('click',function () {
				var uni_name = $("#uni_name").val();
				var uni_web = $("#uni_web").val();
				var uni_sts = $("#uni_sts").val();
				$.ajax({
					type: 'POST',
					url: '../inc/code.php',
					data:{uni_name : uni_name, uni_web : uni_web, uni_sts:uni_sts},
					dataType: 'text',
					success:function (msg,status) {
						var uni_name = $("#uni_name").val('');
						var uni_web = $("#uni_web").val('');
						swal(msg,"University Added Successfully","success");
					}
				});
			});

			function logofile(uniID) {
	    		$("#logofile2"+uniID).click();
			}

			function formFile(uniID) {
	    		$("#fileFile2"+uniID).click();
			}

			$("#blah").click(function() {
	    		$("#uploadPic").click();
	    	});

			function uploadLogo(logoFile,iddd){
				if (logoFile.files && logoFile.files[0]) {
			        var fileExtension = ['jpeg', 'jpg', 'png'];
			        var fileSize = (logoFile.files[0].size);
			        var reader = new FileReader;
			        reader.onload = function () { //file is loaded
			            //check image Extentions
			            if ($.inArray($(logoFile).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
	                        swal('Extention Error','Only Formats are Allowed '+ fileExtension.join(', '),'error');
			            }else{
			                //check image size
			                if (fileSize > 2000000) {
	                        swal('Size Error','Image Must be Less than 2MB','error');
			                }else{
			                    var img = new Image;
			                    img.src = reader.result;
			                    img.onload = function() {
						        	var formData = new FormData();
									formData.append('logofile2', $('#logofile2'+iddd)[0].files[0]);
									formData.append('logoinput',$('#logoinput'+iddd).val());
		                            $.ajax({
										type: 'POST',
										url: '../inc/code.php',
										data: formData,
							            contentType: false,
							            cache: false,
							            processData: false,	
										success:function (msg) {
		                            		$('#logo'+iddd).attr('src', reader.result);   
										}
									});
			                    }    
			                }
			            }
			        };
			    reader.readAsDataURL(logoFile.files[0]); 
			    }else{
			    	swal("Error","Something Went Wrong Please Refresh Page","error");
			    }
			}

			function uploadForm(iddd1){
				var fileExtension = ['pdf', 'docx', 'doc'];
			        if ($.inArray($("#fileFile2"+iddd1).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
			            swal("Wrong Extention", "Only formats are allowed : "+fileExtension.join(', '), "error");
			        }else{	
			        	if ($("#fileFile2"+iddd1)[0].files[0].size < 2000000) {
				        	var formData = new FormData();
							formData.append('fileFile2', $('#fileFile2'+iddd1)[0].files[0]);
							formData.append('uni_id2',iddd1);
						    $.ajax({
					            type: 'POST',
					            url: '../inc/code.php',
					            data: formData,
					            contentType: false,
					            cache: false,
					            processData: false,
					            success:function (msg,status) {
					                $("#uniForm"+iddd1).addClass('text-danger').html(msg.trim());
					                $("#fileFile2"+iddd1).html("");
					            }
					        });//ajax call
			        	}else{
				            swal("File Size Errorr", "Only 20MB Maximum is allowed : ", "error");
			        	}
			        }
			}

			function readURL(input) {
			    if (input.files && input.files[0]) {
			        var fileExtension = ['jpeg', 'jpg', 'png'];
			        var fileSize = (input.files[0].size);
			        var reader = new FileReader;
			        reader.onload = function () { //file is loaded
			            //check image Extentions
			            if ($.inArray($(input).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
	                        swal('Extention Error','Only Formats are Allowed '+ fileExtension.join(', '),'error');
			            }else{
			                //check image size
			                if (fileSize > 2000000) {
	                        swal('Size Error','Image Must be Less than 2MB','error');
			                }else{
			                    var img = new Image;
			                    img.src = reader.result;
			                    img.onload = function() {
						        	var formData = new FormData();
									formData.append('user_pic', $('#uploadPic')[0].files[0]);
									formData.append('user_id_pic',$('#user_id23').val());
		                            $.ajax({
										type: 'POST',
										url: '../inc/code.php',
										data: formData,
							            contentType: false,
							            cache: false,
							            processData: false,	
										success:function (msg) {
		                            		$('#blah').attr('src', reader.result);   
										}
									});
			                    }    
			                }
			            }
			        };
			    reader.readAsDataURL(input.files[0]); 
			    }
			}//image upload function

 			function updateUnihome(uni_idhome,home){
 				$.ajax({
					type: 'POST',
					url: '../inc/code.php',
					data:{uni_idhome : uni_idhome, home : home},
					dataType: 'text',
					success:function (msg,status) {
					}
				});
 			}

 			function updateUnists(uni_idsts,uni_sts){
 				$.ajax({
					type: 'POST',
					url: '../inc/code.php',
					data:{uni_idsts : uni_idsts, uni_sts : uni_sts},
					dataType: 'text',
					success:function (msg,status) {
					}
				});
 			}

 			$("#user_uni").on('change',function () {
 				var uni_selected = $("#user_uni").val();
 				$.ajax({
					type: 'POST',
					url: '../inc/code.php',
					data:{uni_selected : uni_selected},
					dataType: 'json',
					success:function (msg,status) {
		                $('#uniLogo').attr('src', '../files/'+msg.uni_logo);   
					}
				});
 			});

 			function deleteDataTest(del_id) {
 				$.ajax({
					type: 'POST',
					url: '../inc/code.php',
					data:{del_test_id : del_id},
					dataType: 'text',
					success:function (msg,status) {
						loadTestimonals();
						swal("Deleted","Data Deleted Successfully","success");
					}
				});
 			}

		</script>
		<script src="../js/select2.js"></script>