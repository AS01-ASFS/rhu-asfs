<?php
   include ('includes/inc-rhu-login.php');

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="img/title-icon-crop.png" rel="icon">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="patient/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    

<!--modal-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Toastr -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>
//email
function userEmailAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "user-availability.php",
data:'modalemail='+$("#modalemail").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}


</script>
  <script>
    $(document).ready(function(){
        $(".btnmodal").click(function(){
            $("#myModal").modal('show');
        });
    });
</script>

   
<style type="text/css">
.border-md {
    border-width: 2px;
}

body {
    min-height: 100vh;
}

.form-control:not(select) {
    padding: 1.5rem 0.5rem;
}

select.form-control {
    height: 52px;
    padding-left: 0.5rem;
}

.form-control::placeholder {
    color: #ccc;
    font-weight: bold;
    font-size: 0.9rem;
}
.form-control:focus {
    box-shadow: none;
}

.btn{
    background-color: #3AAFAA; 
    border-color: #2A7A78;
}
.btn:hover{
    background-color: #2A7A78;
}
a{
    color: #3AAFAA;
}
a:hover{
    color: #2A7A78;
    text-decoration: none;
}

.header-top {
  background: #2D2D2D;
  color: #919194;
  border-bottom: 1px solid rgba(255, 255, 255, 0.05);
  height: 80px;
}

.header-top .header-top-socials {
  border-right: 1px solid rgba(255, 255, 255, 0.05);
  padding: 12px 0px;
}

.header-top .header-top-socials a {
  color: #919194;
  margin-right: 15px;
  font-size: 16px;
}

.header-top .header-top-info {
  color: #919194;
  font-size: 16px;
}

.header-top .header-top-info a span {
  color: #fff;
}

.header-top .header-top-info a {
  margin-left: 35px;
  color: #919194;
}

/*=== MEDIA QUERY ===*/

@media (max-width: 768px) {
  .navbar-toggler {
    color: #fff;
  }
  .bg-about {
    display: none;
  }
  .footer-socials {
    margin-top: 20px;
  }
  .footer-socials li a {
    margin-left: 0px;
  }
  .slider .block h1 {
    font-size: 56px;
    line-height: 70px;
  }
  .blog-item-meta span {
    display: block;
    margin: 6px 0px;
  }
  .widget {
    margin-bottom: 30px;
    padding-bottom: 0px;
  }
  .dropdown-menu {
    display: none;
    width: 100%;
    text-align: center;
  }
}


@media (max-width: 400px) {
  .header-top .header-top-info a {
    margin-left: 0px;
    display: block;
  }
  .navbar-toggler {
    color: #fff;
  }
  .slider .block h1 {
    font-size: 28px;
    line-height: 40px;
  }
  .slider {
    padding: 126px 0 151px 0;
  }
  .content-title {
    font-size: 28px;
    line-height: 46px;
  }
  .bg-about {
    display: none;
  }
  .p-5 {
    padding: 2rem !important;
  }
  h2, .h2 {
    font-size: 1.3rem;
    font-weight: 600;
    line-height: 36px;
  }
  .testimonial-item .testimonial-item-content {
    padding-left: 0px;
    padding-top: 30px;
  }
  .footer-socials {
    margin-top: 20px;
  }
  .footer-socials li a {
    margin-left: 0px;
  }
  .text-lg {
    font-size: 3rem;
  }
  .header-top .header-top-info {
    padding-bottom: 15px;
  }
  .blog-item-meta span {
    margin: 6px 0px;
  }
  .widget {
    margin-bottom: 30px;
    padding-bottom: 0px;
  }
  .dropdown-menu {
    display: none;
    width: 100%;
    text-align: center;
  }
}

