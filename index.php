<?php 
session_start();
include('includes/toastr_function.php');
include('config.php');
date_default_timezone_set('Asia/Bangkok');// change according timezone
 ?>
<!doctype html>
<html lang="en">
  <head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <meta name="author" content="themefisher.com">

  <title>Rural Health Unit</title>
  <link href="img/title-icon-crop.png" rel="icon">

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="plugins/themify/css/themify-icons.css">
  <link rel="stylesheet" href="plugins/fontawesome/css/all.css">
  <link rel="stylesheet" href="plugins/magnific-popup/dist/magnific-popup.css">
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="index_style.css">


<!--chatbot-->
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

       <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Toastr -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<style type="text/css">
     .stretch-card {
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: stretch;
  align-items: stretch;
  -webkit-justify-content: stretch;
  justify-content: stretch;
}

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}

/*=== MEDIA QUERY ===*/
@import url(http://fonts.googleapis.com/css?family=Montserrat:400,700|Poppins:300,400,600,700);
@import url(https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700);
@import url(https://fonts.googleapis.com/css?family=Playfair+Display:300,400,500,600,700);
html {
  overflow-x: hidden;
}

body {
  line-height: 1.5;
  font-family: "Hind", serif;
  -webkit-font-smoothing: antialiased;
  font-size: 17px;
  color: rgba(0, 0, 0, 0.65);
}

h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6 {
  font-family: "Poppins", sans-serif;
  font-weight: 600;
  color: #242424;
}

h1, .h1 {
  font-size: 2.5rem;
}

h2, .h2 {
  font-size: 2rem;
  font-weight: 600;
  line-height: 42px;
}

h3, .h3 {
  font-size: 1.5rem;
}

h4, .h4 {
  font-size: 1.3rem;
  line-height: 30px;
}

h5, .h5 {
  font-size: 1.25rem;
}

h6, .h6 {
  font-size: 1rem;
}

p {
  line-height: 30px;
}

.navbar-toggle .icon-bar {
  background: #3AAFAA;
}

input[type="email"], input[type="password"], input[type="text"], input[type="tel"] {
  box-shadow: none;
  height: 45px;
  outline: none;
  font-size: 14px;
}

input[type="email"]:focus, input[type="password"]:focus, input[type="text"]:focus, input[type="tel"]:focus {
  box-shadow: none;
  border: 1px solid #3AAFAA;
}

.form-control {
  box-shadow: none;
  border-radius: 0;
}

.form-control:focus {
  box-shadow: none;
  border: 1px solid #3AAFAA;
}

.py-7 {
  padding: 7rem 0px;
}

.btn {
  display: inline-block;
  font-size: 14px;
  font-size: 0.8125rem;
  font-weight: 400;
  padding: 1rem 2.5rem;
  text-transform: uppercase;
  border-radius: 0;
  transition: all 0.2s ease;
}

.btn.btn-icon i {
  font-size: 16px;
  vertical-align: middle;
  margin-right: 5px;
}

.btn:focus {
  outline: 0px;
  border: 0px;
  box-shadow: none;
}

.btn-main, .btn-transparent, .btn-small {
  background: #3AAFAA;
  color: #fff;
  transition: all 0.2s ease;
}

.btn-main:hover, .btn-transparent:hover, .btn-small:hover {
  background: #238685;
  color: #fff;
}

.btn-solid-border {
  border: 2px solid #3AAFAA;
  background: transparent;
  color: #242424;
}

.btn-solid-border:hover {
  border: 2px solid #3AAFAA;
  background: #3AAFAA;
}

.btn-transparent {
  background: transparent;
  padding: 0;
  color: #3AAFAA;
}

.btn-transparent:hover {
  background: transparent;
  color: #3AAFAA;
}

.btn-large {
  padding: 20px 45px;
}

.btn-large.btn-icon i {
  font-size: 16px;
  vertical-align: middle;
  margin-right: 5px;
}

.btn-small {
  padding: 10px 25px;
  font-size: 12px;
}

.btn-round {
  border-radius: 4px;
}

.btn-round-full {
  border-radius: 50px;
}

.btn.active:focus, .btn:active:focus, .btn:focus {
  outline: 0;
}

.bg-gray {
  background: #f5f8f9;
}

.bg-primary {
  background: #3AAFAA;
}

.bg-primary-dark {
  background: #f52626;
}

.bg-primary-darker {
  background: #238685;
}

.bg-dark {
  background: #242424;
}

.bg-gradient {
  background-image: linear-gradient(145deg, rgba(19, 177, 205, 0.95) 0%, rgba(152, 119, 234, 0.95) 100%);
  background-repeat: repeat-x;
}

.section {
  padding: 100px 0;
}

.section-sm {
  padding: 70px 0;
}

.section-title {
  margin-bottom: 70px;
}

.section-title .title {
  font-size: 50px;
  line-height: 50px;
}

.section-title p {
  color: #666;
  font-family: "Poppins", sans-serif;
}

.subtitle {
  color: #3AAFAA;
  font-size: 14px;
  letter-spacing: 1px;
}

.overly, .page-title, .slider, .cta, .hero-img {
  position: relative;
}

.overly:before, .page-title:before, .slider:before, .cta:before, .hero-img:before {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  width: 0;
  height: 100%;
  opacity: 0.5;
  background: #000;
}

.overly-2, .bg-counter, .cta-block, .latest-blog {
  position: relative;
}

.overly-2:before, .bg-counter:before, .cta-block:before, .latest-blog:before {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.8);
}

.text-color {
  color: #3AAFAA;
}

.text-black {
  color: #242424;
}

.text-color2 {
  color: #c54041;
}

.text-color2 {
  color: #b99769;
}

.text-sm {
  font-size: 14px;
}

.text-md {
  font-size: 2.25rem;
}

.text-lg {
  font-size: 3.75rem;
}

.no-spacing {
  letter-spacing: 0px;
}

/* Links */
a {
  color: #242424;
  text-decoration: none;
}

a:focus, a:hover {
  color: #3AAFAA;
  text-decoration: none;
}

a:focus {
  outline: none;
}

.content-title {
  font-size: 40px;
  line-height: 50px;
}

.page-title {
  min-height: 350px;
  padding: 130px 0;
}

.page-title .block h1 {
  color: #fff;
}

.page-title .block p {
  color: #fff;
}

.page-wrapper {
  padding: 70px 0;
}

#wrapper-work {
  overflow: hidden;
  padding-top: 100px;
}

