<?php

session_start();
include("config.php");
 include('includes/toastr_function.php');

if(isset($_GET["email"]))
{
 $email = $_GET["email"];
         /*forgot password*/
if(isset($_POST['btnforgotpass']))
{

  $forgotpassword = $_POST['forgotpassword'];
  $forgotconfirmpassword = $_POST['forgotconfirmpassword'];

$query=mysqli_query($db, "SELECT * FROM rhu_staff WHERE email_address='$email'");
$num=mysqli_fetch_array($query);
if($num>0)
{
$rhu_staff=mysqli_query($db, "UPDATE rhu_staff set password='$forgotpassword' WHERE email_address='$email'");
$rhu_account=mysqli_query($db, "UPDATE rhu_account set password='$forgotpassword' WHERE email_address='$email'");
$_SESSION['successforgot'] = "You have successfully reset your password";
              header("Location: rhu_login.php");
              exit();
}
}
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link href="img/title-icon-crop.png" rel="icon">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="user/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<!--modal-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Toastr -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

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

/* The message box is shown when the user clicks on the password field */
#message{
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 10px;
}


.passvalidation {
  font-size: 12px;
  margin: 0px 50px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -5px;
  content: "✓";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -5px;
  content: "✘";
}

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
            <h2>RESET PASSWORD</h2>
            </div></center>
            <br>
            <br>

                <div class="row">

                    <!--newpassword-->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                        </div>
                        <input id="forgotpassword" type="password" name="forgotpassword" placeholder="New Password" class="form-control bg-white border-left-0 border-md" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required="">
                    </div>
                     <div class="col-lg-6 mb-4" style="margin-top:-25px;">
                    <input type="checkbox" onclick="myPassword()">Show Password
                </div>
                 <div class="col-lg-12 mb-4" id="message">
  <center>
  <p id="validationtitle">Password must contain the following:</p></center>
  <div class="form-row">
    <div class="col-sm-6">
  <p id="letter" class="invalid passvalidation">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid passvalidation">A <b>capital (uppercase)</b> letter</p></div>
  <div class="col-sm-6">
  <p id="number" class="invalid passvalidation">A <b>number</b></p>
  <p id="length" class="invalid passvalidation">Minimum <b>8 characters</b></p>
</div>
</div>
</div>
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                        </div>
                        <input id="forgotconfirmpassword" type="password" name="forgotconfirmpassword" placeholder="Confirm Password" class="form-control bg-white border-left-0 border-md" required="">
                    </div>
            <!--show password checkbox-->
                   

                <div class="col-lg-6 mb-4" style="margin-top:-25px;">
                    <input type="checkbox" onclick="myConfirmPassword()">Show Password
                </div>

                    <!-- Submit Button -->
                    <div class="form-group col-lg-12 mx-auto mb-0">
                        <button type="submit" name="btnforgotpass" id="btnforgotpass" class="btn btn-primary btn-block py-2">
                            SUBMIT
                        </button>
                    </div>

                    <br>
                    <br>
                    <br>


                </div>
            </form>
        </div>
    </div>
</div>

 
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
    <?php if (isset($_SESSION['verifysuccess'])): ?>
    toastr.success("<?php echo flash ('verifysuccess'); ?>");
    <?php endif ?>

        });

     </script>

 <!--Password Validation-->
<script type="text/javascript">
var myInput = document.getElementById("forgotpassword");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>

<!--Check password match-->
<script type="text/javascript">
  var password = document.getElementById("forgotpassword")
  , confirm_password = document.getElementById("forgotconfirmpassword");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Password Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
<!--show password-->
<script>
function myPassword() {
  var x = document.getElementById("forgotpassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function myConfirmPassword() {
  var x = document.getElementById("forgotconfirmpassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>
</html><!-- Navbar-->