@media (max-width: 480px) {
  .header-top .header-top-info a {
    margin-left: 0px;
  }
  .navbar-toggler {
    color: #fff;
  }
  .slider .block h1 {
    font-size: 38px;
    line-height: 50px;
  }
  .slider {
    padding: 126px 0 151px 0;
  }
  .content-title {
    font-size: 28px;
    line-height: 46px;
  }
  .bg-about {
    display: none;
  }
  .p-5 {
    padding: 2rem !important;
  }
  h2, .h2 {
    font-size: 1.3rem;
    font-weight: 600;
    line-height: 36px;
  }
  .testimonial-item .testimonial-item-content {
    padding-left: 0px;
    padding-top: 30px;
  }
  .footer-socials {
    margin-top: 20px;
  }
  .footer-socials li a {
    margin-left: 0px;
  }
  .blog-item-meta span {
    display: block;
    margin: 6px 0px;
  }
  .widget {
    margin-bottom: 30px;
    padding-bottom: 0px;
  }
  .dropdown-menu {
    display: none;
    width: 100%;
    text-align: center;
  }
}

.navbar-brand {
  color: #fff;
  font-weight: 600;
  letter-spacing: 1px;
}

.navbar-brand span {
  color: #3AAFAA;
}


.navbar-toggle .icon-bar {
  background: #3AAFAA;
}

#navbar {
  background: #2D2D2D;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
}

#navbar li {
  padding-left: 15px;
}

#navbar .nav-link {
  font-family: "Poppins", sans-serif;
  font-weight: 500;
  color: #fff;
  text-transform: uppercase;
  font-size: 14px;
  letter-spacing: .5px;
  transition: all .25s ease;
}

#navbar .nav-link:hover, #navbar .nav-link:focus {
  color: #3AAFAA;
}

#navbar .btn {
  padding: .5rem 1.5rem;
  color: #fff;
}


.btn-light {
  color: #212529;
  background-color: #f8f9fa;
  border-color: #f8f9fa; }
  .btn-light:hover {
    color: #212529;
    background-color: #e2e6ea;
    border-color: #dae0e5; }
  .btn-light:focus, .btn-light.focus {
    box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5); }
  .btn-light.disabled, .btn-light:disabled {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa; }
  .btn-light:not(:disabled):not(.disabled):active, .btn-light:not(:disabled):not(.disabled).active,
  .show > .btn-light.dropdown-toggle {
    color: #212529;
    background-color: #dae0e5;
    border-color: #d3d9df; }
    .btn-light:not(:disabled):not(.disabled):active:focus, .btn-light:not(:disabled):not(.disabled).active:focus,
    .show > .btn-light.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5); }

