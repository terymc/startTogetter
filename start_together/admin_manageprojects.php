<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="lib/sidebar.less">
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" crossorigin="anonymous">
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.18.2/dist/bootstrap-table.min.css">
    <!-------------------------------------------------------------------------------------------------------------------------------------->

    
    <style>
        body, html, div, h1, h2, h3, h5, p, a, span {
          font-family: 'Kanit', sans-serif;
        }

        #btn-save{
          width: 200px;
          height: 45px;
        }

        #title_line {
            margin-top: 30px; 
            margin-bottom: 20px;
            border-width: 8px;
            border-color: #262e41;
        }
    </style>

    <title>Admin</title>
  </head>
  <body>

  	 <div class="page-wrapper chiller-theme toggled">
        <a href="#" id="show-sidebar" class="btn btn-sm btn-dark" style="width: 100px; height: 50px">
            Console <br />
            <i class="fa fa-sliders"></i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a>Console</a>
                    <div id="close-sidebar">
                        <i class="fa fa-close"></i>
                    </div>
                </div>
                <div class="sidebar-header">
                    <div class="user-pic">
                        <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg" alt="User picture">
                    </div>
                    <div class="user-info">
                        <span id="adminName" class="user-name"></span>
                        <span class="user-role">Administrator</span>
                    </div>
                </div>
                <!-- sidebar-header  -->

                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>Menu</span>
                        </li>
                        <li>
                            <a href="admin_manageuser.php">
                                <i class="fa fa-user"></i>
                                <span>Member</span>
                            </a>
                        </li>
                        <li>
                            <a href="./admin_manageprojects.php">
                                <i class="fas fa-file-invoice-dollar"></i>
                                <span>Projects</span>
                            </a>
                        </li>
                        <li>
                            <a href="admin_manageReqmoney.php">
                               	<i class="fas fa-search-dollar"></i>
                                <span>Request Money</span>
                            </a>
                        </li>
                        <li>
                            <a href="admin_manageDonateHistory.php">
                               	<i class="fa fa-donate"></i>
                                <span>Donate History</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>

            <!-- sidebar-content  -->
            <div class="sidebar-footer">
                <a href="#" id="btn-logout">
                    <i class="fa fa-power-off"></i>&nbsp;&nbsp;LOGOUT
                </a>
            </div>
        </nav>

         <!-- sidebar-wrapper  -->
        <main class="page-content">
            <div id="main">
                <br />
                <table class="table-border" width="1300" align="center" border="0">
                    <tr>
                        <td colspan="2">
                            <br>
                            <h2 style="margin-left: 20px;"><b>Project</b>&nbsp;&nbsp;<i class="fas fa-file-invoice-dollar"></i></h2>
                            <hr id="title_line" style="margin-top: 30px;" />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div id="toolbar"></div>
                            <table
								  id="table"
								  data-toggle="table"
								  data-toolbar="#toolbar"
	                              data-search="true"
	                              data-card-view="true"
	                              data-show-export="true"
	                              data-show-columns-toggle-all="true"
	                              data-show-columns="true"
	                              data-page-list="[5, 10, 20, 100]"
	                              data-pagination="true"
	                              data-pagination-pre-text="Previous"
	                              data-pagination-next-text="Next"
	                              data-page-size="5"
								  data-url="http://localhost:3000/projects">
							  <thead class="thead-dark">
							    <tr>
							      <th data-field="proj_id" data-sortable="true">#</th>
							      <th data-field="u_id" data-sortable="true">User Id</th>
							      <th data-field="proj_title" data-sortable="true">Title</th>
							      <th data-field="proj_goal" data-search-formatter="false" data-sortable="true">Goal</th>
							      <th data-field="proj_money" data-search-formatter="false" data-sortable="true">Money</th>
							      <th data-field="proj_type" data-sortable="true">Type</th>
							      <th data-field="proj_account" data-search-formatter="false" data-sortable="true">Account</th>
							      <th data-field="proj_repacc" data-search-formatter="false" data-sortable="true">Omise rep</th>
							      <th data-field="proj_status" data-sortable="true">Status</th>
							      <th data-align="center" data-field="operate" data-search-formatter="false" data-formatter="operateFormatter" data-events="operateEvents"></th>
							    </tr>
							  </thead>
							</table>
                        </td>
                    </tr>
                </table>
            </div>
        </main>
    </div>

    <!----Modal Edit---->
    <div class="modal fade" id="modalMemberEdit" tabindex="-1" role="dialog" aria-hidden="true">
      	<div class="modal-dialog" role="document">
        	<div class="modal-content">
          		<div class="modal-header">
	            	<h5 class="modal-title">Edit Member</h5>
	            	<button type="button" class="close" id="modalMemberEditClose" aria-label="Close">
	              		<span aria-hidden="true">&times;</span>
	            	</button>
	          	</div>
	          	<div class="modal-body">
	            	<form>
	              		<table align="center">
	                		<tr style="height: 90px">
	                  			<td>
	                    			<div class="form-row">
	                      				<div class="col">
	                        				<label for="inputFirstName">Firstname</label>
	                        				<input type="hidden" id="inputID">
	                        				<input type="text" id="inputFirstName" class="form-control" placeholder="Firstname" onkeyup="checkForm()">
	                      				</div>
	                      				<div class="col">
	                        				<label for="inputLastName">lastname</label>
	                        				<input type="text" id="inputLastName" class="form-control" placeholder="Lastname" onkeyup="checkForm()">
	                      				</div>
	                    			</div>
	                  			</td>
	                		</tr>
	                		<tr style="height: 90px;">
	                  			<td>
	                    			<div>
				                    	<label for="inputEmail">Email</label>
				                      	<input type="text" id="inputEmail" class="form-control" placeholder="Email" onkeyup="checkForm()">
				                    </div>
				                </td>
	                		</tr>
	                		<tr style="height: 90px;">
	                  			<td>
				                    <div>
				                      	<label for="inputBirthDay">Birthday</label>
				                      	<input type="date" id="inputBirthDay" class="form-control" placeholder="BirthDay" onkeyup="checkForm()" onchange="checkForm()">
				                    </div>
	                  			</td>
	                		</tr>
	                		<tr style="height: 90px;">
	                  			<td>
	                    			<div class="form-row">
	                      				<div class="col">
					                        <label for="inputUsername">Username</label>
					                        <input type="text" id="inputUsername" class="form-control" placeholder="Username" onkeyup="checkForm()">
					                    </div>
		                      			<div class="col">
					                        <label for="inputPassword">Password</label>
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
    <script src="https://unpkg.com/tableexport.jquery.plugin/tableExport.min.js"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="https://unpkg.com/bootstrap-table@1.18.2/dist/extensions/export/bootstrap-table-export.min.js"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->


    <script type="text/javascript">

    	var $table = $("#table");

    	function operateFormatter(value, row, index) {
          return [                
               '<a class="remove" href="javascript:void(0)" title="Remove"><i style="font-size: 25px; color: #dc3545;" class="fas fa-trash"></i></a>'
            ].join('')
        }

       window.operateEvents = {

            'click .remove': function (e, value, row, index) {

               Swal.fire({
	               title: 'Are you sure ?',
	               text: 'คุณต้องการลบข้อมูลโปรเจคนี้ ใช่หรือไม่ ?',
	               icon: 'warning',
	               showCancelButton: true,
	               confirmButtonColor: '#3085d6',
	               cancelButtonColor: '#d33',
	               confirmButtonText: 'Comfirm',
	           }).then((result) => {
		           	if (result.isConfirmed) {
	                    $.ajax({
							url: "delete_projects.php",
							type: 'GET',
							data: {proj_id : row.proj_id},
							cache: false,
							success: function (data) {
								Swal.fire({
								    icon: 'success',
								    title: 'Success !',
								    text: 'ลบข้อมูลสำเร็จแล้ว',
								    timer: 5000
								})
								$table.bootstrapTable('refreshOptions', {url: 'http://localhost:3000/projects'})
							},
							error: function (error) {
								console.log("error is " + error);
							}
						});
	                }
	        	})
        	}
    	}


	    $(document).ready(function () {

		    $("#close-sidebar").click(function () {
		        $(".page-wrapper").removeClass("toggled");
		    });

		    $("#show-sidebar").click(function () {
		        $(".page-wrapper").addClass("toggled");
		    });

		    $("#btn-logout").click(function () {
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

		           		window.location = "login.php";
	                }
	        	})
		    });

		    $("#adminName").html(sessionStorage.getItem("u_firstname") + " " + sessionStorage.getItem("u_lastname"));
		});
    </script>
  </body>
</html>