#wrapper-work ul li {
  width: 50%;
  float: left;
  position: relative;
}

#wrapper-work ul li img {
  width: 100%;
  height: 100%;
}

#wrapper-work ul li .items-text {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  width: 100%;
  height: 100%;
  color: #fff;
  background: rgba(0, 0, 0, 0.6);
  padding-left: 44px;
  padding-top: 140px;
}

#wrapper-work ul li .items-text h2 {
  padding-bottom: 28px;
  padding-top: 75px;
  position: relative;
}

#wrapper-work ul li .items-text h2:before {
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  width: 75px;
  height: 3px;
  background: #fff;
}

#wrapper-work ul li .items-text p {
  padding-top: 30px;
  font-size: 16px;
  line-height: 27px;
  font-weight: 300;
  padding-right: 80px;
}

/*--
  features-work Start 
--*/
#features-work {
  padding-top: 50px;
  padding-bottom: 75px;
}

#features-work .block ul li {
  width: 19%;
  text-align: center;
  display: inline-block;
  padding: 40px 0px;
}

#navbar {
  background: #17242B;
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

.header-top {
  background: #17242B;
  color: #919194;
  border-bottom: 1px solid rgba(255, 255, 255, 0.05);
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

.navbar-brand {
  color: #fff;
  font-weight: 600;
  letter-spacing: 1px;
}

.navbar-brand span {
  color: #3AAFAA;
}

.dropdown-menu {
  visibility: hidden;
  filter: alpha(opacity=0);
  opacity: 0;
  transition: all .2s ease-in, visibility 0s linear .2s, -webkit-transform .2s linear;
  transition: all .2s ease-in, visibility 0s linear .2s, transform .2s linear;
  transition: all .2s ease-in, visibility 0s linear .2s, transform .2s linear, -webkit-transform .2s linear;
  -webkit-transition: all .2s ease-in, visibility 0s linear .2s, -webkit-transform .2s linear;
  -o-transition: all .2s ease-in, visibility 0s linear .2s, -o-transform .2s linear;
  -ms-transition: all .2s ease-in, visibility 0s linear .2s, -ms-transform .2s linear;
  width: 250px;
  margin-top: 15px;
  padding: 0px;
  border-radius: 0px;
  display: block;
}

.dropdown-toggle::after {
  display: none;
}

.dropdown:hover .dropdown-menu {
  visibility: visible;
  transition: all .45s ease 0s;
  opacity: 1;
}

.dropdown-item {
  padding: .8rem 1.5rem;
  text-transform: uppercase;
  font-size: 14px;
}

.dropdown-item:hover {
  background: #3AAFAA;
  color: #fff;
}

ul.dropdown-menu li {
  padding-left: 0px !important;
}

.bg-1 {
  background: url("img/header4.jpg") no-repeat 50% 40%;
  background-size: cover;
}

.bg-2 {
  background: url("../images/bg/home-5.jpg");
  background-size: cover;
}

.slider {
  background: url("../images/bg/home-1.jpg") no-repeat;
  background-size: cover;
  background-position: 10% 0%;
  padding: 200px 0 280px 0;
  position: relative;
}

.slider .block h1 {
  font-size: 70px;
  line-height: 80px;
  font-weight: 600;
  color: #fff;
}

.slider .block p {
  margin-bottom: 30px;
  color: #b9b9b9;
  font-size: 18px;
  line-height: 27px;
  font-weight: 300;
}

.slider .block span {
  letter-spacing: 1px;
}

.intro-item i {
  font-size: 60px;
  line-height: 60px;
}

.color-one {
  color: #3AAFAA;
}

.color-two {
  color: #00d747;
}

.color-three {
  color: #9262ff;
}

.color-four {
  color: #088ed3;
}

.bg-about {
  position: absolute;
  content: "";
  left: 0px;
  top: 0px;
  width: 45%;
  min-height: 650px;
  background: url("../images/about/home-8.jpg") no-repeat;
  background-size: cover;
}

.about-content {
  padding: 20px 0px 0px 80px;
}

.about-content h4 {
  font-weight: 600;
}

.about-content h4:before {
  position: absolute;
  content: "\f576";
  font-family: "Font Awesome 5 Free";
  font-size: 30px;
  position: absolute;
  top: 8px;
  left: -65px;
  font-weight: 700;
}

.counter-item .counter-stat {
  font-size: 50px;
}

.counter-item p {
  margin-bottom: 0px;
}

.bg-counter {
  background: url("../images/bg/counter.jpg") no-repeat;
  background-size: cover;
}

.team-img-hover .team-social li a.facebook {
  background: #6666cc;
}

.team-img-hover .team-social li a.twitter {
  background: #3399cc;
}

.team-img-hover .team-social li a.instagram {
  background: #cc66cc;
}

.team-img-hover .team-social li a.linkedin {
  background: #3399cc;
}

.team-img-hover {
  position: absolute;
  top: 10px;
  left: 10px;
  right: 10px;
  bottom: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(255, 255, 255, 0.6);
  opacity: 0;
  transition: all 0.2s ease-in-out;
  -moz-transition: all 0.2s ease-in-out;
  -webkit-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  -webkit-transform: scale(0.8);
  transform: scale(0.8);
}

.team-img-hover li a {
  display: inline-block;
  color: #fff;
  width: 50px;
  height: 50px;
  font-size: 20px;
  line-height: 50px;
  border: 2px solid transparent;
  border-radius: 2px;
  text-align: center;
  -webkit-transform: translateY(0);
          transform: translateY(0);
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
}

.team-img-hover:hover li a:hover {
  -webkit-transform: translateY(4px);
          transform: translateY(4px);
}

.team-item:hover .team-img-hover {
  opacity: 1;
  -webkit-transform: scale(1);
  transform: scale(1);
  top: 0px;
  left: 0px;
  right: 0px;
  bottom: 0px;
}

.service-item {
  position: relative;
  padding-left: 80px;
}

.service-item i {
  position: absolute;
  left: 0px;
  top: 5px;
  font-size: 50px;
  opacity: .4;
}

.cta {
  background: url("../images/bg/home-3.jpg") fixed 50% 50%;
  background-size: cover;
  padding: 120px 0px;
}

.cta-block {
  background: url("../images/bg/home-3.jpg") no-repeat;
  background-size: cover;
}

.testimonial-item {
  padding: 50px 30px;
}

.testimonial-item i {
  font-size: 40px;
  position: absolute;
  left: 30px;
  top: 30px;
  z-index: 1;
}

.testimonial-item .testimonial-text {
  font-size: 20px;
  line-height: 38px;
  color: #242424;
  margin-bottom: 30px;
  font-style: italic;
}

.testimonial-item .testimonial-item-content {
  padding-left: 65px;
}

.slick-slide:focus, .slick-slide a {
  outline: none;
}

.hero-img {
  background: url("../images/bg/home-5.jpg");
  position: absolute;
  content: "";
  background-size: cover;
  width: 100%;
  height: 100%;
  top: 0px;
}

.h70 {
  height: 55%;
}

.lh-45 {
  line-height: 45px;
}

.pricing-header h1 {
  font-size: 70px;
  font-weight: 300;
}

.pricing .btn-solid-border {
  border-color: #dedede;
}

.pricing .btn-solid-border:Hover {
  border-color: #3AAFAA;
}

.portflio-item .portfolio-item-content {
  position: absolute;
  content: "";
  right: 0px;
  bottom: 0px;
  opacity: 0;
  transition: all .35s ease;
}

.portflio-item:before {
  position: absolute;
  content: "";
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.8);
  opacity: 0;
  transition: all .35s ease;
  overflow: hidden;
}

