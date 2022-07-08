<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/login/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/login/libs/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
    html,
    body {
       
        height: 100%;
        min-height:100%;
        background:linear-gradient(0deg, rgba(2, 4, 124, 0.8), rgba(35, 152, 228, 0.4)), url("assets/images/prmsu-bg.jpg");
        background-size:cover;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="index.html"><img class="prmsu_logo" src="assets/login/images/prmsu_logo.jpg" alt="prmsu_logo" height="200px"></a></div>
            <div class="card-body">
                <form method="post" name="login_form">



                    <div class="form-group">
                        <input class="form-control form-control-lg" id="username" alt="username" type="text" placeholder="Username" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="password" type="password" alt="password" placeholder="Password"  autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="remember" onclick="myFunction()"><span class="custom-control-label">Show Password</span>
                        </label>
                    </div>
                   <div class="form-group">
                   <button class="btn btn-lg btn-block" style="background-color:rgb(235, 151, 42) !important;
                      color: rgb(243, 245, 238) !important;" value="Sign in" id="btn-login" name="btn-login">Sign in</button>
                    </div>
                     <div class="form-group" id="alert-msg">
                </form>
            </div>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->

    <script src="assets/login/js/jquery.min.js"></script>
    <script src="assets/login/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/login/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script type="text/javascript">
      document.oncontextmenu = document.body.oncontextmenu = function() {return false;}//disable right click
    </script>
  
     <script type="text/javascript">
            jQuery(function(){
                $('form[name="login_form"]').on('submit', function(e){
                    e.preventDefault();

                    var u_username = $(this).find('input[alt="username"]').val();
                    var p_password = $(this).find('input[alt="password"]').val();
                   // var s_status = 1;

                    if (u_username === '' && p_password ===''){
                        $('#alert-msg').html('<div class="alert alert-danger"> Required Username and Password!</div>');
                    }else{
                        $.ajax({
                            type: 'POST',
                            url: 'init/controllers/login.php',
                            data: {
                                username: u_username,
                                password: p_password
                               // status: s_status
                            },
                            beforeSend:  function(){
                                $('#alert-msg').html('');
                            }
                        })
                        .done(function(t){
                            if (t == 0){
                                $('#alert-msg').html('<div class="alert alert-danger">Incorrect username or password!</div>');
                                
                            }else{
                                $("#btn-login").html('<img src="assets/login/images/loading.gif" /> &nbsp; Signing In ...');
                                setTimeout(' window.location.href = "routes/index.php"; ',2000);
                            }
                        });
                    }
                });
           });
        </script>
        <script>
            function myFunction() {
              var x = document.getElementById("password");
              if (x.type === "password") {
                x.type = "text";
              } else {
                x.type = "password";
              }
            }
     </script>
    </body>
</html>