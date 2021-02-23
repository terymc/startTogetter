<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

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

   	<style>
      	body, html, div, h1, h2, h3, h5, h4, h6, p, a, span, small {
         	font-family: 'Kanit', sans-serif;
        }

        span {
        	font-size: 17px;
        }

        #btn-search {
        	border-radius: 2px;
        	width: 200px;
        	height: 70px;
        	font-size: 25px;
        }
    </style>
</head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

	<div id="preloader">
        <div class="loader">
        	<img src="lib/index/images/loader.gif" alt="#" />
        </div>
    </div>
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

    <div id="content">
        <header class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                     	<div class="logo_main">
                        	<a href="index.php"><img src="lib/index/images/logo1.png" style="width: 300px;" /></a>
                     	</div>
                  	</div>
                  	<div class="col-sm-6">
                     	<button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn"><img src="lib/index/images/menu_icon.png"></button>
                  	</div>
               </div>
            </div>
        </header>
        <div class="ulockd-home-slider">
            <div class="container-fluid">
               	<div class="row">
                  	<div class="pogoSlider" id="js-main-slider">
                     	<div class="pogoSlider-slide" style="background-image: url(lib/index/images/content_1.png);">
                        	<div class="container">
                           		<div class="row">
		                            <div class="col-md-12">
		                                <div class="slide_text">
			                             	<h6 style="font-size: 40px;"></h6>
			                                <h3 style="font-size: 80px;">ไฟจราจรอัจริยะ</h3>
			                                <h4>Smart traffic light</h4>
			                                <br>
			                                <a class="readmore_bt" href="project_detail.php?proj_id=1">Read More</a>
		                                </div>
		                            </div>
                           		</div>
                        	</div>
                     	</div>
                     	<div class="pogoSlider-slide" style="background-image:url(lib/index/images/content_2.png);">
                        	<div class="container">
                           		<div class="row">
		                            <div class="col-md-12">
		                                <div class="slide_text">
			                                <h3 style="font-size: 80px;">แอพพลิเคชั่น</h3>
											                <h4>แปลภาษาน้องหมา</h4>
			                                <br>
			                                <a class="readmore_bt" href="project_detail.php?proj_id=4">Read More</a>
		                                </div>
		                            </div>
                           		</div>
                        	</div>
                     	</div>
                     	<div class="pogoSlider-slide" style="background-image:url(lib/index/images/content_3.png);">
                        	<div class="container">
                           		<div class="row">
                              		<div class="col-md-12">
                                 		<div class="slide_text">
                										 	<h3 style="font-size: 80px;">เครื่องประเมินสภาพดิน</h3>
                											<h4>เพื่อการเพราะปลูก</h4>
			                                <br>
			                                <a class="readmore_bt" href="project_detail.php?proj_id=3">Read More</a>
                                 		</div>
                              		</div>
                           		</div>
                        	</div>
                     	</div>
                  	</div>
               	</div>
            </div>
        </div>

        <div class="section dark_blue_layout white_fonts layout_padding">
            <div class="container">
                <div class="row">
                	<table align="center">
                		<tr>
                			<td align="center">
                				<h6 style="font-size: 40px; margin-top: 20px;">คุณสนใจอะไรอยู่ ?</h6>	
                			</td>
                			<td align="center">
                				<form class="news_submit_form">
	                              	<fieldset>
	                                 	<div class="field">
	                                    	<button id="btnGoToSearch" style="margin-left: 40px;" type="button">Search<i style="margin-left: 10px; font-size: 20px;" class="fas fa-search"></i></button>
	                                 	</div>
	                              	</fieldset>
	                            </form>
                			</td>
                		</tr>
                	</table>
            	</div>
         	</div>
        </div>

        <div class="section about_section layout_padding dash_bg">
            <div class="container">
                <div class="row">
                  	<div class="col-md-12">
                     	<div class="full">
	                        <div class="heading_main text_align_center">
	                        	<h1 style="font-style: bold; font-size: 40px;">เราให้อะไรคุณ ?</h1>
	                        </div>
                     	</div>
                  	</div>
               	</div>
               	<div class="row">
                  	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                     	<div class="full feature_box" style="height: 320px;">
	                        <div class="full icon">
	                        	<i style="font-size: 70px;" class="fas fa-laptop-code"></i>
	                        </div>
	                        <div class="full">
	                            <h4>โปรเจคที่คุณสนใจ</h4>
	                        </div>
                        	<div class="full">
                          		<p>โปรเจคต่างๆ มากมายจากแหล่งต่างๆ ที่คุณสนใจและอยากที่จะลงทุนหรือสนับสนุน หรือเป็นพื้นที่ให้คุณหาทุนไปลงมือทำอะไรบางอย่างที่คุณอยากทำ</p>
                        	</div>
                    	</div>
                	</div>
                  	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                     	<div class="full feature_box" style="height: 320px;">
                         	<div class="full icon">
                            	<i style="font-size: 70px;" class="fas fa-search"></i>
                         	</div>
                         	<div class="full">
                            	<h4>ค้นหาง่ายและสะดวกมาก</h4>
                         	</div>
                         	<div class="full">
                           		<p>สามารถค้นหาเรื่องที่ท่านสนใจหรือต้องการที่จะเรียนรู้ และค้นหาได้รวดเร็ว ใช้ง่าย</p><br/>
                         	</div>
                     	</div>
                  	</div>
                  	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                     	<div class="full feature_box" style="height: 320px;">
                         	<div class="full icon">
                            	<i style="font-size: 70px;" class="fas fa-user"></i>
                         	</div>
                         	<div class="full">
                            	<h4>ลงทะเบียนง่าย</h4>
                         	</div>
                         	<div class="full">
                           		<p>ระบบนี้สามารถลงทะเบียนได้ง่ายมากเพียงไม่กี่คลิก และลงได้ทุกเพศทุกวัยไม่จำกัดอายุ</p>
                         	</div>
                     	</div>
                  	</div>
                  	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                     	<div class="full feature_box" style="height: 320px;">
                         	<div class="full icon">
                            	<i style="font-size: 70px;" class="fas fa-share-alt"></i>
                         	</div>
                         	<div class="full">
                            	<h4>สังคมแห่งการแบ่งปัน</h4>
                         	</div>
                         	<div class="full">
                           		<p>พื้นที่แห่งนี้เปิดให้สมาชิกทุกท่านแบ่งปั่นความคิดของตนเองได้เพื่อให้สมาชิกท่าอื่นสามารถเรียนรู้ไปกับท่าน และเดินหน้าเติบโตไปพร้อมกับท่าน</p>
                         	</div>
                     	</div>
                  	</div>
               	</div>
            </div>
        </div>

        <div class="section about_section layout_padding padding_top_0">
            <div class="container">
                <div class="row">
                  	<div class="col-md-12">
                     	<div class="full">
	                        <div class="heading_main text_align_center">
	                        	<h1 style="font-style: bold; font-size: 40px;">เกี่ยวกับเรา</h1>
	                        </div>
                     	</div>
                  	</div>
               </div>
               <div class="row">
                	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                     	<div class="full">
                        	<div class="heading_small">
                          		<h4>Start Together</h4>
                        	</div>
                        	<p>
								ในโลกปัจจุบันที่เทคโนโลยีเข้ามามีบทบาทเป็นอย่างมาก การมีพื้นที่ออนไลน์จึงเป็นอีกหนึ่งทางเลือกให้กับผู้คนเพราะสามารถเข้าถึงได้ง่ายรวดเร็วและสะดวกสบาย 
								Start Together จัดทำขึ้นเพื่อให้เจ้าของสตาร์ทอัพจะต้องแสดงรายละเอียดของธุรกิจ 
								เป้าหมายทางธุรกิจ แผนการในการสร้างกำไร และจำนวนเงินทุนที่ต้องการ โดย Start Together 
								จะเป็นศูนย์กลางออนไลน์ มาไว้ที่นี่และเมื่อมีผู้สนใจในแนวคิดและแผนงานเขาก็สามารถให้เงินทุนซึ่งอาจจะเป็นในรูปแบบของการจ่ายเงินสนับสนุน 
								ซึ่งเปิดโอกาสให้ทุกคนที่สนใจและมีความเชื่อในความคิดของสตาร์ทอัพนั้นๆ สามารถร่วมสนับสนุนเงินทุนได้
                        	</p>
                      	</div>
                  	</div>
                  	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                     	<div class="full text_align_center">
                        	<img class="img-responsive" src="lib/index/images/f1.png" alt="#" />   
                      	</div>
                  	</div>
               	</div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="footer-box">
            <div class="container">
               	<div class="row">
                  	<div class="col-md-12">
                     	<div class="full">
	                        <div class="heading_main text_align_center white_fonts margin-bottom_30">
	                           <h2>Contact us</h2>
	                        </div>
                     	</div>
                  	</div>
               	</div>
               	<div class="row">
                  	<div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                     	<div class="full footer_blog f_icon_1">
                         	<p>Address<br><small>IT (Enterprise Software)<br>SUT<br>Nakhon Ratchasima, Thailand</small></p>
                     	</div>
                  	</div>

                  	<div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                     	<div class="full footer_blog f_icon_2">
                        	<p>Phone<br><small>098-261-2614<br>Monday - Sunday<br>08:00 am - 05:00 pm</small></p>
                    	</div>
                  	</div>

                  	<div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                     	<div class="full footer_blog f_icon_3">
                        	<p>Email<br><small>teemaximum147@gmail.com<br>noobmaster@gmail.com</small></p>
                     	</div>
                  	</div>

                  	<div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                     	<div class="full footer_blog_last">
                        	<p>Social media</p>
                         	<p>
	                            <ul>
	                            	<li><a href="https://www.facebook.com/toeysosmart" target="blank"><i class="fab fa-facebook"></i></a></li>
	                              	<li><a href="https://www.instagram.com/teeson_will/" target="blank"><i class="fab fa-instagram"></i></i></a></li>
	                              	<li><a href="https://www.youtube.com/channel/UCoiEtD4v1qMAqHV5MDI5Qpg" target="blank"><i class="fab fa-youtube"></i></a></li>
	                            </ul>
                         	</p>
                     	</div>
                  	</div>
              	</div>
            </div>
        </footer>

        <!-- End Footer -->
        <div class="footer_bottom">
            <div class="container">
               	<div class="row">
                  	<div class="col-12">
                     	<p class="crp">© Copyrights 2021 design by <a href="#" title="Free Website Templates">SUT Student</a></p>
                  	</div>
               	</div>
            </div>
        </div>
    </div>

    <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="lib/index/js/jquery.min.js"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="lib/index/js/popper.min.js"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="lib/index/js/bootstrap.min.js"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="lib/index/js/jquery.magnific-popup.min.js"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="lib/index/js/jquery.pogo-slider.min.js"></script>
	<!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="lib/index/js/slider-index.js"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="lib/index/js/form-validator.min.js"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="lib/index/js/contact-form-script.js"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="lib/index/js/isotope.min.js"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="lib/index/js/images-loded.min.js"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="lib/index/js/custom.js"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->

	<script type="text/javascript">
        $(document).ready(function() {

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

        $('#btnGoToSearch').on('click', function() {
          window.location = "project_search.php"
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