.portflio-item:hover:before {
  opacity: 1;
}

.portflio-item:hover .portfolio-item-content {
  opacity: 1;
  bottom: 20px;
  right: 30px;
}

.portflio-item .overlay-item {
  position: absolute;
  content: "";
  left: 0px;
  top: 0px;
  bottom: 0px;
  right: 0px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 80px;
  color: #3AAFAA;
  opacity: 0;
  transition: all .35s ease;
}

.portflio-item:hover .overlay-item {
  opacity: 1;
}

.contact-form-wrap .form-group {
  padding-bottom: 15px;
  margin: 0px;
}

.contact-form-wrap .form-group .form-control {
  background: #f5f8f9;
  height: 48px;
  border: 1px solid #EEF2F6;
  box-shadow: none;
  width: 100%;
}

.contact-form-wrap .form-group-2 {
  margin-bottom: 13px;
}

.contact-form-wrap .form-group-2 textarea {
  background: #f5f8f9;
  height: 135px;
  border: 1px solid #EEF2F6;
  box-shadow: none;
  width: 100%;
}

.address-block li {
  margin-bottom: 10px;
}

.address-block li i {
  font-size: 20px;
  width: 20px;
}

.social-icons li {
  margin: 0 6px;
}

.social-icons i {
  margin-right: 15px;
  font-size: 25px;
}

.google-map {
  position: relative;
}

.google-map #map {
  width: 100%;
  height: 450px;
}

/*=================================================================
  Latest Posts
==================================================================*/
.blog-item-content h3 {
  line-height: 36px;
}

.blog-item-content h3 a {
  transition: all .4s ease 0s;
}

.blog-item-content h3 a:hover {
  color: #3AAFAA !important;
}

.lh-36 {
  line-height: 36px;
}

.tags a {
  background: #f5f8f9;
  display: inline-block;
  padding: 8px 23px;
  border-radius: 38px;
  margin-bottom: 10px;
  border: 1px solid #eee;
  font-size: 14px;
  text-transform: capitalize;
}

