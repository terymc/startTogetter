<!DOCTYPE html>
<html>
<head>
	<title>Start Together</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-------------------------------------------------------------------------------------------------------------------------------------->
      <link rel="stylesheet" href="lib/index/css/bootstrap.min.css" />
      <!-------------------------------------------------------------------------------------------------------------------------------------->
      <link rel="stylesheet" href="lib/index/css/pogo-slider.min.css" />
      <!-------------------------------------------------------------------------------------------------------------------------------------->
      <link rel="stylesheet" href="lib/index/css/style.css" />
      <!-------------------------------------------------------------------------------------------------------------------------------------->
      <link rel="stylesheet" href="lib/index/css/responsive.css" />
      <!-------------------------------------------------------------------------------------------------------------------------------------->
      <link rel="stylesheet" href="lib/index/css/custom.css" />
      <!-------------------------------------------------------------------------------------------------------------------------------------->
      <link rel="stylesheet" href="lib/member_profile/style.css" />
      <!-------------------------------------------------------------------------------------------------------------------------------------->
      <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
      <!-------------------------------------------------------------------------------------------------------------------------------------->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-------------------------------------------------------------------------------------------------------------------------------------->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" crossorigin="anonymous">
	  <!-------------------------------------------------------------------------------------------------------------------------------------->

	<style>
		body, html, div, h1, h2, h3, h5, h4, h6, p, b,
		a, span, small, table, tr, td, label {
			font-family: 'Kanit', sans-serif;
		}
	</style>

</head>

