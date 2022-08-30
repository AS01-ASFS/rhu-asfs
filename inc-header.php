<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="user/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
   
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
</style>

</head>