.pagination .nav-links a, .pagination .nav-links span.current {
  font-size: 20px;
  font-weight: 500;
  color: #c9c9c9;
  margin: 0 10px;
  text-transform: uppercase;
  letter-spacing: 1.2px;
}

.pagination .nav-links span.current, .pagination .nav-links a.next, .pagination .nav-links a.prev {
  color: #242424;
}

h3.quote {
  font-size: 25px;
  line-height: 50px;
  font-weight: normal;
  padding: 0px 25px 0px 85px;
  margin: 65px 0 65px 0 !important;
  position: relative;
}

h3.quote::before {
  content: '';
  width: 55px;
  height: 2px;
  background: #3AAFAA;
  position: absolute;
  top: 25px;
  left: 0;
}

.nav-posts-title {
  line-height: 25px;
  font-size: 18px;
}

.latest-blog {
  position: relative;
  padding-bottom: 150px;
}

.mt-70 {
  margin-top: -70px;
}

.border-1 {
  border: 1px solid rgba(0, 0, 0, 0.05);
}

.blog-item {
  border-bottom: 1px solid rgba(0, 0, 0, 0.05);
}

/*=================================================================
  Single Blog Page
==================================================================*/
.post.post-single {
  border: none;
}

.post.post-single .post-thumb {
  margin-top: 30px;
}

.post-sub-heading {
  border-bottom: 1px solid #dedede;
  padding-bottom: 20px;
  letter-spacing: 2px;
  text-transform: uppercase;
  font-size: 16px;
  margin-bottom: 20px;
}

.post-social-share {
  margin-bottom: 50px;
}

.post-comments {
  margin: 30px 0;
}

.post-comments .media {
  margin-top: 20px;
}

.post-comments .media > .pull-left {
  padding-right: 20px;
}

.post-comments .comment-author {
  margin-top: 0;
  margin-bottom: 0px;
  font-weight: 500;
}

.post-comments .comment-author a {
  color: #3AAFAA;
  font-size: 14px;
  text-transform: uppercase;
}

.post-comments time {
  margin: 0 0 5px;
  display: inline-block;
  color: #808080;
  font-size: 12px;
}

.post-comments .comment-button {
  color: #3AAFAA;
  display: inline-block;
  margin-left: 5px;
  font-size: 12px;
}

.post-comments .comment-button i {
  margin-right: 5px;
  display: inline-block;
}

.post-comments .comment-button:hover {
  color: #3AAFAA;
}

.post-excerpt {
  margin-bottom: 60px;
}

.post-excerpt h3 a {
  color: #000;
}

.post-excerpt p {
  margin: 0 0 30px;
}

.post-excerpt blockquote.quote-post {
  margin: 20px 0;
}

.post-excerpt blockquote.quote-post p {
  line-height: 30px;
  font-size: 20px;
  color: #3AAFAA;
}

.single-blog {
  background-color: #fff;
  margin-bottom: 50px;
  padding: 20px;
}

.blog-subtitle {
  font-size: 15px;
  padding-bottom: 10px;
  border-bottom: 1px solid #dedede;
  margin-bottom: 25px;
  text-transform: uppercase;
}

.next-prev {
  border-bottom: 1px solid #dedede;
  border-top: 1px solid #dedede;
  margin: 20px 0;
  padding: 25px 0;
}

.next-prev a {
  color: #000;
}

.next-prev a:hover {
  color: #3AAFAA;
}

.next-prev .prev-post i {
  margin-right: 10px;
}

.next-prev .next-post i {
  margin-left: 10px;
}

.social-profile ul li {
  margin: 0 10px 0 0;
  display: inline-block;
}

.social-profile ul li a {
  color: #4e595f;
  display: block;
  font-size: 16px;
}

.social-profile ul li a i:hover {
  color: #3AAFAA;
}

.comments-section {
  margin-top: 35px;
}

.author-about {
  margin-top: 40px;
}

.post-author {
  margin-right: 20px;
}

.post-author > img {
  border: 1px solid #dedede;
  max-width: 120px;
  padding: 5px;
  width: 100%;
}

.comment-list ul {
  margin-top: 20px;
}

.comment-list ul li {
  margin-bottom: 20px;
}

.comment-wrap {
  border: 1px solid #dedede;
  border-radius: 1px;
  margin-left: 20px;
  padding: 10px;
  position: relative;
}

.comment-wrap .author-avatar {
  margin-right: 10px;
}

.comment-wrap .media .media-heading {
  font-size: 14px;
  margin-bottom: 8px;
}

.comment-wrap .media .media-heading a {
  color: #3AAFAA;
  font-size: 13px;
}

.comment-wrap .media .comment-meta {
  font-size: 12px;
  color: #888;
}

.comment-wrap .media p {
  margin-top: 15px;
}

.comment-reply-form {
  margin-top: 80px;
}

.comment-reply-form input, .comment-reply-form textarea {
  height: 35px;
  border-radius: 0;
  box-shadow: none;
}

.comment-reply-form input:focus, .comment-reply-form textarea:focus {
  box-shadow: none;
  border: 1px solid #3AAFAA;
}

.comment-reply-form textarea, .comment-reply-form .btn-main, .comment-reply-form .btn-transparent, .comment-reply-form .btn-small {
  height: auto;
}