.btn-dark {
  color: #fff;
  background-color: #4a4a4a;
  border-color: #4a4a4a; }
  .btn-dark:hover {
    color: #fff;
    background-color: #323232;
    border-color: #4a4a4a; }
  .btn-dark:focus, .btn-dark.focus {
    box-shadow: 0 0 0 0.2rem rgba(97, 97, 97, 0.5); }
  .btn-dark.disabled, .btn-dark:disabled {
    color: #fff;
    background-color: #4a4a4a;
    border-color: #4a4a4a; }
  .btn-dark:not(:disabled):not(.disabled):active, .btn-dark:not(:disabled):not(.disabled).active,
  .show > .btn-dark.dropdown-toggle {
    color: #fff;
    background-color: #4a4a4a;
    border-color: #252525; }
    .btn-dark:not(:disabled):not(.disabled):active:focus, .btn-dark:not(:disabled):not(.disabled).active:focus,
    .show > .btn-dark.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(97, 97, 97, 0.5); }  
::selection{
    color: #fff;
    background: #287573;
}
::-webkit-scrollbar{
    width: 5px;
    height: 5px;
    border-radius: 25px;
}
::-webkit-scrollbar-track{
    background: #f1f1f1;
}
::-webkit-scrollbar-thumb{
    background: #ddd;
}
::-webkit-scrollbar-thumb:hover{
    background: #17242B;
}
</style>

</head>
<body>
<?php include('includes/employee-header-login.php') ?>
<div class="container">
    <div class="row py-5 mt-4 align-items-center">
           <!--<div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
            <br>
            <br>
            <br>
            <img src="https://bootstrapious.com/i/snippets/sn-registeration/illustration.svg" alt="" class="img-fluid mb-3 d-none d-md-block">
           
        </div>-->

        <!-- Registeration Form -->
        <div class="col-lg-3"></div>
        <div class="col-md-7 col-lg-6">

            <form action="" method="post">
                <center><div class="col-md-12 pr-lg-12 mb-12 mb-md-0">
            <h2>LOGIN</h2>
            </div></center>
            <br>
            <br>

                <div class="row">

                    <!--username-->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user-o text-muted"></i>
                            </span>
                        </div>
                        <input id="username" type="text" name="username" placeholder="Username" class="form-control bg-white border-left-0 border-md" required="">
                    </div>
                    
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                        </div>
                        <input id="password" type="password" name="password" placeholder="Password" class="form-control bg-white border-left-0 border-md" required="">
                    </div>
            <!--show password checkbox-->
                    <div class="col-lg-6 mb-4" style="margin-top:-25px;">
                    <input type="checkbox" onclick="myPassword()">Show Password
                </div>

                    <!-- Submit Button -->
                    <div class="form-group col-lg-12 mx-auto mb-0">
                        <button type="submit" name="btnloginsubmit" id="btnloginsubmit" class="btn btn-primary btn-block py-2">
                            LOGIN
                        </button>
                    </div>

                    <br>
                    <br>
                    <br>

                    <!-- Register here -->
                    <div class="text-center w-100">
                        <p class="text-muted font-weight-bold">
                        <a type="button" class="btnmodal text-primary ml-2" data-toggle="modal" data-target="#myModal">Forgot Password?</a>
                        </p>
                    </div>

                </div>
            </form>
        </div>
    </div>
   <!-- Modal HTML -->
    <div id="myModal" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
               <form action="" method="post">
                <div class="modal-header">
                    <h5 class="modal-title">Forgot Password</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">

                  <center> <p>Kindly enter your email address below to reset your password.</p></center>
                                         
 <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-envelope text-muted"></i>
                            </span>
                        </div>
                        <input id="modalemail" type="email" name="modalemail" placeholder="Email Address" class="form-control bg-white border-left-0 border-md" required=""  onBlur="userEmailAvailability()">
                    </div>
                    <div class="col-lg-12 mb-4" style="margin-top:-25px;">
                   <span id="user-availability-status1" style="font-size:15px;"></span>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="btnmodalsubmit" id="btnmodalsubmit" class="btn btn-primary">Send</button>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>

 <script src="js/script.js"></script>

  <script type="text/javascript">
        // Default Configuration
        $(document).ready(function() {
            toastr.options = {
                'closeButton': true,
                'debug': false,
                'newestOnTop': false,
                'progressBar': true,
                'positionClass': 'toast-bottom-right',
                'preventDuplicates': false,
                'showDuration': '1000',
                'hideDuration': '1000',
                'timeOut': '5000',
                'extendedTimeOut': '2000',
                'showEasing': 'swing',
                'hideEasing': 'linear',
                'showMethod': 'fadeIn',
                'hideMethod': 'fadeOut',
            }
    <?php if (isset($_SESSION['errorlogin'])): ?>
    toastr.error("<?php echo flash ('errorlogin'); ?>");
    <?php endif ?>

    <?php if (isset($_SESSION['successforgot'])): ?>
    toastr.success("<?php echo flash ('successforgot'); ?>");
    <?php endif ?>

    
    <?php if (isset($_SESSION['staffsuccesslogout'])): ?>
    toastr.success("<?php echo flash ('staffsuccesslogout'); ?>");
    <?php endif ?>

    

        <?php if (isset($_SESSION['sessionexpired'])): ?>
    toastr.info("<?php echo flash ('sessionexpired'); ?>");
    <?php endif ?>
        });

     </script>
<!--show password-->
<script>
function myPassword() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>
</html><!-- Navbar-->