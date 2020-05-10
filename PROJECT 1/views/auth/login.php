



<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Login</title>
  <style type="text/css">
    label {
      display: inline-block;
      width: 150px;
    }
    input[type="text"], input[type="password"] {
      display: inline-block;
      width: 200px;
      font-size: 1rem;
    }
    label.error {
      display: inline-block;
      color:red;
      width: 200px;
      font-size: 1rem;
    }

  </style>

  <!-- Custom fonts for this template-->
  <link href="views/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="views/admin/css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="views/admin/css/animate.css">

</head>

<body class="bg-gradient-primary">

  <div class="container">
    <?php
    if (isset($_COOKIE["error"])) {
      ?>
      <div class="alert alert-danger" role="alert">
        <strong>Thông báo:</strong>
        <?php
        echo $_COOKIE["error"]; 
        ?>
      </div>
      <?php 
    }
    ?>

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row wow slideInLeft">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                  <form id="formLogin" method="POST" action="/PROJECT%201/index.php?mod=auth&act=login" >
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email" style="font-size: 1rem; ">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password" >
                    </div>
                   <!--  <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div> -->
                   <!--  <a href="" class="btn btn-primary btn-user btn-block" name="btn_submit">
                      Login
                    </a> -->
                    <tr>
                      <td colspan="2" align="center"> <input type="submit" name="btn_submit" value="Login" class="btn btn-primary btn-user btn-block"></td>
                    </tr>
                    <hr>
                    <a href="index.html" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="https://www.facebook.com/" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="/PROJECT%201/index.php?mod=auth&act=register">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <!--  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>

  <script src="views/admin/vendor/jquery/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script src="views/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="views/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="views/admin/js/sb-admin-2.min.js"></script>
  <script src="views/admin/js/wow.min.js"></script>
  <!-- <script type="text/javascript" src="jquery.validate.min.js"></script> -->
 <!--  <script>
    new WOW().init();
  </script> -->
  <script type="text/javascript">
    $(document).ready(function() {

        //Khi bàn phím được nhấn và thả ra thì sẽ chạy phương thức này
        $("#formLogin").validate({
          rules: {
            // email: "required",
            // ten: "required",
            email: {
              required: true,
              email: true
            },
            password: {
              required: true,
              minlength: 2
            }
          },
          messages: {
            // email: "Vui lòng nhập email",
            // ten: "Vui lòng nhập tên",
            email: {
              required: "Vui lòng nhập email",
              email: "Vui lòng nhập đúng định dạng email"

              
            },
            password: {
              required: "Vui lòng nhập password",
              minlength: "password ngắn vậy, chém gió ah?"
            }
          }
        });
      });
    </script>

  </body>

  </html>