.widget {
  margin-bottom: 30px;
  padding-bottom: 35px;
}

.widget .widget-title {
  margin-bottom: 15px;
  padding-bottom: 10px;
  font-size: 16px;
  color: #333;
  font-weight: 500;
  border-bottom: 1px solid #dedede;
}

.widget.widget-latest-post .media .media-object {
  width: 100px;
  height: auto;
}

.widget.widget-latest-post .media .media-heading a {
  color: #242424;
  font-size: 16px;
}

.widget.widget-latest-post .media p {
  font-size: 12px;
  color: #808080;
}

.widget.widget-category ul li {
  margin-bottom: 10px;
}

.widget.widget-category ul li a {
  color: #837f7e;
  transition: all 0.3s ease;
}

.widget.widget-category ul li a:before {
  padding-right: 10px;
}

.widget.widget-category ul li a:hover {
  color: #3AAFAA;
  padding-left: 5px;
}

.widget.widget-tag ul li {
  margin-bottom: 10px;
  display: inline-block;
  margin-right: 5px;
}

.widget.widget-tag ul li a {
  color: #837f7e;
  display: inline-block;
  padding: 8px 15px;
  border: 1px solid #dedede;
  border-radius: 30px;
  font-size: 14px;
  transition: all 0.3s ease;
}

.widget.widget-tag ul li a:hover {
  color: #fff;
  background: #3AAFAA;
  border: 1px solid #3AAFAA;
}

.footer {
  padding-bottom: 10px;
}

.footer .copyright a {
  font-weight: 600;
}

.lh-35 {
  line-height: 35px;
}

.logo {
  color: #242424;
  font-weight: 600;
  letter-spacing: 1px;
}

.logo span {
  color: #3AAFAA;
}

.sub-form {
  position: relative;
}

.sub-form .form-control {
  border: 1px solid rgba(0, 0, 0, 0.06);
  background: #f5f8f9;
}

.footer-btm {
  border-top: 1px solid rgba(0, 0, 0, 0.06);
}

.footer-socials li a {
  margin-left: 15px;
}

/*=== MEDIA QUERY ===*/
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

/* 
---------------------------------------------
contact
--------------------------------------------- 
*/

.contact-us {
  padding: 80px 0px;
  background-color: #17242B;
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
}

.contact-us .section-heading h2,
.contact-us .section-heading h2 em,
.contact-us .section-heading h2 span {
  color: #fff;
  cursor: default;
}

.contact-us .section-heading p {
  color: #fff;
  margin-top: 30px;
}

.phone-info {
  margin-top: 40px;
}

.phone-info h5 {
  font-size: 20px;
  font-weight: 700;
  color: #fff;
  cursor: default;
}

.phone-info h5 span i {
  width: 46px;
  height: 46px;
  display: inline-block;
  text-align: center;
  line-height: 46px;
  background-color: #fff;
  border-radius: 50%;
  color: #ff3b2c;
  font-size: 22px;
  margin-left: 30px;
  margin-right: 15px;
  cursor: default;
}

.phone-info h5 span a {
  color: #fff;
  font-size: 15px;
  font-weight: 400;
  cursor: default;
}

form#contact .contact-dec {
  position: absolute;
  right: -166px;
  bottom: 0;
}

form#contact .contact-dec img {
  max-width: 178px;
}

form#contact {
  margin-left: 30px;
  position: relative;
  background-color: #fff;
  padding: 60px 30px;
  border-radius: 20px;
}

form#contact input {
  width: 100%;
  height: 46px;
  border-radius: 33px;
  background-color: #CECECD;
  border: none;
  outline: none;
  font-size: 15px;
  font-weight: 300;
  color: #2a2a2a;
  padding: 0px 20px;
  margin-bottom: 20px;
}

form#contact input::placeholder {
  color: #2a2a2a;
}

form#contact textarea {
  width: 100%;
  min-width: 100%;
  max-width: 100%;
  max-height: 180px;
  min-height: 140px;
  height: 140px;
  border-radius: 20px;
  background-color: #CECECD;
  border: none;
  outline: none;
  font-size: 15px;
  font-weight: 300;
  color: #2a2a2a;
  padding: 15px 20px;
  margin-bottom: 20px;
}

form#contact textarea::placeholder {
  color: #2a2a2a;
}

form#contact button {
  display: inline-block;
  background-color: #3AAFAA;
  font-size: 15px;
  font-weight: 400;
  color: #fff;
  text-transform: capitalize;
  padding: 12px 25px;
  border-radius: 23px;
  letter-spacing: 0.25px;
  border: none;
  outline: none;
  transition: all .3s;
}

form#contact button:hover {
  background-color: #287573;
}





