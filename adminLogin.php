<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Class-Fees.lk</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
</head>

<body class="hold-transition login-page bg-light">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-danger">
            <div class="card-header text-center">
                <a href="index2.html" class="h1 text-danger"><b>User</b><span class="text-dark">Login</span></a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Please enter username and password</p>

                
                    <div class="input-group mb-3">
                        <input type="email" id="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" id="pwd" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-danger">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                Remember Me
              </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button id="input" class="btn btn-danger btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                
                <!-- /.social-auth-links -->

                <p class="mb-1">
                    <a class="text-danger" href="forgot-password.html">I forgot my password</a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrbootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="diadminlte.min.js"></script>
    <script src="plugins/toastr/toastr.min.js"></script>
    <script src="plugins/sweetalert2/sweetalert2.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#input").click(function(){

                let email = $("#email").val();
                let pwd = $("#pwd").val();
                let remember = 0;
                if($("#remember").is(":checked")){
                    remember = 1;
                }

                $.ajax({
                    type: 'POST',
                    url: 'php/login.php',
                    data: {
                        email: email,
                        pwd: pwd,
                        remember: remember
                    },
                    success: function(res){
                        if(res == 1){
                            window.location.href = "institutes.php";
                        }else if(res == 2){
                            window.location.href = "admin/adminDash.php";
                        }else if(res == 3){
                            window.location.href = "php/check.php";
                        }else if(res == 4){
                            window.location.href = "php/check.php";
                        }else if(res == 5){
                            toastr.error('Username Or Password is Wrong, Try Again.');
                        }else if(res == 6){
                            toastr.error('Unexpected Error Occured, Please Try Again');
                        }else if(res == 7){
                            toastr.warning('Please fill all of required fields');
                        }else{
                            toastr.info('Institute is inactive. Contact owner of the institute.');
                        }
                    }
                });

            });
        });
    </script>
</body>

</html>