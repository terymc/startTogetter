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
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" crossorigin="anonymous">
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" crossorigin="anonymous">
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.18.2/dist/bootstrap-table.min.css">
    <!-------------------------------------------------------------------------------------------------------------------------------------->

    <style>

        body, html, div, h1, h2, h3, h5, h4, h6, p, b,
        a, span, small, table, tr, td, label, option {
            font-family: 'Kanit', sans-serif;
        }

        #listType {
            width: 170px;
            height: 37px;
            margin-left: 490px;
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
		            				<a style="font-size: 17px;" href="user_profile.php" id="userEdit">
                                        แก้ไขข้อมูล<i style="margin-left: 10px;" class="fas fa-edit"></i>
                                    </a>
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

    <div id="toolbar">
        <table>
            <tr>
                <td>
                    <div class="form-group mx-sm-0 mb-0">
                        <button type="button" id="btnCreateProject" class="btn btn-primary mb-2" style="width: 190px; height: 40px; border-radius: 3px;">
                                        สร้างโปรเจคใหม่ &nbsp;&nbsp;
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                        </button>
                    </div>
                </td>
                <td>
                    <div class="form-group" style="margin-left: 10px;">
                        <select class="form-control" id="listType">
                            <option value="ทั้งหมด">ทั้งหมด</option>
                            <option value="การเกษตร">การเกษตร</option>
                            <option value="เทคโนโลยี">เทคโนโลยี</option>
                            <option value="สังคม">สังคม</option>
                            <option value="สัตว์">สัตว์</option>                 
                        </select>
                    </div>
                </td>
            </tr>
        </table>
    </div>

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
                <div style="margin-top: 30px;">
                    <table
                        style="background-color: #fff;"
                        id="table"
                        data-toggle="table"
                        data-toolbar="#toolbar"
                        data-search="true"
                        data-card-view="true"
                        data-show-refresh="true"
                        data-page-list="[5, 10, 20, 100]"
                        data-pagination="true"
                        data-pagination-pre-text="Previous"
                        data-pagination-next-text="Next"
                        data-page-size="5"
                        data-show-header="false"
                        data-url="get_data_project.php">
                        <thead class="thead-dark">
                            <tr>
                                <th data-field="proj_title" data-formatter="titleFormatter"></th>
                                <th data-field="u_firstname" data-formatter="nameFormatter" data-search-formatter="false"></th>
                                <th data-field="proj_goal" data-formatter="goalFormatter" data-search-formatter="false"></th>
                                <th data-field="proj_bracker" data-formatter="brackerFormatter" data-search-formatter="false"></th>
                                <th data-field="proj_money" data-formatter="moneyFormatter" data-search-formatter="false"></th>
                                <th data-align="center" data-field="operate" data-search-formatter="false" data-formatter="operateFormatter" data-events="operateEvents"></th>
                            </tr>
                        </thead>
    	           </table>
                </div>
    		</td>
    	</tr>
    </table>

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

    <script type="text/javascript">

        var $table = $("#table");

        function titleFormatter(value, row, index) {
            return "<a style='color: #0a5a97;' href='project_detail.php?proj_id=" + row.proj_id + "'><h2><b>" + value + "</a></h2></a>";
        }


        function nameFormatter(value, row, index) {
            return "OWNER :\xa0\xa0" + row.u_firstname + " " + row.u_lastname;
        }

        function goalFormatter(value, row, index) {
            return "GOAL :\xa0\xa0" + value + "";
        }

        function brackerFormatter(value, row, index) {
            return "BRACKER :\xa0\xa0" + value;
        }

        function moneyFormatter(value, row, index) {
            return "MONEY :\xa0\xa0" + value;
        }

        function operateFormatter(value, row, index) {
          return [ 
               '<button style="margin-left: 1000px;" type="button" class="btn btn-warning" id="detail"><i color: #dc3545;" class="fas fa-search"></i>\xa0\xa0รายละเอียด</button>'
            ].join('')
        }

       window.operateEvents = {
       		'click #detail': function (e, value, row, index) {
                window.location = "project_detail.php?proj_id=" + row.proj_id
        	},
    	}

        $(document).ready(function() {
            $("#listType").change(function() {
                if($("#listType").val() == "ทั้งหมด") {

                    $table.bootstrapTable('refreshOptions', {url: 'get_data_project.php'})

                } else {

                    $table.bootstrapTable('refreshOptions', {url: 'get_data_project_type.php?proj_type=' + $("#listType").val()})

                }
            });

			if (sessionStorage.getItem("u_id") == null) {

				$("#user_data").html("<a href='login.php'>เข้าสู่ระบบ / สมัครสมาชิก</a>");
				$("#li_logout").remove();
				$("#li_myProject").remove();
				$("#userEdit").remove();
                $("#btnCreateProject").remove();
                $("#listType").css({"width": "170px", "height": "37px", "margin-left": "680px"});

			} else if(sessionStorage.getItem("u_id") == "") {

				$("#user_data").html("<a href='login.php'>เข้าสู่ระบบ / สมัครสมาชิก</a>");
				$("#li_logout").remove();
				$("#li_myProject").remove();
				$("#userEdit").remove();
                $("#btnCreateProject").remove();
                $("#listType").css({"width": "170px", "height": "37px", "margin-left": "680px"});

			} else {

				$("#user_img").html("<img class='img-responsive img-rounded' src='https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg' alt='User picture' style='width: 150px; margin-bottom: 15px;'>");
				$("#user_data").html("ผู้ใช้ : " + sessionStorage.getItem("u_firstname") + " " + sessionStorage.getItem("u_lastname"));
                
			}

        	$('#sidebarCollapse').on('click', function() {
				$('#sidebar, #content').toggleClass('active');
				$('.collapse.in').toggleClass('in');
				$('a[aria-expanded=true]').attr('aria-expanded', 'false');
          	});

            $("#btnCreateProject").click(function () {
                window.location = "editor_form.php"
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