/*.navigation
{
  width: 100%;
  height: 0;
  max-height: 100%;
  position: fixed;
  top: 0;
  left: 0;
  z-index: 999;
}*/
::selection{
    color: #fff;
    background: #287573;
}
::-webkit-scrollbar{
    width: 5px;
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
.wrapper{
    width: 280px;
    background: #fff;
    border-radius: 5px;
    border: 1px solid lightgrey;
    border-top: 0px;
}
.wrapper .title{
    background: #287573;
    color: #fff;
    font-size: 18px;
    font-weight: 500;
    line-height: 60px;
    text-align: center;
    border-bottom: 1px solid #006fe6;
    border-radius: 5px 5px 0 0;
}
.wrapper .form{
    padding: 20px 15px;
    min-height: 250px;
    max-height: 250px;
    overflow-y: auto;
}
.wrapper .form .inbox{
    width: 100%;
    display: flex;
    align-items: baseline;
}
.wrapper .form .user-inbox{
    justify-content: flex-end;
    margin: 13px 0;
}
.wrapper .form .inbox .icon{
    height: 40px;
    width: 40px;
    color: #fff;
    text-align: center;
    line-height: 40px;
    border-radius: 50%;
    font-size: 18px;
    background: #287573;
}
.wrapper .form .inbox .msg-header{
    max-width: 65%;
    margin-left: 10px;
}
.form .inbox .msg-header p{
    color: #fff;
    background: #287573;
    border-radius: 10px;
    padding: 8px 10px;
    font-size: 13px;
    word-break: break-all;
}
.form .user-inbox .msg-header p{
    color: #333;
    background: #efefef;
}
.wrapper .typing-field{
    display: flex;
    height: 60px;
    width: 100%;
    align-items: center;
    justify-content: space-evenly;
    background: #efefef;
    border-top: 1px solid #d9d9d9;
    border-radius: 0 0 5px 5px;
}
.wrapper .typing-field .input-data{
    height: 40px;
    width: 335px;
    position: relative;
}
.wrapper .typing-field .input-data input{
    height: 40px;
    width: 260px;
    outline: none;
    border: 1px solid transparent;
    padding: 0 80px 0 15px;
    border-radius: 3px;
    font-size: 15px;
    background: #fff;
    transition: all 0.3s ease;
}
.typing-field .input-data input:focus{
    border-color: rgba(0,123,255,0.8);
}
.input-data input::placeholder{
    color: #999999;
    transition: all 0.3s ease;
}
.input-data input:focus::placeholder{
    color: #bfbfbf;
}
.wrapper .typing-field .input-data button{
    position: absolute;
    right: 15px;
    top: 50%;
    height: 30px;
    width: 65px;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    outline: none;
    opacity: 0;
    pointer-events: none;
    border-radius: 3px;
    background: #287573;
    border: 1px solid #287573;
    transform: translateY(-50%);
    transition: all 0.3s ease;
}
.wrapper .typing-field .input-data input:valid ~ button{
    opacity: 1;
    pointer-events: auto;
}
.typing-field .input-data button:hover{
    background: #0F3B3A;
}

.chatlogo{
  height: 40px;
  width: 40px;
}

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #3AAFAA;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.wrapper .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.wrapper .cancel {
  background-color: #17242B;
}

/* Add some hover effects to buttons */
.wrapper .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>

</head>

<body>

<header class="navigation">

    <nav class="navbar navbar-expand-lg  py-1" id="navbar" >
        <div class="container">
          <a class="navbar-brand" href="index.php">
            <img src="img/rhu_logo_title.png" style="height:40px; width: 300px;">
          </a>

          <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span>
          </button>
      
          <div class="collapse navbar-collapse text-center" id="navbarsExample09">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#top">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
          <ul class="dropdown-menu" aria-labelledby="dropdown03">
            <li><a class="dropdown-item" href="#m&v">Mission & Vision</a></li>
            <li><a class="dropdown-item" href="#service">Our Services</a></li>
            <li><a class="dropdown-item" href="#announcement">Announcement</a></li>
            <li><a class="dropdown-item" href="#appointmentwith">Appointment With</a></li>
            <li><a class="dropdown-item" href="#systemworks">How System Works</a></li>
            <li><a class="dropdown-item" href="#c&l">Contact & Location</a></li>
          </ul>
        </li>
               <!--<li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>-->
            </ul>

            <form class="form-lg-inline my-2 my-md-0 ml-lg-4 text-center">
               <a href="patient/user-login.php" class="btn btn-solid-border btn-round-full">Login</a>
            </form>
          </div>
        </div>
    </nav>
</header>

<!-- Header Close --> 

<div class="main-wrapper ">
<section class="page-title bg-1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <!--<span class="text-white">Our blog</span>
          <h1 class="text-capitalize mb-4 text-lg">RURAL HEALTH UNIT</h1>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Our blog</a></li>
          </ul>-->
        </div>
      </div>
    </div>
  </div>
</section>

 <?php $settings=mysqli_query($db, "SELECT * FROM system_info");
        $settingsrow=mysqli_fetch_array($settings);

        $vision=$settingsrow['rhu_vision'];
 ?>
<section class="about-info section" id="m&v">
    <div class="container">
        <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="about-info-item mb-4 mb-lg-0">
                    <center>
                
                <img src="img/pila_logo.png"></center>
                </div>      
            </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="about-info-item mb-4 mb-lg-0">
                    <h3 class="mb-3"><span class="text-color mr-2 text-md ">MISSION</span></h3>
                    <p style="text-align: justify; text-justify: inter-word;"><?php echo htmlentities($settingsrow['rhu_mission']); ?></p>
                </div>      
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="about-info-item mb-4 mb-lg-0">
                    <h3 class="mb-3"><span class="text-color mr-2 text-md">VISION</span></h3>
                    <p style="text-align: justify; text-justify: inter-word;"><?php echo ($vision); ?></p>
                </div>      
            </div>
        </div>
    </div>
</section>


