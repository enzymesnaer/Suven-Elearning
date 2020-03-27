<?php 
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Data Science | Machine Learning | Python | Data Analytics | R | Suven Consultants</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" type="text/css" href="dist/fullpage.css" /> -->
    <meta property="og:image" itemprop="image" content="https://suvenconsultants.com/datascience/elearning/mymeta.jpg">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" type="text/css" href="dist/fullpage.css" /> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/favicon.ico" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/internship.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/trainers.css">
    <link rel="stylesheet" href="../css/timeline.css">

   
    <!-- Modernizr -->
    <script src="../js/main.js"></script>
    <script>
      $(window).on("load", function() {
        if ($.cookie('subscribe') == null) {
          setTimeout(function() {
            $('#subscribeModal').modal('show');
          }, 2000);
        }
      });
</script>
<script type="text/javascript">
      
        
      $(document).on('click', '#subscribeme', function(){
      var formdata = $("#subscribeForm").serialize();
      console.log(formdata);
      var subdata_e = document.getElementById("subscribe_email").value;
      var subdata_n = document.getElementById("subscribe_name").value;
      var subdata_c = document.getElementById("subscribe_contact").value;
      // console.log(subdata_e);
      // console.log(subdata_n);
      // console.log(subdata_c);
      if((subdata_e == "" ||  subdata_e == null) && (subdata_c == "" ||  subdata_c == null) && (subdata_n == "" || subdata_n == null)){
        alert("Please enter all details");
      }else{
        $('#subscribeModal').modal('hide');
        $.ajax({
          url:'subscribeus.php',
          method:'POST',
          data: formdata,
          success:function(response){
            $("#displayinModal").html(response);
            $('#actionsModal').modal('show');
          }
        });
      }
      
    });

    </script>

    
    
    <script type="text/javascript">
      document.addEventListener('contextmenu', event => event.preventDefault());

    </script>

    <style>
      html,
      body {
        max-width: 100%;
        overflow-x: hidden;
      }

      .pseudo-ul li::before {
        content: "✓";
        font-weight: 2000;
      }

      .social-links a.twitter {
        background: url(../social-icons/twitter-gray.png);
      }

      .social-links a.flickr {
        background: url(../social-icons/flickr-gray.png);
      }

      .social-links a.vimeo {
        background: url(../social-icons/vimeo-gray.png);
      }

      .social-links a.linkedin {
        background: url(../social-icons/linkedin-gray.png);
      }

      .social-links a.facebook {
        background: url(../social-icons/facebook-gray.png);
      }

      .social-links a.paypal {
        background: url(../social-icons/paypal-gray.png);
      }

      .social-links a.email {
        background: url(../social-icons/email-gray.png);
      }

      .social-links a.yahoo {
        background: url(../social-icons/yahoo-gray.png);
      }

      .social-links a.github {
        background: url(../social-icons/github-gray.png);
      }

      .social-links a.googleplus {
        background: url(../social-icons/googleplus-gray.png);
      }

      .social-links a.apple {
        background: url(../social-icons/apple-gray.png);
      }

      .social-links a.myspace {
        background: url(../social-icons/myspace-gray.png);
      }

      .social-links a.youtube {
        background: url(../social-icons/youtube-gray.png);
      }

      .social-links a.skype {
        background: url(../social-icons/skype-gray.png);
      }

      .social-links a.tumblr {
        background: url(../social-icons/tumblr-gray.png);
      }

      .social-links a.google {
        background: url(../social-icons/google-gray.png);
      }


      .social-links a.twitter:hover {
        background: url(../social-icons/twitter.png);
      }

      .social-links a.flickr:hover {
        background: url(../social-icons/flickr.png);
      }

      .social-links a.vimeo:hover {
        background: url(../social-icons/vimeo.png);
      }

      .social-links a.linkedin:hover {
        background: url(../social-icons/linkedin.png);
      }

      .social-links a.facebook:hover {
        background: url(../social-icons/facebook.png);
      }

      .social-links a.paypal:hover {
        background: url(../social-icons/paypal.png);
      }

      .social-links a.email:hover {
        background: url(../social-icons/email.png);
      }

      .social-links a.yahoo:hover {
        background: url(../social-icons/yahoo.png);
      }

      .social-links a.github:hover {
        background: url(../social-icons/github.png);
      }

      .social-links a.googleplus:hover {
        background: url(../social-icons/googleplus.png);
      }

      .social-links a.apple:hover {
        background: url(../social-icons/apple.png);
      }

      .social-links a.youtube:hover {
        background: url(../social-icons/youtube.png);
      }

      .social-links a.skype:hover {
        background: url(../social-icons/skype.png);
      }

      .social-links a.tumblr:hover {
        background: url(../social-icons/tumblr.png);
      }

      .social-links a.aim:hover {
        background: url(../social-icons/aim.png);
      }

      .social-links a.google:hover {
        background: url(../social-icons/google.png);
      }

      #footer a {
        color: white;
        text-decoration: none;
      }

      .one a {
        margin-right: 30px;
        margin-bottom: 20px;
      }

      .two a {
        margin-right: 15px;
        margin-bottom: 20px;
      }

      /*For the footer of all page*/

      /**/

      .training {
        background-color: #fff;
        border: 1px solid silver;
        box-shadow: 0px 0px 10px silver;
        border-radius: 10px;
        padding-top: 5px;
        padding-left: 5px;
        padding-right: 5px;
        padding-bottom: -5px;
        position: fixed;
        bottom: 50px;
        right: 10px;
        z-index: 999;
        line-height: 10px;
      }

      .syllabus {
        padding: 100px;
      }

      .freshers {
        background-color: #fff;
        border: 1px solid silver;
        box-shadow: 0px 0px 10px silver;
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
        padding-top: 10px;
        padding-left: 10px;
        padding-right: 5px;
        padding-bottom: -10px;
        position: fixed;
        bottom: 50px;
        left: 0px;
        z-index: 999;
        line-height: 10px;
      }


      /* xs < 768 */
      @media screen and (max-width: 767px) {
        .training {
          font-size: 10px;
          line-height: 1px;
          bottom: 90px;
        }

        .freshers {
          font-size: 10px;
          line-height: 10px;
          bottom: 30px;
          padding-top: 5px;
          padding-left: 5px;
          padding-right: 5px;
          padding-bottom: -10px;
        }
      }

      /* sm */
      @media screen and (min-width: 768px) {
        .training {
          font-size: 12px;
        }

        .freshers {
          font-size: 10px;
          line-height: 10px;
          bottom: 30px;
          padding-top: 5px;
          padding-left: 5px;
          padding-right: 5px;
          padding-bottom: -10px;
        }
      }

      /* md */
      @media screen and (min-width: 992px) {
        .training {
          font-size: 14px;
          line-height: 10px;
        }

        .freshers {
          font-size: 14px;
          line-height: 20px;
          bottom: 40px;
          padding-top: 10px;
          padding-left: 10px;
          padding-right: 5px;
          padding-bottom: -10px;
        }
      }

      /* lg */
      @media screen and (min-width: 1200px) {
        .training {
          font-size: 14px;
          line-height: 10px;
        }

        .freshers {
          font-size: 14px;
          line-height: 20px;
          bottom: 40px;
          padding-top: 10px;
          padding-left: 10px;
          padding-right: 5px;
          padding-bottom: -10px;
        }
      }

      .codeint {
        font-size: 11px;
        background-color: #fff;
        border: 1px solid silver;


        box-shadow: 0px 0px 10px silver;
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
        padding-top: 10px;
        padding-left: 10px;
        padding-right: 5px;


        padding-bottom: 5px;
        position: fixed;
        bottom: 130px;
        left: 0px;
        z-index:

          999;
        line-height: 10px;
      }

      .navbar-default {
        background-image: -webkit-linear-gradient(top, #34495e 0, #34495e 100%);
        background-image: -o-linear-gradient(top, #34495e 0, #34495e 100%);
        background-image: -webkit-gradient(linear, left top, left bottom, from(#34495e), to(#34495e));
        background-image: linear-gradient(to bottom, #34495e 0, #34495e 100%);
        background-repeat: repeat-x;
        filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
        border-radius: 0px;
        -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .15), 0 1px 5px rgba(0, 0, 0, .075);
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, .15), 0 1px 5px rgba(0, 0, 0, .075);
      }

      .navbar-default {
        background-color: #f8f8f8;
        border-color: #e7e7e7;
      }

      * {
        box-sizing: border-box;
      }

      *:before,
      *:after {
        box-sizing: border-box;
      }

      .bg-border-radius {
        : -48%;
        overflow: hidden;
        border-radius: 0px 180px 180px 0px;
        background-color: #0080C1;
      }

      q {
        quotes: "“""”""‘""’";
      }

      q:before {
        content: open-quote;
      }

      q:after {
        content: close-quote;
      }

      .btn-default {
        margin: 3px;
        padding: 20px;
        text-align: center;
        text-transform: uppercase;
        transition: 0.5s;
        background-size: 200% auto;
        color: white;
        /* text-shadow: 0px 0px 10px rgba(0,0,0,0.2);*/
        box-shadow: 0 0 20px #eee;
        border-radius: 10px;
        left: 250px;
      }

      .syllabus {
        margin-top: -80px;
      }

      .container {
        margin: 0;
        padding: 0;
      }

      /* Demo Stuff End -> */

      /* <- Magic Stuff Start */

      .btn-default:hover {
        background-position: right center;
        /* change the direction of the change here */
      }

      .btn-1 {
        background-image: linear-gradient(to right, #f6d365 0%, #fda085 51%, #f6d365 100%);
      }

      .card-box {
        /* min-height: 0; */
        position: relative;
        padding: 10px;
        margin-bottom: 20px;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        position: relative;
        cursor: pointer;
        text-align: center;
        margin-top: -48px;
      }

      .card-box:hover {
        background: linear-gradient(to right, #1fa2ff17 0%, #12d8fa2b 51%, #1fa2ff36 100%);
      }

      .card-box:after {
        display: block;
        content: '';
        width: 100%;
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
      }

      .card-title h2 {
        margin: 0;
        padding-top: 5%;
        color: #2196F3;
        font-family: 'Oswald', sans-serif;
        text-transform: uppercase;
        font-size: 24px;
        line-height: 1;
        margin-bottom: 15px;
      }

      .card-title p {
        margin: 0;
        margin-bottom: 10px;
        font-size: 16px;
      }

      .card-link a {
        text-decoration: none;
        font-family: 'Oswald', sans-serif;
        color: #FF5722;
        font-size: 15px;
      }

      .bg-border-radius {
        overflow: hidden;
        border-radius: 0px 100px 100px 0px;
        background-color: #0080C1;
      }

      @media only screen and (max-width: 600px) {
        .bg-border-radius {
          width: 95%;
        }
      }

      .strikethrough-diagonal {
        position: relative;
        color: red;
        font-weight: 500;
      }

      .strikethrough-diagonal:before {
        position: absolute;
        content: '';
        left: 0;
        top: 45%;
        right: 0;
        border-top: 1px solid;
        border-color: inherit;
        -webkit-transform: skewY(-10deg);
        -moz-transform: skewY(-10deg);
        transform: skewY(-10deg);
      }

      .well {
        background: #228B22;
        color: #fff;
      }



      .checkmark {
        display: inline-block;
        position: relative;
        opacity: 0;
      }

      .checkmark:after {
        content: '';
        display: block;
        width: 7px;
        height: 12px;
        border: solid #fcba03;
        border-width: 0 2.5px 2.5px 0;
        border-color: #fcba03;
        transform: rotate(45deg);
      }

      .checkmark-animation {
        animation: pop-up .5s ease .5s;
        animation-fill-mode: forwards;
      }

      .invalid {
        opacity: 0;
        position: relative;
        text-align: center;
        font-family: monospace;
        color: #ED574A;
        animation: pop-up .7s ease .4s;
        animation-fill-mode: forwards;
      }

      @keyframes pop-up {
        from {
          top: 10px;
          opacity: 0;
        }

        to {
          top: 0px;
          opacity: 1;
        }
      }

      .subjects1 .label,
      .label-primary {
        background: #55aef7 !important;
        color: white;
        border-radius: 0.25em;
        margin-left: 6px;
        padding: 5px 15px 5px 15px !important;
        color: white;
        border-radius: 0.25em;
        height: 40px;
        font-size: 13px;
      }


      #authenticationModal .modal-header li a {
        background-color: #2ecc71;
        border-radius: 0px;
        color: #fff;
      }


      #authenticationModal .modal-header li a:hover {
        background-color: #2ecc71;
        border-radius: 0px;
        color: #fff;
      }

      #authenticationModal .modal-header .active a {
        background-color: #34495e !important;
        border-radius: 0px;
        color: #fff;
        font-weight: bold;
      }

      #authenticationModal .modal-content {
        border-radius: 0px !important;
      }


      #registration {
        margin-top: -1%;
      }

    </style>
  </head>

  <body style="">

    <!-- nav bar -->


    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="https://suvenconsultants.com/" style=""><img src="https://suvenconsultants.com/mainpagefiles/images/sctpl_logo.png" style="display:inline; margin-left:30px;">
            <span>Suven Consultants & Technology Pvt. Ltd.</span></a>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right hidden-sm hidden-xs">
            <li style="margin-left:-10px;padding-left:3px;margin-right: 20px;"><?php
                    if(isset($_SESSION['uid'])){
                    
                    
                    echo '<li><button class="btn btn-danger" style="margin-left:13px;margin-top:15px;"><a href="logout.php" class="btn btn-danger btn-sm center-block">Logout</a></button></li>'; 
                       
                    }else{
                        
                        echo '<li><button class="btn btn-success" data-toggle="modal" data-target="#authenticationModal" style="margin-left:13px;margin-top:15px;"><b>Log In</b></button></li>'; 
                        
                    }
                ?></li>
            <li style="margin-left:-10px;padding-left:3px;color:#fcba03;margin-right: 20px;"><a href="https://docs.google.com/forms/d/e/1FAIpQLScPpX9SPBQkjj5xklDta_EOO0mADa-st3Zw8941ThkS5woKCQ/viewform" target="_blank" class="head_panel" style="font-size:14px; color:#fcba03 !important;">
                <div class="checkmark checkmark-animation"></div>&nbsp;&nbsp;Join Wait List
              </a></li>

            // <?php
        // 		if(isset($_SESSION['uid'])){
                              
        //                 echo '<li>
        //                     <ul class="dropdown-menu hidden-sm hidden-xs" style="padding:5px;">
        //                         <li class="text-center"><p><b>'.$_SESSION['name'].'</b></p>
        //                         <p>'.$_SESSION['email'].'</p></li>
        //                         <li class="divider"></li>
        //                         <a href="logout.php" class="btn btn-danger btn-sm center-block">Logout</a>
        //                     </ul>
                            
        //                     <ul class="dropdown-menu hidden-lg hidden-md" style="padding:5px;">
        //                         &nbsp;&nbsp;<a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
        //                     </ul></li>';    
        // 		}    
        //         ?>
            <li style="margin-left:-10px;padding-left:3px;"><a href="https://datascience.suvenconsultants.com" class="head_panel" style="font-size:14px">Classroom Training</a></li>

          </ul>
          <ul class="nav navbar-nav navbar-right hidden-lg hidden-md">
            <li style="margin-top:-2px;"><?php
                    // if(isset($_SESSION['uid'])){
                    // echo '';
                    // }else{
                    //   echo '<li><button class="btn btn-success" data-toggle="modal" data-target="#authenticationModal" style="margin-left:13px;margin-top:15px;"><b>Log In</b></button></li>'; 
                    // }
                ?></li>
            <?php
        // 		if(isset($_SESSION['uid'])){
        // 		    echo '<li class="dropdowns">
        //                     <div class="inset" class="dropdown-toggle" data-toggle="dropdown">';
                              
        //                 echo '</div>
        //                     <ul class="dropdown-menu hidden-sm hidden-xs" style="padding:5px;">
        //                         <li class="text-center"><p><b>'.$_SESSION['name'].'</b></p>
        //                         <p>'.$_SESSION['email'].'</p></li>
        //                         <li class="divider"></li>
        //                         <a href="logout.php" class="btn btn-danger btn-sm center-block">Logout</a>
        //                     </ul>
                            
        //                     <ul class="dropdown-menu hidden-lg hidden-md" style="padding:5px;">
        //                         &nbsp;&nbsp;<a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
        //                     </ul></li>';    
        // 		}    
                ?>

            <li style="margin-top:-5px; color:#fcba03;"><a href="https://docs.google.com/forms/d/e/1FAIpQLScPpX9SPBQkjj5xklDta_EOO0mADa-st3Zw8941ThkS5woKCQ/viewform" target="_blank" class="head_panel" style="font-size:14px; color:#fcba03; !important">
                <div class="checkmark checkmark-animation"></div>&nbsp;&nbsp;Join Wait List
              </a></li>
            <li style="margin-top:-5px;"><a href="https://datascience.suvenconsultants.com" class="head_panel" style="font-size:14px">Classroom Training</a></li>
          </ul>

          <!---->




          <!---->
        </div>
      </div>
    </nav>
    <br><br>


    <?php include("postnew.php");?>
    <!-- Login & Registration Modal -->
    <div class="modal" id="authenticationModal">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <div class="modal-header" style="padding: 0px;">
            <ul class="nav nav-pills nav-justified">
              <li class="active"><a href="#login" data-toggle="pill">Login</a></li>
              <li><a href="#registration" data-toggle="pill">Register</a></li>
            </ul>
          </div>
          <div class="modal-body">

            <!--<h3 class="text-center"><img src="images/sctpl_logo.png" height="32px" width="32px" /> Suven Consultants & Technology Pvt. Ltd.</h3><br>-->
            <div class="tab-content" style="border:none;">
              <div id="login" class="tab-pane fade in active">
                <!--<form name="loginForm" action="authentication.php" method="post" onsubmit="">-->
                <form name="loginForm" action="authentication.php" method="post" onsubmit="return validateLogin()">
                  <input type="hidden" name="action" value="login" />
                  <div class="form-group">
                    <label>Email ID:</label>
                    <input type="email" class="form-control" name="email" placeholder="Email ID" required="required">
                  </div>
                  <div class="form-group">
                    <label>Password:</label>
                    <input type="password" class="form-control" name="password" placeholder="Password" required="required" minlength="6">
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-success center-block">Login <span class="glyphicon glyphicon-log-in"></span></button>
                  </div>
                  <p class="text-center">
                    <a href="#registration" data-toggle="pill">New to our online courses? Register </a>
                  </p>
                </form>
              </div>
              <div id="registration" class="tab-pane fade">
                <!--<form name="registerForm" action="authentication.php" method="post" onsubmit="">-->
                <form name="registerForm" action="authentication.php" method="post" onsubmit="return validateRegister()">
                  <input type="hidden" name="action" value="register" />
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                      <label>Full Name:</label>
                      <input type="text" class="form-control" name="name" placeholder="Enter your full name" required="required">
                      <p>This name would be used for certification purpose.</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                      <label>Email ID:</label>
                      <input type="email" class="form-control" name="emailid" placeholder="Enter your Email ID" required="required">
                      <p>This would be your default login username</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                      <label>Password:</label>
                      <input type="password" class="form-control" name="password" id="password" placeholder="Password (minimum 8 characters)" required="required" minlength="8">
                      <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                      <label>Confirm Password:</label>
                      <input type="password" class="form-control" name="confirm_password" placeholder="Confirm password" required="required">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                      <label>Contact No.:</label>
                      <input type="tel" class="form-control" name="contact" placeholder="Enter your contact no." required="required">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                      <p>Our team would connect with you to understand your study requirements very soon.</p>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-success center-block">Register <i class="fa fa-user-plus"></i></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Login & Registration Modal -->

    <!-- ///////////////// Start of Footer /////////////////////////// -->
    <h3 class="text-center center-block">Companies where our students are working</h3>
    <div class="row text-center center-block">

      <div class="col-lg-2 col-md-2 text-center center-block"></div>
      <div class="col-lg-8 col-md-8 text-center center-block">
        <div class="col-sm-3">
          <div class="panel panel-default text-center center-block">
            <div class="panel-body" style="margin:7px;">
              <center>
                <img src="assets/imgm/icons/compns/jpm.png" style="width:auto; height:80px;" class="img-responsive">
              </center>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="panel panel-default text-center center-block">
            <div class="panel-body" style="margin:7px;">
              <center><img src="assets/imgm/icons/compns/acc.png" style="width:auto; height:80px;" class="img-responsive"></center>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="panel panel-default text-center center-block">
            <div class="panel-body" style="margin:7px;">
              <center> <img src="assets/imgm/icons/compns/quant.png" style="width:auto; height:80px;" class="img-responsive"></center>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="panel panel-default text-center center-block">
            <div class="panel-body" style="margin:7px;">
              <center><img src="assets/imgm/icons/compns/mstan.jpg" style="width:auto; height:80px;" class="img-responsive"></center>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="panel panel-default text-center center-block">
            <div class="panel-body" style="margin:7px;">
              <center><img src="assets/imgm/icons/compns/tcs.png" style="width:auto; height:80px;" class="img-responsive"></center>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="panel panel-default text-center center-block">
            <div class="panel-body" style="margin:7px;">
              <center><img src="assets/imgm/icons/compns/mphasis.jpg" style="width:auto; height:80px;" class="img-responsive"></center>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="panel panel-default text-center center-block">
            <div class="panel-body" style="margin:7px;">
              <center><img src="assets/imgm/icons/compns/ey.png" style="width:auto; height:80px;" class="img-responsive"></center>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="panel panel-default text-center center-block">
            <div class="panel-body" style="margin:7px;">
              <center><img src="assets/imgm/icons/compns/here.png" style="width:auto; height:80px;" class="img-responsive"></center>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-2"></div>
    </div>

    <section id="bottom" class="navclass">
      <div class="container-fluid hidden-xs hidden-sm" id="footer">
        <br><br><br>
        <div class="row">
          <div class="col-lg-12 col-md-12 text-center center-block">

            <div class="col-lg-2 col-md-2 text-left"></div>

            <div class="col-lg-8 col-md-8 text-left">
              <div class="col-md-4 text-left">

                <p><a style="margin-left: 60%; font-size:13px;" href="https://datascience.suvenconsultants.com/elearning/aboutus.php" target="_blank">About Us</a></p>
                <p><a style="margin-left: 60%; font-size:13px;" class="" href="https://www.youtube.com/user/rockyjagtiani" target="_blank">YouTube</a></p>
                <p><a style="margin-left: 60%; font-size:13px;" class="" href="https://www.linkedin.com/in/rocky-jagtiani-3b390649/" target="_blank">LinkedIn</a></p>
                <br><br><br><br>
              </div>
              <div class="col-md-4 text-left">

                <p><a class="" style="margin-left: 10%;font-size:13px;" href="https://datascience.suvenconsultants.com" target="_blank">Classroom training at Mumbai</a></p>
                <p><a class="" style="margin-left: 10%;font-size:13px;" href="#onlinecourses">List of Online Courses</a></p>
                <br><br><br><br>
              </div>
              <div class="col-md-4 text-left">

                <p><a class="" style="font-size:13px;" href="https://docs.google.com/forms/u/1/d/e/1FAIpQLScPpX9SPBQkjj5xklDta_EOO0mADa-st3Zw8941ThkS5woKCQ/viewform" target="_blank"><b style="color:#fcba03;">Join our Wait List</b></a></p>
                <p><a class="" style="font-size:13px;" href="https://datascience.suvenconsultants.com/elearning/refundpolicy.php" target="_blank">Refund Policy</a></p>
                <p><a class="" style="font-size:13px;" href="https://mail.google.com/mail/?view=cm&fs=1&to=rocky@suvenconsultants.com" target="_blank">Help & Support</a></p>
                <br><br><br><br>

              </div>
              <center classs="text-center">
                <footer style="font-size:13px;">&copy; 2020 Suven Consultants & Technology Pvt Ltd</footer>
              </center>
              <br><br><br>

            </div>
            <div class="col-lg-2 col-md-2 text-left"></div>
          </div>

        </div>


        <!-- end of row -->
      </div><!-- end of container-->


      <div class="container-fluid hidden-lg hidden-md" id="footer">
        <div class="row">
          <div class="col-sm-12 col-xs-12 text-center center-block">
            <!--<div class="col-sm-2 col-xs-2 text-left"></div>-->
            <div class="col-sm-12 text-center">
              <br>
              <p><a style="font-size:13px;" href="https://datascience.suvenconsultants.com/elearning/aboutus.php" target="_blank">About Us</a></p>
              <p><a style="font-size:13px;" class="" href="https://www.youtube.com/user/rockyjagtiani" target="_blank">YouTube</a></p>
              <p><a style="font-size:13px;" class="" href="https://www.linkedin.com/in/rocky-jagtiani-3b390649/" target="_blank">LinkedIn</a></p>
              <br>
            </div>
            <div class="col-sm-12 text-center">

              <p><a class="" style="font-size:13px;" href="https://datascience.suvenconsultants.com" target="_blank">Classroom training at Mumbai</a></p>
              <p><a class="" style="font-size:13px;" href="#onlinecourses">List of Online Courses</a></p>
              <br>
            </div>
            <div class="col-sm-12 text-center">

              <p><a class="" style="font-size:13px;" href="https://docs.google.com/forms/u/1/d/e/1FAIpQLScPpX9SPBQkjj5xklDta_EOO0mADa-st3Zw8941ThkS5woKCQ/viewform" target="_blank"><b style="color:#fcba03;">Join our Wait List</b></a></p>
              <p><a class="" style="font-size:13px;" href="https://datascience.suvenconsultants.com/elearning/refundpolicy.php" target="_blank">Refund Policy</a></p>
              <p><a class="" style="font-size:13px;" href="https://mail.google.com/mail/?view=cm&fs=1&to=rocky@suvenconsultants.com" target="_blank">Help & Support</a></p>
              <br><br>

            </div>
            <center classs="text-center">
              <footer style="font-size:13px;">&copy; 2020 Suven Consultants & Technology Pvt Ltd</footer>
            </center>
            <br><br>
          </div>
        </div>
        <!--<div class="row" style="margin-left: auto; margin-right: auto;">-->
        <!--  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">-->
        <!--    <ul>-->
        <!--      <h4><strong>Training Programs</strong></h4>-->
        <!--      <li><a href="https://datascience.suvenconsultants.com" target="_blank">Masters in Data Science</a></li>-->
        <!--      <li><a href="https://db.suvenconsultants.com" target="_blank">Database SQL+PL/SQL</a></li>-->
        <!--      <li><a href="https://android.suvenconsultants.com" target="_blank">Mobile App Dev (Android + iOS)</a></li>-->
        <!--      <li><a href="https://java.suvenconsultants.com" target="_blank">Java Certification</a></li>-->
        <!--      <li><a href="https://monster.suvenconsultants.com" target="_blank">Web Technologies</a></li>-->
        <!--      <li><a href="https://datascience.suvenconsultants.com/#dataanalytics" target="_blank">Data Analytics using R</a></li>-->
        <!--      <li><a href="https://datascience.suvenconsultants.com/#python" target="_blank">Python (Core + Advanced)</a></li>-->
        <!--      <li><a href="https://android.suvenconsultants.com/#section-angular" target="_blank">Angular - Firebase</a></li>-->
        <!--      <li><a href="https://digitalmarketing.suvenconsultants.com/" target="_blank">Digital Marketing SEO+SEM</a></li>-->
        <!--      <li><a href="https://hacking.suvenconsultants.com/" target="_blank">Ethical Hacking</a></li>-->
        <!--      <li><a href="https://statistics.suvenconsultants.com/" target="_blank">Statistics + Excel & Tableau</a></li>-->
        <!--      <li><a href="https://training.suvenconsultants.com/" target="_blank">List of all Training Programs</a></li>-->
        <!--      <li><a href="https://internship.suvenconsultants.com/" target="_blank">Coding Internships</a></li>-->
        <!--    </ul>-->
        <!--  </div>-->
        <!--  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">-->
        <!--    <ul>-->
        <!--      <h4><strong>Recruitment Services</strong></h4>-->
        <!--      <li><a href="https://freshers.suvenconsultants.com/" target="_blank">Fresher IT Jobs</a></li>-->
        <!--      <li><a href="#" data-toggle="modal" data-target="#hiringModal">IT Recruitment - Lateral</a></li>-->
        <!--      <li><a href="#" data-toggle="modal" data-target="#hiringModal">Non-IT and Support for Lateral upto VP/GM etc.</a></li>-->
        <!--      <li><a href="#" data-toggle="modal" data-target="#hiringModal">Employee Verification through Reference Checks</a></li>-->
        <!--      <li><a href="#" data-toggle="modal" data-target="#hiringModal">Interview and Rejection handling services</a></li>-->
        <!--      <li><a href="#" data-toggle="modal" data-target="#hiringModal">Salary Negotiations as per Industry norms</a></li>-->
        <!--      <li><a href="#" data-toggle="modal" data-target="#hiringModal">Profile Mapping as per Industry norms</a></li>-->
        <!--      <li><a href="#" data-toggle="modal" data-target="#hiringModal">Complete Hand-holding Support till Joining</a></li>-->
        <!--    </ul>-->
        <!--  </div>-->
        <!--  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">-->
        <!--    <ul>-->
        <!--      <h4><strong>Company</strong></h4>-->
        <!--      <li><a href="https://suvenconsultants.com/recruitment.php" target="_blank">About us</a></li>-->
        <!--      <li><a href="https://suvenconsultants.com/JobPosting.php" target="_blank">Current Job Openings</a></li>-->
        <!--      <li><a href="https://suvenconsultants.com/feedback.php" target="_blank">Training Feedbacks</a></li>-->
        <!--      <li><a href="https://mentor.suvenconsultants.com/" target="_blank">Our Mentors</a></li>-->
        <!--      <li><a href="https://www.google.co.in/search?nfpr=1&q=suven+consultants&spell=1&sa=X&ved=0ahUKEwidoubh1dXdAhWFNY8KHfrxBZoQBQgpKAA&biw=1366&bih=657#lrd=0x3be7c8afbfffffff:0xcf0cd79d3c52220a,1,,," target="_blank">Google Reviews</a></li>-->
        <!--      <li><a href="https://www.facebook.com/suvenconsultants/reviews/?ref=page_internal" target="_blank">Facebook Reviews</a></li>-->
        <!--      <li><a href="https://suventechnology.blogspot.com" target="_blank">Technical Blog</a></li>-->
        <!--    </ul>-->
        <!--  </div>-->
        <!--  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">-->
        <!--    <ul>-->
        <!--      <h4><strong>Get In Touch</strong></h4>-->
        <!--      <li><a href="#" data-toggle="modal" data-target="#addressModal">SCTPL Branches</a></li>-->
        <!--      <li><a href="#" data-toggle="modal" data-target="#contactModal">Contact us</a><br>-->
        <!--      <li><a href="https://www.facebook.com/suvenconsultants/" target="_blank">Facebook</a></li>-->
        <!--      <li><a href="https://www.linkedin.com/in/rocky-jagtiani-3b390649/" target="_blank">LinkedIn For Training</a></li>-->
        <!--      <li><a href="https://in.linkedin.com/in/simran-jagtiani-752b0347" target="_blank">LinkedIn For Recruitment</a></li>-->
        <!--    </ul>-->
        <!--  </div>-->
        <!--</div>-->
        <!--<div class="row">-->
        <!--  <div class="social-links">-->
        <!--    <h4>Connect with us</h4>-->
        <!--    <a class="facebook" href="https://www.facebook.com/suvenconsultants/" target="_blank"></a>-->
        <!--    <a class="linkedin" href="https://in.linkedin.com/in/simran-jagtiani-752b0347" target="_blank"></a>-->
        <!--    <a class="youtube" href="https://www.youtube.com/user/rockyjagtiani" target="_blank"></a>-->
        <!--  </div>-->
        <!--</div> <!-- end of row -->-->
      </div>
    </section>


    <!-- Popup Modal For Addresses -->
    <div id="addressModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <div class="modal-content">
          <div class="modal-header text-center">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4><strong>SCTPL Training Room Addresses</strong></h4>
            <h5 class="modal-title">Centralized Contact No.: <strong>+91 9870014450</strong></h5>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <address class="chembur_address">
                </address>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <address class="borivali_address">
                </address>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <address class="thanenew_address">
                </address>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <address class="dadarnew_address">
                </address>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="Subscribe us">
      <div class="modal-dialog modal-smll" role="modal">
          <div class="modal-content">
            <div class="modal-content">
              <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span class="badge" style="background-color:#000">x</span>
                </button>
                <h4 class="modal-title" id="myModalLabel" style=""><b>Allow my team to send you some great resources.</b></h4>
              </div>
              <div class="modal-body">
                <form class="form-group" action="" id="subscribeForm">
                  <br>
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <input type="hidden" name="action_mail" value="subscribeme"/>
                      <input type="text" class="form-control input-lg" name="subscribe_name" id="subscribe_name" placeholder="Enter Your Full Name"><br>
                      <input type="email" class="form-control input-lg" name="subscribe_email" id="subscribe_email" placeholder="Enter Your Email Id">
                      <p class="text-center">Allow my Data Science team to call and understand your study requirements.</p>
                      <input type="number" name="subscribe_contact" id="subscribe_contact" class="form-control input-lg" placeholder="Enter Your Contact Number">
                    </div>
                  </div>
                  <div class="row">
                  <button type="button" id="subscribeme" class="btn btn-success btn-lg center-block block-center" style="padding-top:15px;border-radius:0px;">Subscribe</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
      </div>
    </div>

    <!--Action Resultant Modal -->
    <div class="modal fade" id="actionsModal" tabindex="-1" role="dialog" aria-lebelledby="Subscribe us">
    <div class="modal-content">
          <div class="modal-header text-center">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="badge" style="background-color:#000;">×</span></span></button>
                <h4 class="modal-title" id="myModalLabel" style="color:#28a745;"><b>Would get in touch with you very soon</b></h4>
          </div>
          <div class="modal-body text-center" id="displayinModal">
          </div>
    </div>
    </div>

    <!-- SCRIPTS  Start-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.0/jquery.cookie.min.js"></script>

    


    <script>
      /* Validation JS Function For Login */
      function validateLogin() {
        var email = document.forms["loginForm"]["email"].value;
        var password = document.forms["loginForm"]["password"].value;
        var passlen = password.length.value;


        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (email == "" || email == null) {
          alert("Please Enter Your Email ID");
          return false;
        } else if (reg.test(email) == false) {
          alert("Invalid Email Address");
          return false;
        } else if (password == "" || password == null) {
          alert("Please Enter Your Password");
          return false;
        } else if (password.length < 8) {
          alert("Password length must be grater than 8 characters.");
          return false;
        }

      }

      /* Validation JS Function For Registration */
      function validateRegister() {
        var name = document.forms["registerForm"]["name"].value;
        var email = document.forms["registerForm"]["emailid"].value;
        var password = document.forms["registerForm"]["password"].value;
        var confirmpassword = document.forms["registerForm"]["confirm_password"].value;
        var contact = document.forms["registerForm"]["contact"].value;

        var phoneno = /^[0-9]*$/;

        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (name == "" || name == null) {
          alert("Please Enter Your Name");
          return false;
        } else if (email == "" || email == null) {
          alert("Please Enter Your Email ID");
          return false;
        } else if (reg.test(email) == false) {
          alert("Invalid Email Address");
          return false;
        } else if (password == "" || password == null) {
          alert("Please Enter Your Password");
          return false;
        } else if (password.length < 8) {
          alert("Password length must be greater than 8 characters");
          return false;
        } else if (confirmpassword == "" || confirmpassword == null) {
          alert("Confirm Password should not be empty");
          return false;
        } else if (password !== confirmpassword) {
          alert("Your password and confirmation password do not match.");
          return false;
        } else if (contact == "" || contact == null) {
          alert("Please Enter Your Contact Number");
          return false;
        } else if (phoneno.test(contact) == false) {
          alert("Please Enter Valid Contact Number");
          return false;
        }
      }

      /* Validation JS Function For Expert Registration */
      function validateExpert() {
        var e_name = document.forms["expertForm"]["ie_name"].value;
        var e_skill = document.forms["expertForm"]["ie_skill"].value;
        var e_mobile = document.forms["expertForm"]["ie_mobile"].value;
        var e_email = document.forms["expertForm"]["ie_email"].value;

        var phoneno = /^[0-9]*$/;
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (e_name == "" || e_name == null) {
          alert("Please Enter Your Name");
          return false;
        } else if (e_skill == "" || e_skill == null) {
          alert("Please Enter Your Skills");
          return false;
        } else if (e_mobile == "" || e_mobile == null) {
          alert("Please Enter Your Mobile No.");
          return false;
        } else if (phoneno.test(e_mobile) == false) {
          alert("Please Enter Valid Mobile No.");
          return false;
        } else if (e_email == "" || e_email == null) {
          alert("Please Enter Your Email ID");
          return false;
        } else if (reg.test(e_email) == false) {
          alert("Invalid Email Address");
          return false;
        }

      }

      


      $(document).ready(function() {

        $(".toggle-password").click(function() {
          $(this).toggleClass("fa-eye fa-eye-slash");
          var x = document.getElementById("password");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
        });

        
      });

    </script>
    <!-- SCRIPTS END -->

    <script>
      function validateContact() {
        var name = document.forms["contactForm"]["name"].value;
        var mobile = document.forms["contactForm"]["mobile"].value;
        var email = document.forms["contactForm"]["mail_id"].value;
        var purpose = document.forms["contactForm"]["purpose"].value;
        var captcha = document.forms["contactForm"]["code"].value;

        var phoneno = /^\d{10}$/;
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (name == "" || name == null) {
          alert("Please Enter Your Name");
          return false;
        } else if (mobile == "" || mobile == null) {
          alert("Please Enter Your Mobile Number");
          return false;
        } else if (phoneno.test(mobile) == false) {
          alert("Please Enter Valid Mobile Number");
          return false;
        } else if (email == "" || email == null) {
          alert("Please Enter Your Email ID");
          return false;
        } else if (reg.test(email) == false) {
          alert("Invalid Email Address");
          return false;
        } else if (purpose == "" || purpose == null) {
          alert("Please Enter Your Purpose");
          return false;
        } else if (purpose.length > 100) {
          alert("You can not enter more than 100 characters");
          return false;
        } else if (captcha == "" || captcha == null) {
          alert("Please Enter Captcha Code");
          return false;
        }

      }

      function validateHiring() {
        var companyname = document.forms["hiringForm"]["company_name"].value;
        var hrname = document.forms["hiringForm"]["hr_name"].value;
        var contact = document.forms["hiringForm"]["contact"].value;
        var email = document.forms["hiringForm"]["mail_id"].value;
        var requirement = document.forms["hiringForm"]["requirement"].value;
        var captcha = document.forms["hiringForm"]["code"].value;

        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (companyname == "" || companyname == null) {
          alert("Please Enter Your Company Name");
          return false;
        } else if (hrname == "" || hrname == null) {
          alert("Please Enter HR Name");
          return false;
        } else if (contact == "" || contact == null) {
          alert("Please Enter Contact Number");
          return false;
        } else if (email == "" || email == null) {
          alert("Please Enter Your Email ID");
          return false;
        } else if (reg.test(email) == false) {
          alert("Invalid Email Address");
          return false;
        } else if (requirement == "" || requirement == null) {
          alert("Please Enter Your Requirement");
          return false;
        } else if (requirement.length > 100) {
          alert("You can not enter more than 100 characters");
          return false;
        } else if (captcha == "" || captcha == null) {
          alert("Please Enter Captcha Code");
          return false;
        }

      }

    </script>
    <script>
      // $(window).on("load", function() {
      //   if ($.cookie('subscribe') == null) {
      //     setTimeout(function() {
      //       $('#subscribeModal').modal('show');
      //     }, 8000);
      //   }
      // });

      // console.log("hello world");

  


    // Ajax Call for Subscription
    // $(document).on('click', '#subscribeme', function(){
    //   var formdata = $("#subscribeForm").serialize();
    //   console.log(formdata)
    //   var subdata_e = document.getElementById("subscribe_email").value;
    //   var subdata_n = document.getElementById("subscribe_name").value;
    //   var subdata_c = document.getElementById("subscribe_contact").value;
    //   console.log(subdata_e);
    //   console.log(subdata_n);
    //   console.log(subdata_c);
    //   if(subdata_e == "" || subdata_e == null && subdata_n == "" || subdata_n == null && subdata_c == "" || subdata_c == null){
    //     alert("Please enter all details");
    //   }else{
    //     $(#subscribeModal).modal('hide');
    //     $.ajax({
    //       url:'subscribeus.php',
    //       method:'post',
    //       data: formdata,
    //       success:function(){
    //         $("#displayinModal").html(data);
    //         $('#actionsModal').modal('show');
    //       }
    //     });
    //   }
    // });
    </script>


    <!--End of Tawk.to Script-->

    <!--<div class="training hidden-xs hidden-sm">-->
    <!--  <p>Register for free : training - <a href="https://goo.gl/forms/D1MXNNbAnxdLers72" target="_blank"><b>here</b></a></p>-->
    <!--  <p><a href="https://drive.google.com/file/d/0B4rCFkKCsCeKc0pDZDdQY3dmVG8/view" target="_blank"><b>Download Information Brochure</b></a></p>-->
    <!--</div>-->
    <!--<div class="codeint hidden-xs hidden-sm" style="margin-left:-5px;margin-bottom:-27px;">-->
    <!--  <p>-->
    <!--    <p>-->
    <!--      <Strong>Coding<br><br>Internships</strong>-->
    <!--    </p>-->
    <!--    <p><a href="https://internship.suvenconsultants.com/" target="_blank"><b>Apply Here</b></a></p>-->


    <!--</div>-->
    <!--<div class="freshers hidden-sm hidden-xs" style="margin-left:-5px; line-height:10px;">-->
    <!--  <p><Strong>Freshers</strong></p>-->
    <!--  <p><a href="https://freshers.suvenconsultants.com/" target="_blank" style="font-size:11px;"><b>Apply Here</b></a></p>-->
    <!--</div>-->

  </body>
  <script>
    function python_rar() {
      var pwd = prompt("Please enter a Password", "");
      if (pwd == "rocky0809Py") {

        window.open("downloads/suvenPythonWorkspace.rar", "_blank");
      } else {
        alert("Password you enter was incorrect");
      }

    }

    function python_rar2() {
      var pwd = prompt("Please enter a Password", "");
      if (pwd == "rocky0809ML") {

        window.open("https://drive.google.com/open?id=13AOSD8amnk8iNwJmeP0pwIgKSBF12g70", "_blank");
      } else {
        alert("Password you enter was incorrect");
      }

    }


    function aml(link_number) {


      var pwd = prompt("Please enter a Password", "");

      if (pwd == "Lokesh2020AmL") {
        if (link_number == 2) {
          window.open("downloads/part 3_Exploring and Proccessing text data.rar", "_blank");
        } else if (link_number == 3) {
          window.open("downloads/part 4_Converting Text to Features.rar", "_blank");
        } else if (link_number == 4) {
          window.open("downloads/part 5_Advanced NLP.rar", "_blank");
        } else if (link_number == 5) {
          window.open("downloads/part 6_Four Real_World Case Studies n Solutions.rar", "_blank");
        } else if (link_number == 6) {
          window.open("downloads/part 7_Deep Learning in NLP.rar", "_blank");
        } else if (link_number == 7) {
          window.open("https://drive.google.com/open?id=0B0sr7hUZERtfbjRzU2NyVV90X0U", "_blank");
        } else if (link_number == 8) {
          window.open("https://drive.google.com/open?id=0B0sr7hUZERtfaGRsXzU5UThPc0U", "_blank");
        } else if (link_number == 9) {
          window.open("https://drive.google.com/open?id=1EdHBcWmpDyxvDm25jiXnTLAG_EiD8ps3", "_blank");
        } else if (link_number == 10) {
          window.open("https://drive.google.com/open?id=1B1BHQCs594ZPPZwlP3SNPboOU6F4OkTN", "_blank");
        } else if (link_number == 11) {
          window.open("https://db.suvenconsultants.com/machineLearningCompletePdf.pdf", "_blank");
        } else if (link_number == 12) {
          window.open("https://drive.google.com/open?id=1gi_95WvtTklyDHvLfy-fiWeicYIJXB2a", "_blank");
        }
      } else {
        alert("Password you enter was incorrect");
      }





    }



    function hadoop_pdf(link_number) {
      var pwd = prompt("Please enter a Password", "");

      if (pwd == "niraj0605Da") {
        if (link_number == 1) {
          window.open("https://drive.google.com/file/d/1N3JuJ-wCTu8qyrXiQbwg-em4CynFVP59/view", "_blank");
        } else if (link_number == 2) {
          window.open("https://drive.google.com/open?id=1r4Z0vu64BMBOqfjjYW_VSyUp7pREztIY", "_blank");
        } else if (link_number == 3) {
          window.open("https://drive.google.com/open?id=1pN_cypBV9qooB0dAgqyyi1wlQQjM6CuU", "_blank");
        } else if (link_number == 4) {
          window.open("downloads/HDFS_MapReduce Notes.rar", "_blank");
        } else if (link_number == 5) {
          window.open(" https://drive.google.com/open?id=0B4rCFkKCsCeKeEVhcjFrVnYybE0", "_blank");
        } else if (link_number == 6) {
          window.open("https://drive.google.com/open?id=0B4rCFkKCsCeKc01ENGNldm5heHM", "_blank");
        } else if (link_number == 7) {
          window.open("https://drive.google.com/open?id=0B0sr7hUZERtfbjRzU2NyVV90X0U", "_blank");
        } else if (link_number == 8) {
          window.open("https://drive.google.com/open?id=0B0sr7hUZERtfaGRsXzU5UThPc0U", "_blank");
        } else if (link_number == 9) {
          window.open("https://drive.google.com/open?id=1EdHBcWmpDyxvDm25jiXnTLAG_EiD8ps3", "_blank");
        } else if (link_number == 10) {
          window.open("https://drive.google.com/open?id=1B1BHQCs594ZPPZwlP3SNPboOU6F4OkTN", "_blank");
        } else if (link_number == 11) {
          window.open("https://db.suvenconsultants.com/machineLearningCompletePdf.pdf", "_blank");
        } else if (link_number == 12) {
          window.open("https://drive.google.com/open?id=1gi_95WvtTklyDHvLfy-fiWeicYIJXB2a", "_blank");
        }
      } else {
        alert("Password you enter was incorrect");
      }
    }

    $('.navbar-collapse a').click(function() {
      $(".navbar-collapse").collapse('hide');
    });

  </script>

  <script src="js/main1.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.0/jquery.cookie.min.js"></script>

</html>