<body style="background-image: url('lib/member_profile/images/member_profile_bg.png');">
	<div class="wrapper">
        <nav id="sidebar" style="border-color: black;">
           	<div class="menu_section">
              	<ul>
                	<li>
                  		<br />
                  		<table align="center">
                    		<tr>
		                      	<td align="center">
		                        	<img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg" alt="User picture" style="width: 100px; margin-bottom: 15px; ">
		                      	</td>
                    		</tr>
                    		<tr>
                      			<td align="center">
                        			<span style="color: #fff; margin-top: 15px;" id="user_data"></span>
                      			</td>
                    		</tr>
                    		<tr>
                      			<td align="center">
                        			<a style="font-size: 17px;" href="user_profile.php" id="userEdit">แก้ไขข้อมูล<i style="margin-left: 10px;" class="fas fa-edit"></i></a>
                      			</td>
                    		</tr>
                  		</table>
                	</li>
                  	<li><a href="index.php">หน้าหลัก</a></li>
                  	<li><a href="project_search.php">ค้นหาโปรเจค</a></li>
					<li><a href="my_project.php">โปรเจคของฉัน</a></li>
                  	<li><a id="menu-logout" href="#">ออกจากระบบ</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <br />

    <table align="center" width="1120">
    	<tr>
    		<td width="750">
    			<a href="index.php"><img src="lib/index/images/logo1.png" style="width: 300px;" /></a>
    		</td>
    		<td valign="top" width="750">
    			<button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
    				<img style="margin-right: 17px;" src="lib/index/images/menu_icon.png">
    			</button>
    		</td>
    	</tr>

    	<tr>
    		<td align="left" colspan="2">
    			<h2 id="labelProfile">
    				<b style="margin-left: 20px">Profile&nbsp;&nbsp;</b><i class="fas fa-user"></i>
    				<hr style="margin-top: 30px; margin-bottom: 30px;" />
    			</h2>
    			<table style="margin-left: 20px">
    				<tr height="70">
    					<td id="name" valign="top" width="150">ชื่อ - นามสกุล :</td>
    					<td valign="top" id="responseName">-----------</td>
    				</tr>
    				<tr height="70">
    					<td id="birthDay" valign="top" width="150">วันเกิด :</td>
    					<td valign="top" id="responseBirthDay">-----------</td>
    				</tr>
    				<tr height="70">
    					<td id="email" valign="top" width="150">อีเมลล์ :</td>
    					<td valign="top" id="responseEmail">-----------</td>
    				</tr>
    				<tr height="70">
    					<td id="username" valign="top" width="150">ชื่อผู้ใช้ :</td>
    					<td valign="top" id="responseUsername">-----------</td>
    				</tr>
    				<tr>
    					<td id="password" valign="top" align="left" width="150">รหัสผ่าน :</td>
    					<td valign="top" id="responsePassword">**********</td>
    				</tr>
    				<tr>
    					<td colspan="2" id="password" valign="top" align="right" width="1200">
    						<button id="btnEdit" class="btn btn-warning">
    							แก้ไข&nbsp;&nbsp;<i style="font-size: 22px;" class="fas fa-edit"></i>
    						</button>
    					</td>
    				</tr>
    			</table>
    			<hr style="margin-top: 30px;"/>
    		</td>
    	</tr>
    </table>

    <div class="modal fade" id="modalMemberEdit" tabindex="-1" role="dialog" aria-hidden="true">
      	<div class="modal-dialog" role="document">
        	<div class="modal-content">
          		<div class="modal-header">
	            	<h5 style="font-size: 1.25rem;" class="modal-title">Edit Member</h5>
	            	<button type="button" class="close" id="modalMemberEditClose" aria-label="Close">
	              		<span style="font-size: 1.5rem;" aria-hidden="true">&times;</span>
	            	</button>
	          	</div>
	          	<div class="modal-body">
	            	<form>
	              		<table align="center">
	                		<tr style="height: 90px">
	                  			<td>
	                    			<div class="form-row">
	                      				<div class="col">
	                        				<label style="color: black;" for="inputFirstName">Firstname</label>
	                        				<input type="hidden" id="inputID">
	                        				<input type="text" id="inputFirstName" class="form-control" placeholder="Firstname" onkeyup="checkForm()">
	                      				</div>
	                      				<div class="col">
	                        				<label style="color: black;" for="inputLastName">lastname</label>
	                        				<input type="text" id="inputLastName" class="form-control" placeholder="Lastname" onkeyup="checkForm()">
	                      				</div>
	                    			</div>
	                  			</td>
	                		</tr>
	                		<tr style="height: 90px;">
	                  			<td>
	                    			<div>
				                    	<label style="color: black;" for="inputEmail">Email</label>
				                      	<input type="text" id="inputEmail" class="form-control" placeholder="Email" onkeyup="checkForm()">
				                    </div>
				                </td>
	                		</tr>
	                		<tr style="height: 90px;">
	                  			<td>
				                    <div>
				                      	<label style="color: black;" for="inputBirthDay">Birthday</label>
				                      	<input type="date" id="inputBirthDay" class="form-control" placeholder="BirthDay" onkeyup="checkForm()" onchange="checkForm()">
				                    </div>
	                  			</td>
	                		</tr>
	                		<tr style="height: 90px;">
	                  			<td>
	                    			<div class="form-row">
	                      				<div class="col">
					                        <label style="color: black;" for="inputUsername">Username</label>
					                        <input type="text" id="inputUsername" class="form-control" placeholder="Username" onkeyup="checkForm()">
					                    </div>
		                      			<div class="col">
					                        <label style="color: black;" for="inputPassword">Password</label>
					                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" onkeyup="checkForm()">
				                      	</div>
	                    			</div>
	                  			</td>
	                		</tr>
	                		<tr style="height: 100px;">
	                  			<td valign="bottom" align="center">
	                      			<button type="button" class="btn btn-sm btn-primary" id="btn-save">Save Changes</button><br />
	                  			</td>
	                		</tr>
	              		</table>
	            	</form>
	          	</div>
        	</div>
    	</div>
    </div>

    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" crossorigin="anonymous"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="https://unpkg.com/bootstrap-table@1.18.2/dist/bootstrap-table.min.js"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="https://unpkg.com/bootstrap-table@1.18.2/dist/extensions/key-events/bootstrap-table-key-events.min.js"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->

    <script type="text/javascript">

    	function checkForm(){
	        if($("#inputFirstName").val().length > 0 && $("#inputLastName").val().length > 0 && $("#inputEmail").val().length > 0 &&
	        	$("#inputBirthDay").val().length > 0 && $("#inputUsername").val().length > 0 && $("#inputPassword").val().length > 0){
	          	$("#btn-save").attr("disabled", false);
	        }
	        else {
	          	$("#btn-save").attr("disabled", true);
	        }
	    }

        $(document).ready(function() {

          	$('#sidebarCollapse').on('click', function() {
            	$('#sidebar, #content').toggleClass('active');
              	$('.collapse.in').toggleClass('in');
              	$('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });

          	$("#menu-logout").click(function () {
	            Swal.fire({
	                 title: 'Are you sure ?',
	                 text: 'คุณต้องการออกจากระบบ ?',
	                 icon: 'warning',
	                 showCancelButton: true,
	                 confirmButtonColor: '#3085d6',
	                 cancelButtonColor: '#d33',
	                 confirmButtonText: 'Comfirm',
	            }).then((result) => {
	                if (result.isConfirmed) {
	                  	sessionStorage.setItem("u_id", "");
	                  	sessionStorage.setItem("u_firstname", "");
	                    sessionStorage.setItem("u_lastname", "");
	                    sessionStorage.setItem("u_birthday", "");
	                    sessionStorage.setItem("u_email", "");
	                    sessionStorage.setItem("u_username", "");
	                    sessionStorage.setItem("u_password", "");
	                    sessionStorage.setItem("u_role", "");

	                  	window.location = "index.php";
	             	}
            	})
          	});

          	$("#user_data").html("ผู้ใช้ : " + sessionStorage.getItem("u_firstname") + " " + sessionStorage.getItem("u_lastname"));

          	var u_id = sessionStorage.getItem("u_id");

          	$.ajax({
	            url: 'get_data_user.php',
	            contentType: 'application/json',
	            headers: { "Content-Type": "application/x-www-form-urlencoded" },
	            success: function (response) {
	            	for(i=0; i<response.length; i++) {
	            		if(u_id == response[i].u_id) {
	            			$("#responseName").html(response[i].u_firstname + "\xa0\xa0" + response[i].u_lastname);
	            			$("#responseBirthDay").html(response[i].u_birthday);
	            			$("#responseEmail").html(response[i].u_email);
	            			$("#responseUsername").html(response[i].u_username);
	            		}
	            	}
	            },
	            error: function (error) {
	                console.log(error);
	            }
	        });

	        $("#modalMemberEditClose").click(function () {
	        	$("#modalMemberEdit").modal('hide');
	        });

	        $('#btnEdit').on('click', function() {
	        	$("#modalMemberEdit").modal('show');

	        	$.ajax({
		            url: 'get_data_user.php',
		            contentType: 'application/json',
		            headers: { "Content-Type": "application/x-www-form-urlencoded" },
		            success: function (response) {
		            	for(i=0; i<response.length; i++) {
		            		if(u_id == response[i].u_id) {
		            			$("#inputID").val(response[i].u_id);
				       			$("#inputFirstName").val(response[i].u_firstname);
				       			$("#inputLastName").val(response[i].u_lastname);
				       			$("#inputEmail").val(response[i].u_email);
				       			$("#inputBirthDay").val(response[i].u_birthday);
				       			$("#inputUsername").val(response[i].u_username);
				       			$("#inputPassword").val(response[i].u_password);
		            		}
		            	}
		            },
		            error: function (error) {
		                console.log(error);
		            }
	        	});
            });

            $("#btn-save").click(function () {
		    	if($("#inputFirstName").val() == "" || $("#inputLastName").val() == "" || $("#inputEmail").val() == "" ||
		            $("#inputBirthDay").val() == "" || $("#inputUsername").val() == "" || $("#inputPassword").val() == "") {

		        	Swal.fire({
		                icon: 'error',
		                title: 'ไม่สามารถลงทะเบียนได้',
		                text: 'กรุณากรอกข้อมูลให้ครบถ้วน',
		                timer: 5000
		            })
		        }
		        else {
		        	var id = $("#inputID").val();
		        	var firstname = $("#inputFirstName").val();
		            var lastname = $("#inputLastName").val();
		            var birthday = $("#inputBirthDay").val();
		            var email = $("#inputEmail").val();
		            var username = $("#inputUsername").val();
		            var password = $("#inputPassword").val();
		            var role = "member";

		            Swal.fire({
		               title: 'Are you sure ?',
		               text: 'คุณต้องการแก้ไขข้อมูล ใช่หรือไม่ ?',
		               icon: 'warning',
		               showCancelButton: true,
		               confirmButtonColor: '#3085d6',
		               cancelButtonColor: '#d33',
		               confirmButtonText: 'Comfirm',
		           	}).then((result) => {
			           	if (result.isConfirmed) {
		                    $.ajax({
								url: "update_user.php",
								type: 'POST',
								data: {
									u_id : id,
									u_firstname : firstname,
		                            u_lastname : lastname,
		                            u_birthday : birthday,
		                            u_email : email,
		                            u_username : username,
		                            u_password : password,
		                            u_role : role
								},
								cache: false,
								success: function (data) {
									$("#modalMemberEdit").modal('hide');
			                        $("#inputFirstName").val("");
			                        $("#inputLastName").val("");
			                        $("#inputBirthDay").val("");
			                        $("#inputEmail").val("");
			                        $("#inputUsername").val("");
			                        $("#inputPassword").val("");
			                        $("#btn-save").attr("disabled", false);

									Swal.fire({
										icon: 'success',
										title: 'Success !',
										text: 'แก้ไขข้อมูลสำเร็จแล้ว',
										timer: 5000
									})

									$("#responseName").html(firstname + "\xa0\xa0" + lastname);
			            			$("#responseBirthDay").html(birthday);
			            			$("#responseEmail").html(email);
			            			$("#responseUsername").html(username);
								},
								error: function (error) {
									console.log("error is " + error);
								}
							});
		                }
		        	})
		        }
		    });
        });
    </script>

</body>
</html>