<section class="section border-top" style="background-color: rgba(23, 36, 43, .99);" id="service">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-7 text-center">
        <div class="section-title">
          <span class="h6 text-color">OUR SERVICES</span>
          <h2 class="mt-3 content-title text-white">Services Offered of <br>Rural Health Unit</h2>
        </div>
      </div>
    </div>

        <div class="row">
          <?php $services=mysqli_query($db, "SELECT * FROM addservice WHERE sarchive=1");
          while($servicerow=mysqli_fetch_array($services)){ ?>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="service-item mb-5">
         <!-- <i class="ti-angle-double-right text-color"></i>-->
          <h4 class="mb-3 text-white"><?php echo ucfirst($servicerow['sname']); ?></h4>
          <p class="" style="color: #A3A4A5; text-align: justify;"><?php echo ucfirst($servicerow['sdescription']); ?></p>
        </div>
      </div>
    <?php } ?>
  </div>
</section>


<!--announcement-->

<section class="section testimonial bg-gray border-top" id="announcement">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="section-title">
                    <span class="h6 text-color">ANNOUNCEMENT</span>
                    <h2 class="mt-3 content-title">RHU'S ANNOUNCEMENT</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="testimonial-wrap">
          <?php $announcement=mysqli_query($db, "SELECT * FROM announcement
          WHERE `date` >= DATE_SUB(CURDATE(), INTERVAL 7 DAY) AND archive_announcement=1
          ORDER BY id DESC ");
              while($announcementrow=mysqli_fetch_array($announcement)){?>
            <div class="testimonial-item position-relative">
                <i class="ti-announcement text-color"></i>

                <div class="testimonial-item-content">
                  <h5 class="mb-0 text-capitalize"><?php echo ucfirst($announcementrow['subject']);?></h5>
                    <p class="testimonial-text" style="text-align: justify;"><?php echo ucfirst($announcementrow['body']);?></p>

                    <div class="testimonial-author">
                        
                       <?php $datenow=date('Y-m-d');
                           $daterow=$announcementrow['date'];
                              if ($datenow==$daterow) { ?>
                                <p> Today </p>
                          <?php    } else { ?>
                                <p> <?php echo htmlentities($announcementrow['date']); ?> </p>
                          <?php } ?>
                    </div>
                </div>
            </div>
           <?php } ?>
        </div>
    </div>
</section>
<!-- Section Testimonial End -->


<section class="section border-top" id="appointmentwith" >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-title">
                    <span class="h6 text-color">APPOINTMENT</span>
                    <h2 class="mt-3 content-title">YOU CAN SCHEDULE AN APPOINTMENT WITH</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="testimonial-wrap">
      <?php $staff=mysqli_query($db, "SELECT * FROM rhu_staff
          WHERE (access_level=1 OR access_level=2)");
              while($staffrow=mysqli_fetch_array($staff)){?>
            <div class="testimonial-item position-relative">
               <div class="col-lg-12 col-md-6 mb-5 testimonial-item-content">
    <div class="blog-item">
      

      <div class="blog-item-content bg-gray p-4" style="border-radius:20px;">
        <center>
          <?php
 $userfile=$staffrow['doctorimg'];
if($userfile=="" || $userfile=="NULL")
{
  echo "<img class='img-fluid rounded-circle' src='img/user3.png' alt='User-Profile-Image' style='max-width: 170px; max-height: 170px; min-width: 170px; min-height: 170px;'>";
}
else{?>
  <img class="img-fluid rounded-circle" src="<?php echo "employee/includes/avatar/".$staffrow["doctorimg"]; ?>" alt="User-Profile-Image"  style="max-width: 170px; max-height: 170px; min-width: 150px; min-height: 150px;">
<?php } ?>
      
      <br>

        <h3 class="mt-3 mb-3 text-color">Dr./Dra. <?php echo ucfirst($staffrow['fname']); ?> <?php echo ucfirst($staffrow['lname']); ?></h3>
        <p class="mb-4"><?php echo ucfirst($staffrow['position']); ?></p>
 </center>
        
      </div>
    </div>
  </div>
            </div>
          <?php } ?>
        </div>
    </div>
</section>


<section class="section about-2 position-relative border-top" style="background-color: rgba(23, 36, 43, .99);" id="systemworks">
  <div class="container">
    <div class="row">
      <div class="col-lg-1">
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="about-item pr-3 mb-5 mb-lg-0">
          <p class="h6 text-color">HOW THE APPOINTMENT SYSTEM WORKS</p>
          <br>
          <div class="row justify-content-center">
      <div class="col-lg-12 col-md-6 col-sm-6">
        <div class="about-info-item mb-4 mb-lg-0">
          <h3 class="mb-3" style="color: #E0E0E0"><span class="text-color mr-2 ">01</span>Register</h3>
        </div>    
      </div>
    </div>
     <div class="row justify-content-center">
      <div class="col-lg-12 col-md-6 col-sm-6">
        <div class="about-info-item mb-4 mb-lg-0">
          <h3 class="mb-3" style="color: #E0E0E0"><span class="text-color mr-2 ">02</span>Login</h3>
        </div>    
      </div>
    </div>
     <div class="row justify-content-center">
      <div class="col-lg-12 col-md-6 col-sm-6">
        <div class="about-info-item mb-4 mb-lg-0">
          <h3 class="mb-3" style="color: #E0E0E0"><span class="text-color mr-2">03</span>Request an Appointment</h3>
        </div>    
      </div>
    </div>
     <div class="row justify-content-center">
      <div class="col-lg-12 col-md-6 col-sm-6">
        <div class="about-info-item mb-4 mb-lg-0">
          <h3 class="mb-3" style="color: #E0E0E0"><span class="text-color mr-2">04</span>Wait for Confirmation</h3>
        </div>    
      </div>
    </div>
    <br>
    <p class="h6 text-color">OTHER</p>
    <br>
     <div class="row justify-content-center">
      <div class="col-lg-12 col-md-6 col-sm-6">
        <div class="about-info-item mb-4 mb-lg-0">
          <h3 class="mb-3" style="color: #E0E0E0"><span class="text-color mr-2"><i class="ti-control-record"></i></span>Send Feedback</h3>
        </div>    
      </div>
    </div>
        </div>
      </div>
      <div class="col-lg-5 col-md-6">
        <div class="about-item-img">
          <img src="img/calendar (2).png" alt="" class="img-fluid" style="min-width:325px; max-width: 325px; min-height:325px; max-height: 325px;">
        </div>
      </div>
    </div>
  </div>
</section>

<!--
<section class="section blog-wrap bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
    <div class="col-lg-6 col-md-6 mb-5">
        <div class="blog-item">

            <div class="blog-item-content bg-white p-4">
         

                <h3 class="mt-3 mb-3"><a href="blog-single.html">Organizational Chart of Pila Rural Health Unit</a></h3>
                <p class="mb-4"></p>

                <a href="blog-single.html" class="btn btn-small btn-main btn-round-full">View</a>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-6 mb-5">
        <div class="blog-item">
            

            <div class="blog-item-content bg-white p-4">
        

                <h3 class="mt-3 mb-3"><a href="blog-single.html">Flow of Consultation to PHILHEALTH & NON-PHILHEALTH Patients</a></h3>
                <p class="mb-4"></p>

                <a href="blog-single.html" class="btn btn-small btn-main btn-round-full">View</a>
            </div>
        </div>
    </div>
</div>
            </div>  
        </div>
    </div>
</section>-->



<section class="mt-70 position-relative" id="c&l">
  <div class="container">
  <div class="cta-block-2 bg-white p-5 rounded border-1">
    <div class="row justify-content-center align-items-center ">
      <div class="col-lg-5 ">
        <div class="widget">
      
            <h4 class="text-capitalize mb-4">Feel free to message us</h4>
            
            <ul class="list-unstyled footer-menu lh-35">
            <li><i class="fa fa-phone text-danger"></i> <?php echo htmlentities($settingsrow['rhu_contact']); ?></li>
            <li><i class="fa fa-envelope text-danger"></i> <?php echo htmlentities($settingsrow['rhu_email']); ?></li>
          </ul>
     
        
          </div>
        </div>
        <div class="col-lg-4 ">
        <div class="widget">
      
            <h4 class="text-capitalize mb-4">Location</h4>
            
            <ul class="list-unstyled footer-menu lh-35">
            <li><i class="fa fa-map-marker-alt text-danger"></i> <?php echo htmlentities($settingsrow['rhu_address']); ?></li>
            
          </ul>
     
        
          </div>
        </div>
        </div>
      </div>
    </div>

</section>



</div><!--main wrapper-->
<button class="btn open-button btn-solid-border btn-round-full" onclick="openForm()">Ask Me</button>

<div class="chat-popup form-container" id="myForm">
  
    <!--<i class="btn cancel fa fa-times" onclick="closeForm()" style="margin-right: 100px; margin-top:-60px; margin-bottom: -60px;">Close</i>-->
      <!--start of chatbot-->
         <div class="wrapper">
        <div class="title">Rural Health Unit Chatbot <span></span></div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <img class="chatlogo" src="img/pila_logo.png">
                </div>
                <div class="msg-header">
                    <p>Hello there, how can I help you?</p>
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
              <center>
                <input id="data" type="text" placeholder="Type something here.." required="">
                <button id="send-btn">Send</button></center>
            </div>
        </div>
        <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
    </div>
   
</div>
   <!-- Main jQuery -->
    <!--<script src="plugins/jquery/jquery.js"></script>-->
    <script src="js/contact.js"></script>
    <!-- Bootstrap 4.3.1 -->
    <script src="plugins/bootstrap/js/popper.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
   <!--  Magnific Popup-->
    <script src="plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <!-- Slick Slider -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="plugins/counterup/jquery.waypoints.min.js"></script>
    <script src="plugins/counterup/jquery.counterup.min.js"></script>

    <!-- Google Map -->
    <script src="plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    
    
    <script src="js/script.js"></script>  
    
   <script type="text/javascript">
        // Default Configuration
        $(document).ready(function() {
            toastr.options = {
                'closeButton': true,
                'debug': false,
                'newestOnTop': false,
                'progressBar': true,
                'positionClass': 'toast-bottom-left',
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

       <?php if (isset($_SESSION['sessionexpired'])): ?>
    toastr.info("<?php echo flash ('sessionexpired'); ?>");
    <?php endif ?>
    
        });
    </script>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
<script>
        $(document).ready(function(){
            $("#send-btn").on("click", function(){
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                
                // start ajax code
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"> <img class="chatlogo" src="img/pila_logo.png"></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
        });
    </script>

  
  </body>
  </html>