<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Start Together</title>

    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="login_templete/fonts/icomoon/style.css">
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="login_templete/css/owl.carousel.min.css">
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="login_templete/css/bootstrap.min.css">
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="login_templete/css/style.css">
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <!-------------------------------------------------------------------------------------------------------------------------------------->

    <style>
        body, html, div, h1, h2, h3, h5, p, a, span {
          font-family: 'Kanit', sans-serif;
        }

        #btnRegister {
          width: 200px;
          height: 45px;
        }
    </style>

</head>
<body>
  

    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2" style="background-image: url('login_templete/images/login-bg.jpg');"></div>
        <div class="contents order-1 order-md-2">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7">
                        <div class="mb-4">
                            <h3>Sign In</h3>
                            <p class="mb-4">Start Together</p>
                        </div>
                        <form>
                            <div class="form-group first">
                              <label for="username">Username</label>
                              <input id="loginUsername" type="text" class="form-control" id="username">
                            </div>
                            <div class="form-group last mb-3">
                              <label for="password">Password</label>
                              <input id="loginPassword" type="password" class="form-control" id="password">
                            </div>
                            <div class="d-flex mb-5 align-items-center">
                                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                                  <input type="checkbox" checked="checked"/>
                                  <div class="control__indicator"></div>
                                </label>
                                <span class="ml-auto"><a href="#" id="register" class="forgot-pass">Have you not account ?</a></span> 
                            </div>
                                <input id="btnLogin" type="button" value="Log In" class="btn btn-block btn-primary">
                                <span class="d-block text-center my-4 text-muted">&mdash; or sign in with &mdash;</span>
                                <div class="social-login">
                                <a href="#" class="facebook btn d-flex justify-content-center align-items-center">
                                  <span class="icon-facebook mr-3"></span> Login with Facebook
                                </a>
                                <a href="#" class="google btn d-flex justify-content-center align-items-center">
                                  <span class="icon-google mr-3"></span> Login with  Google
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!----Modal Register---->
        <div class="modal fade" id="modalRegister" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Register</h5>
                        <button type="button" class="close" id="modalRegisterClose" aria-label="Close">
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
                                              <input type="text" id="inputUsername" class="form-control" placeholder="Username" onchange="checkUsername(this.value)" onkeyup="checkForm()">
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
                                      <button type="button" class="btn btn-sm btn-primary" id="btnRegister" disabled>Create Account</button><br />
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="login_templete/js/jquery-3.3.1.min.js"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="login_templete/js/popper.min.js"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="login_templete/js/bootstrap.min.js"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="login_templete/js/main.js"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->


    <script type="text/javascript">

      function checkForm(){
        if($("#inputFirstName").val().length > 0 && $("#inputLastName").val().length > 0 && $("#inputEmail").val().length > 0 &&
             $("#inputBirthDay").val().length > 0 && $("#inputUsername").val().length > 0 && $("#inputPassword").val().length > 0){
          $("#btnRegister").attr("disabled", false);
        }
        else {
          $("#btnRegister").attr("disabled", true);
        }
      }

      function checkUsername(username){
        $.ajax({
            url: 'get_data_user.php',
            contentType: 'application/json',
            headers: { "Content-Type": "application/x-www-form-urlencoded" },

            success: function (response) {
              var check = true;

              if($("#inputUsername").val().length > 0) {
                 $("#btnRegister").attr("disabled", true);
              }

              for (var i = 0; i < response.length; i++) {
                if (username == response[i].u_username) {
                    check = false;
                }
              }

              if (check == false) {

                $("#inputUsername").val(null);
                $("#inputUsername").focus();

                Swal.fire({
                  icon: 'error',
                  title: 'Username นี้ถูกใช้งานแล้ว',
                  text: 'กรุณาใช้ Username อื่น',
                  timer: 5000
                })
              }
            },
            error: function (error) {
                console.log(error);
            }
        });
      }

      $(window).bind("pageshow", function() {
          $("#loginUsername").val("");
          $("#loginPassword").val("");
      });

      $(document).ready(function () {

        $("#loginUsername").keyup(function (usernameEvent) {
          if (usernameEvent.keyCode === 13) {
            $("#btnLogin").click();
          }
        });

        $("#loginPassword").keyup(function (passwordEvent) {
          if (passwordEvent.keyCode === 13) {
            $("#btnLogin").click();
          }
       });

        $("#register").click(function () {
          $("#modalRegister").modal('show');
        });

        $("#modalRegisterClose").click(function () {
          $("#modalRegister").modal('hide');
        });

        $("#btnLogin").click(function () {
          if($("#loginUsername").val() == "" || $("#loginPassword").val() == ""){
            Swal.fire({
                icon: 'error',
                title: 'ไม่สามารถเข้าสู่ระบบได้',
                text: 'กรุณากรอก Username หรือ Password ให้ครบถ้วน',
                width: 600,
                timer: 5000
            })
          }
          else {
            $.ajax({
            url: 'get_data_user.php',
            contentType: 'application/json',
            headers: { "Content-Type": "application/x-www-form-urlencoded" },

            success: function (response) {
              var check = false;
              var role = "";
              var username = $("#loginUsername").val();
              var password = $("#loginPassword").val();

              for (var i = 0; i < response.length; i++) {
                if(response[i].u_username == username && response[i].u_password == password){

                  sessionStorage.setItem("u_id", response[i].u_id);
                  sessionStorage.setItem("u_firstname", response[i].u_firstname);
                  sessionStorage.setItem("u_lastname", response[i].u_lastname);
                  sessionStorage.setItem("u_birthday", response[i].u_birthday);
                  sessionStorage.setItem("u_email", response[i].u_email);
                  sessionStorage.setItem("u_username", response[i].u_username);
                  sessionStorage.setItem("u_password", response[i].u_password);
                  sessionStorage.setItem("u_role", response[i].u_role);

                  role = response[i].u_role;
                  check = true;
                }
              }

              if(check == true){
                if(role == "admin"){
                  window.location = "admin_manageuser.php"
                }
                else {
                  window.location = "index.php"
                }
              }
              else {
                Swal.fire({
                  icon: 'error',
                  title: 'ไม่สามารถเข้าสู่ระบบได้',
                  text: 'Username หรือ Password ไม่ถูกต้อง กรุณาลองใหม่อีกครั้ง',
                  width: 600,
                  timer: 5000
                })
              }
            },
            error: function (error) {
                console.log(error);
            }
        });
          }
        });

        $("#btnRegister").click(function () {
          if($("#inputFirstName").val() == "" || $("#inputLastName").val() == "" || $("#inputEmail").val() == "" ||
             $("#inputBirthDay").val() == "" || $("#inputUsername").val() == "" || $("#inputPassword").val() == ""){

            Swal.fire({
                icon: 'error',
                title: 'ไม่สามารถลงทะเบียนได้',
                text: 'กรุณากรอกข้อมูลให้ครบถ้วน',
                timer: 5000
            })
          }
          else {
            var firstname = $("#inputFirstName").val();
            var lastname = $("#inputLastName").val();
            var birthday = $("#inputBirthDay").val();
            var email = $("#inputEmail").val();
            var username = $("#inputUsername").val();
            var password = $("#inputPassword").val();
            var role = "member";

            Swal.fire({
                title: 'Are you sure ?',
                text: 'คุณต้องการสมัครสมาชิก ใช่ หรือไม่ ?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Comfirm',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "insert_user.php",
                        type: 'POST',
                        data: {
                            u_firstname : firstname,
                            u_lastname : lastname,
                            u_birthday : birthday,
                            u_email : email,
                            u_username : username,
                            u_password : password,
                            u_role : role,
                        },
                        cache: false,
                        success: function (data) {
                          $("#modalRegister").modal('hide');
                          $("#inputFirstName").val("");
                          $("#inputLastName").val("");
                          $("#inputBirthDay").val("");
                          $("#inputEmail").val("");
                          $("#inputUsername").val("");
                          $("#inputPassword").val("");
                          $("#btnRegister").attr("disabled", true);

                          Swal.fire({
                              icon: 'success',
                              title: 'ลงทะเบียนสำเร็จ',
                              text: 'ขอบคุณที่มาร่วมเป็นส่วนหนึ่งกับเรา',
                              timer: 5000
                          })
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