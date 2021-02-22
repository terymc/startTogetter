<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewreport" content="width=device-width",initial-scale="1.0">
	<title>Start Together</title>

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
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet" />
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" crossorigin="anonymous" />
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" crossorigin="anonymous" />
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.18.2/dist/bootstrap-table.min.css" />
    <!-------------------------------------------------------------------------------------------------------------------------------------->

    <style>

        body, html, div, h1, h2, h3, h5, h4, h6, p, b,
        a, span, small, table, tr, td, label, strong, option {
            font-family: 'Kanit', sans-serif;
        }

        input::-webkit-outer-spin-button,
		input::-webkit-inner-spin-button {
			-webkit-appearance: none;
			margin: 0;
		}

		#title_line {
            margin-top: 10px; 
            margin-bottom: 20px;
            border-width: 8px;
            border-color: #262e41;
        }

        #listType {
        	width: 250px;
        	height: 38px;
        }

        #goalLabel, #accountLabel, #titleLabel, #typeLabel {
        	font-size: 18px;
        	color: black;
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
		            			<td align="center" id="user_img">
		            				<img class="img-responsive img-rounded" src="lib/index/images/logo2.png" alt="User picture" style="width: 200px; margin-bottom: 15px;">
		            			</td>
		            		</tr>
		            		<tr>
		            			<td align="center">
		            				<span style="color: #fff; margin-top: 15px; " id="user_data"></span>
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
					<li id="li_myProject"><a href="#">โปรเจคของฉัน</a></li>
		            <li id="li_logout" ><a id="menu-logout" href="#">ออกจากระบบ</a></li>
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
    		<td colspan="2">
    			<div style="margin-top: 50px;">
    				<table>
    					<tr>
    						<td>
    							<div class="form-group">
								    <label id="goalLabel" style="margin-left: 2px;">งบประมานที่ต้องการ</label>
								    <input type="number" class="form-control" id="inputGoal" placeholder="งบประมานที่ต้องการ">
								</div>
    						</td>
    						<td>
    							<div class="form-group" style="margin-left: 10px;">
								    <label id="accountLabel" style="margin-left: 2px;">เลขที่บัญชีรับเงิน</label>
								    <input type="number" class="form-control" id="inputAccount" placeholder="เลขที่บัญชี" minlength="10" maxlength="10">
								</div>
    						</td>
    					</tr>
    				</table>
    				<hr id="title_line" />
    			</div>
    		</td>
    	</tr>
    	<tr>
    		<td colspan="2">
    			<table width="1120">
    				<tr>
    					<td width="860">
    						<div class="form-group">
								<label id="titleLabel" style="margin-left: 2px;">หัวข้อโปรเจค</label>
								<input type="text" class="form-control" id="inputTitle" placeholder="หัวข้อโปรเจค">
							</div>
    					</td>
    					<td>
    						<div class="form-group" style="margin-left: 10px;">
								<label id="typeLabel" style="margin-left: 2px;">ประเภทหัวข้อ</label>
								<select class="form-control" id="listType">
									<option value="null">เลือกประเภท</option>
									<option value="การเกษตร">การเกษตร</option>
									<option value="เทคโนโลยี">เทคโนโลยี</option>				  
								</select>
							</div>
    					</td>
    				</tr>
    			</table>
    		</td>
    	</tr>
    	<tr>
    		<td colspan="2">
    			<textarea name="Article_content" id="Artticle_editor"></textarea>
    		</td>
    	</tr>
    	<tr>
    		<td align="left">
    			<button type="button" id="btnWebAddPic" class="btn btn-warning mb-2" 
    				style="width: 190px; height: 50px; border-radius: 3px; margin-top: 20px;">

    				ไปยังหน้าเว็ปฝากรูป &nbsp;&nbsp;<i class="fa fa-images"></i></i>
                </button>
    		</td>
    		<td align="right">
    			<button type="button" id="btnCreateProject" class="btn btn-primary mb-2" 
    				style="width: 190px; height: 50px; border-radius: 3px; margin-top: 20px;">

    				สร้างโปรเจค &nbsp;&nbsp;<i class="fa fa-plus-circle"></i>
                </button>
    		</td>
    	</tr>
    </table>

	<!-------------------------------------------------------------------------------------------------------------------------------------->
	<script type="text/javascript" src="https://cdn.omise.co/omise.js"></script>
	<!-------------------------------------------------------------------------------------------------------------------------------------->
	<script src="ckeditor/ckeditor.js"></script>
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
    <script src="https://unpkg.com/bootstrap-table@1.18.2/dist/bootstrap-table.min.js"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="https://unpkg.com/bootstrap-table@1.18.2/dist/extensions/key-events/bootstrap-table-key-events.min.js"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->

	<script>

		CKEDITOR.replace( 'Artticle_editor', {
        	height: 300
    	});

    	CKEDITOR.addCss('Artticle_editor { font-family: "Kanit", sans-serif;}');


		$(document).ready(function()  {

			if (sessionStorage.getItem("u_id") == null) {

				$("#user_data").html("<a href='login.php'>เข้าสู่ระบบ / สมัครสมาชิก</a>");
				$("#li_logout").remove();
				$("#li_myProject").remove();
				$("#userEdit").remove();

			} else if(sessionStorage.getItem("u_id") == "") {

				$("#user_data").html("<a href='login.php'>เข้าสู่ระบบ / สมัครสมาชิก</a>");
				$("#li_logout").remove();
				$("#li_myProject").remove();
				$("#userEdit").remove();

			} else {

				$("#user_img").html("<img class='img-responsive img-rounded' src='https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg' alt='User picture' style='width: 150px; margin-bottom: 15px;'>");
				$("#user_data").html("ผู้ใช้ : " + sessionStorage.getItem("u_firstname") + " " + sessionStorage.getItem("u_lastname"));

			}

        	$('#sidebarCollapse').on('click', function() {

				$('#sidebar, #content').toggleClass('active');
				$('.collapse.in').toggleClass('in');
				$('a[aria-expanded=true]').attr('aria-expanded', 'false');

          	});

          	$("#btnWebAddPic").click(function () {
          		window.open('https://www.img.in.th/', '_blank');
          	});

          	$("#btnCreateProject").click(function () {
          		if($("#inputGoal").val() == "" || $("#inputAccount").val() == "" || $("#inputTitle").val() == "" 
          			|| $("#listType").val() == "null" || CKEDITOR.instances.Artticle_editor.getData() == ""){
          			Swal.fire({
		                icon: 'error',
		                title: 'ดำเนินการไม่สำเร็จ',
		                text: 'คุณกรอกข้อมูลไม่ครบ กรุณากรอกข้อมูลให้ครบถ้วน',
		                width: 700,
		                timer: 5000
		            })
          			
          		} else {
          			Swal.fire({
		               	title: 'Are you sure ?',
		               	text: 'คุณต้องการ สร้างโปรเจค ?',
		               	icon: 'question',
		               	showCancelButton: true,
		               	confirmButtonColor: '#3085d6',
		               	cancelButtonColor: '#d33',
		               	confirmButtonText: 'Comfirm',
		           	}).then((result) => {
			           	if (result.isConfirmed) {
			           		$.ajax({
		                        url: "insert_project.php",
		                        type: 'POST',
		                        data: {
		                            u_id : sessionStorage.getItem("u_id"),
		                            u_firstname : sessionStorage.getItem("u_firstname"),
		                            u_lastname : sessionStorage.getItem("u_lastname"),
		                            u_email : sessionStorage.getItem("u_email"),
		                            proj_desc : CKEDITOR.instances.Artticle_editor.getData(),
		                            proj_goal : $("#inputGoal").val(),
		                            proj_title : $("#inputTitle").val(),
		                            proj_type : $("#listType").val(),
		                            proj_account : $("#inputAccount").val(),
		                        },
		                        cache: false,
		                        success: function (data) {

		                          	Swal.fire({
		                              	icon: 'success',
		                              	title: 'สร้างโปรเจคสำเร็จ',
		                              	text: 'ปิดหน้าต่างนี้เพื่อดูโปรเจคของคุณ',
		                              	timer: 5000
		                          	})

		                          	window.location = "project_detail.php?proj_id=" + data
		                        },
		                        error: function (error) {
		                          	console.log("error is " + error);
		                        }
		                    });
		              	}
		        	})
          		}
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

			OmiseCard.configure({
		    	publicKey: "pkey_test_5mxfwdyztyqm17dzf9q"
		  	});
		});

	</script>

</body>
</html>


