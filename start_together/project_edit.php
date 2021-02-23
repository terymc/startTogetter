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
        a, span, small, table, tr, td, label, strong {
            font-family: 'Kanit', sans-serif;
        }

        #title_line {
            margin-top: 30px; 
            margin-bottom: 20px;
            border-width: 8px;
            border-color: #262e41;
        }

        #textTitle, #iconTitle {
            font-size: 30px;
        }

        #card-view {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        #btnEditProject, #btnEndProject, #btnBrackerList{
            width: 200px;
            height: 50px;
        }

        #btn-addmoney {
            width: 150px;
            height: 40px;
        }

        #moneyLabel {
            font-size: 16px;
            color: black;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
          -webkit-appearance: none;
          margin: 0;
        }

    </style>
</head>
<body style="background-image: url('lib/member_profile/images/member_profile_bg.png');">

    <input type="hidden" id="proj_id" value="<?php echo $_GET['proj_id']?>"/>
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
					<li id="li_myProject"><a href="my_project.php">โปรเจคของฉัน</a></li>
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
    		<td align="center" colspan="2">
                <div align="left" class="card" id="card-view" style="margin-top: 50px;">
                    <div class="card-body">
                        <h1 style="margin-top: 30px;" id="card-title">Title</h1>
                        <hr id="title_line" />
                        <h1 align="left" id="card-description" class="card-title">Description</h1>                  
                    </div>
                    <div align="left" class="card-footer text-muted">
                        <table>
                            <tr>
                                <td>
                                    <a>
                                        <div class="card" style="width: 170px; margin-right: 10px;">
                                            <div align="center" id="goal" class="card-body">;
                                                <div style='color : black;'>GOAL</div>
                                            </div>
                                        </div>
                                    </a>
                                </td>
                                <td>
                                    <a>
                                        <div align="center" class="card" style="width: 170px; margin-right: 10px;">
                                            <div id="money" class="card-body">
                                                 <div style='color : black;'>MONEY</div>
                                            </div>
                                        </div> 
                                    </a>    
                                </td>
                                <td width="500" align="right">
                                    <button style="margin-right: 10px;" id="btnBrackerList" type="button" class="btn btn-dark">
                                        <i style="font-size: 25px;" class="fas fa-users"></i>
                                        &nbsp;&nbsp;ผู้สนับสนุน
                                    </button>

                                </td>
                                <td align="right">
                                    <button style="margin-right: 10px;" id="btnEditProject" type="button" class="btn btn-warning">
                                        <i style="font-size: 25px;" class="fas fa-edit"></i>
                                        &nbsp;&nbsp;แก้ไขโปรเจค
                                    </button>

                                </td>
                                <td align="right">
                                    <button style="margin-right: 10px;" id="btnEndProject" type="button" class="btn btn-info">
                                        <i style="font-size: 25px;" class="fas fa-dollar-sign"></i>
                                        &nbsp;&nbsp;ขอรับเงินโดเนท
                                    </button>  
                                </td>
                            </tr>
                        </table>
                        </div>
                    </div>
                </div>
    		</td>
    	</tr>
    </table>

    <div class="modal fade" id="modalBrackerList" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 style="color: black; font-size: 18px;" class="modal-title" id="exampleModalLabel">ผู้สนับสนุน</h5>
                    <button type="button" class="close" id="modalBrackerListClose" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table
                        id="table"
                        data-toggle="table"
                        data-toolbar="#toolbar"
                        data-show-export="true"
                        data-show-refresh="true"
                        data-search="true"
                        data-card-view="true"
                        data-page-list="[5, 10, 20, 100]"
                        data-pagination="true"
                        data-pagination-pre-text="Previous"
                        data-pagination-next-text="Next"
                        data-page-size="5"
                        data-url="get_data_bracker.php">
                        <thead class="thead-dark">
                            <tr>
                                <th data-field="u_firstname" data-sortable="true">ชื่อผู้สนับสนุน</th>
                                <th data-field="SUMdh" data-sortable="true">ยอดโดเนท</th>
                            </tr>
                        </thead>
                    </table>
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
    <script src="https://unpkg.com/bootstrap-table@1.18.2/dist/bootstrap-table.min.js"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="https://unpkg.com/bootstrap-table@1.18.2/dist/extensions/key-events/bootstrap-table-key-events.min.js"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script type="text/javascript" src="https://cdn.omise.co/omise.js"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->

    <script type="text/javascript">

        var $table = $("#table");

        $.ajax({
            url: 'get_data_request_money.php',
            contentType: 'application/json',
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            success: function (response) {

                for(i=0; i<response.length; i++) {
                    if($("#proj_id").val() == response[i].proj_id && response[i].rm_status == "โอนจ่ายเรียบร้อยแล้ว") {

                        $("#btnEndProject").html('<i style="font-size: 25px;" class="fas fa-check"></i>\xa0\xa0 โอนจ่ายเรียบร้อยแล้ว')
                        $("#btnEndProject").attr("disabled", "true")
                    }
                    else if($("#proj_id").val() == response[i].proj_id && response[i].rm_status == "รอการโอนจ่าย") {

                        $("#btnEndProject").html('<i style="font-size: 25px;" class="fas fa-clock"></i>\xa0\xa0 รอการโอนจ่าย....')
                        $("#btnEndProject").attr("disabled", "true")
                    }

                }
            },
            error: function (error) {
                console.log(error);
            }
        });

        $.ajax({
            url:'countBacker.php',
            type:"POST",
            data:{
                proj_id : $("#proj_id").val(),
            },
            success:function(countdata){
                $("#bracker").html("BRACKER : " + countdata);
                console.log(countdata);
            },
            error:function(error){
                                                    
            }
        });


        OmiseCard.configure({
            publicKey: "pkey_test_5mxfwdyztyqm17dzf9q"
        });

        var button = $("#btn-addmoney");
        var form = $("#checkoutForm");


        $(document).ready(function() {

            $table.bootstrapTable('refreshOptions', {url: 'get_data_bracker.php?proj_id=' + $("#proj_id").val()})

            var money4update = 0;
            var proj_id = $("#proj_id").val();
            var u_id = "";
            var desc = "";
            var bracker = "";
            var money = "";
            var goal = ""
            var title = "";
            var firstname = "";
            var lastname = "";

            $.ajax({
                url: 'get_data_all_project.php',
                contentType: 'application/json',
                headers: { "Content-Type": "application/x-www-form-urlencoded" },
                success: function (response) {
                    for(i=0; i<response.length; i++) {
                        if(proj_id == response[i].proj_id) {

                            u_id = response[i].u_id;
                            title = response[i].proj_title
                            desc = response[i].proj_desc
                            bracker = response[i].proj_bracker
                            money = response[i].proj_money
                            goal = response[i].proj_goal

                            $.ajax({
                                url: 'get_data_user.php',
                                contentType: 'application/json',
                                headers: { "Content-Type": "application/x-www-form-urlencoded" },
                                success: function (response) {

                                    for(i=0; i<response.length; i++) {
                                        if(u_id == response[i].u_id) {

                                            firstname = response[i].u_firstname
                                            lastname = response[i].u_lastname

                                            $("#card-title").html("<i id='iconTitle' class='fas fa-thumbtack'></i>\xa0\xa0\xa0\xa0<b id='textTitle'>" + title + "</b>")
                                            $("#card-description").html("<p>เจ้าของโปรเจค\xa0:\xa0" + firstname + "\xa0\xa0" + lastname + "</p>" + desc)
                                            $("#money").html("<div style='color : black;'>MONEY : " + money + "</div>")
                                            $("#goal").html("<div style='color : black;'>GOAL : " + goal + "</div>")
                                        }
                                    }
                                },
                                error: function (error) {
                                    console.log(error);
                                }
                            });
                        }
                    }
                },
                error: function (error) {
                    console.log(error);
                }
            });

			if (sessionStorage.getItem("u_id") == null) {

				$("#user_data").html("<a href='login.php'>เข้าสู่ระบบ / สมัครสมาชิก</a>");
				$("#li_logout").remove();
				$("#li_myProject").remove();
				$("#userEdit").remove();
                $("#btnDonate").remove();

			} else if(sessionStorage.getItem("u_id") == "") {

				$("#user_data").html("<a href='login.php'>เข้าสู่ระบบ / สมัครสมาชิก</a>");
				$("#li_logout").remove();
				$("#li_myProject").remove();
				$("#userEdit").remove();
                $("#btnDonate").remove();

			} else {

				$("#user_img").html("<img class='img-responsive img-rounded' src='https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg' alt='User picture' style='width: 150px; margin-bottom: 15px;'>");
				$("#user_data").html("ผู้ใช้ : " + sessionStorage.getItem("u_firstname") + " " + sessionStorage.getItem("u_lastname"));

			}

        	$('#sidebarCollapse').on('click', function() {

				$('#sidebar, #content').toggleClass('active');
				$('.collapse.in').toggleClass('in');
				$('a[aria-expanded=true]').attr('aria-expanded', 'false');

          	});

            $("#btnBrackerList").click(function () {
                $("#modalBrackerList").modal("show");
            });

            $("#modalBrackerListClose").click(function () {
                $("#modalBrackerList").modal("hide");
            });

            $("#btnEditProject").click(function () {
                window.location = "editor_form_edit.php?proj_id=" + $("#proj_id").val();
            });

            $("#btnEndProject").click(function () {
                if(money < 100) {
                    Swal.fire({
                        icon: 'error',
                        title: 'ไม่สามารถดำเนินการได้ !',
                        text: 'คุณต้องมียอดเงินขั้นต่ำ 100 บาท ถึงจะสามารถถอนเงินได้',
                        width: 700,
                        timer: 5000
                    })
                } else {
                    Swal.fire({
                       title: 'Are you sure ?',
                       text: 'หากคุณขอรับเงินโดเนท โปรเจคของคุณจะไม่แสดงแบบสาธารณะอีกต่อไป คุณต้องการขอรับเงินใช่หรือไม่ ?',
                       icon: 'warning',
                       width: 700,
                       showCancelButton: true,
                       confirmButtonColor: '#3085d6',
                       cancelButtonColor: '#d33',
                       confirmButtonText: 'Comfirm',
                    }).then((result) => {
                        if (result.isConfirmed) {

                            $.ajax({
                                url: 'get_data_all_project.php',
                                contentType: 'application/json',
                                headers: { "Content-Type": "application/x-www-form-urlencoded" },
                                success: function (response) {

                                    for(i=0; i<response.length; i++) {
                                        if(proj_id == response[i].proj_id) {
                                            $.ajax({
                                                url: "insert_request_money.php",
                                                type: 'POST',
                                                data: {
                                                   u_id : sessionStorage.getItem("u_id"),
                                                   proj_id : proj_id,
                                                   proj_repacc : response[i].proj_repacc,
                                                   proj_money : response[i].proj_money
                                                },
                                                cache: false,
                                                success: function (data) {

                                                    Swal.fire({
                                                        icon: 'success',
                                                        title: 'ดำเนินการเสร็จสิ้น',
                                                        text: 'ส่งการร้องขอเรียบร้อยแล้ว โปรดรอแอดมินอนุมัติและทำการโอนเงินภายใน 1-3 วันทำการ',
                                                        width: 600,
                                                        timer: 5000
                                                    })

                                                    $("#btnEndProject").html('<i style="font-size: 25px;" class="fas fa-clock"></i>\xa0\xa0 รอการโอนจ่าย....')
                                                    $("#btnEndProject").attr("disabled", "true")
                                                    
                                                },
                                                error: function (error) {
                                                    console.log("error is " + error);
                                                }
                                            });
                                        }
                                    }
                                },
                                error: function (error) {
                                    console.log(error);
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

            
        });
    </script>
</body>
</html>