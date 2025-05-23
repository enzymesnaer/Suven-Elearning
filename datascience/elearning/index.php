<?php include 'header.php';?>
<?php require 'dbconnect.php';?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap core CSS -->
    <link href="./assets/cssm/bootstrap.min.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Righteous%7CMerriweather:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./assets/cssm/mediumish.css" rel="stylesheet">
    <style>
      .share {
        text-align: center;
        margin-top: 10px !important;
        margin-left: 40px;
        border: none;
        width: 200px;
        border-radius: 10px;
      }
      
      .share2 {
        text-align: center;
        margin-top: 10px !important;
        margin-left: 40px;
        border: none;
        width: 200px;
        border-radius: 10px;
      }

      .list-group-item:last-child {
        padding: 0 !important;
        border: 0px solid gainsboro !important;
      }

      .float {
        position: fixed;
        width: 40px;
        height: 40px;
        bottom: 111px !important;
        left: 17px;
        background-color: #25d366;
        color: #FFF;
        border-radius: 50px;
        text-align: center;
        font-size: 30px;
        box-shadow: 2px 2px 3px #999;
        z-index: 100;
      }

      .style_prevu_kit {
        display: inline-block;
        /*border:0;*/
        /*width:196px;*/
        /*height:210px;*/
        position: relative;
        -webkit-transition: all 200ms ease-in;
        -webkit-transform: scale(1);
        -ms-transition: all 200ms ease-in;
        -ms-transform: scale(1);
        -moz-transition: all 200ms ease-in;
        -moz-transform: scale(1);
        transition: all 200ms ease-in;
        transform: scale(1);
      }

      .style_prevu_kit:hover {
        box-shadow: 0px 0px 10px #000000;
        z-index: 500;
        -webkit-transition: all 50ms ease-in;
        -webkit-transform: scale(0.1);
        -ms-transition: all 50ms ease-in;
        -ms-transform: scale(0.1);
        -moz-transition: all 50ms ease-in;
        -moz-transform: scale(0.1);
        transition: all 50ms ease-in;
        transform: scale(1.0009);
      }

      .style_prevu_kit2 {
        display: inline-block;
        border: 0;
        width: 255px;
        height: 300px;
        margin: 6px;
        position: relative;
        -webkit-transition: all 200ms ease-in;
        -webkit-transform: scale(1);
        -ms-transition: all 200ms ease-in;
        -ms-transform: scale(1);
        -moz-transition: all 200ms ease-in;
        -moz-transform: scale(1);
        transition: all 200ms ease-in;
        transform: scale(1);
      }

      .style_prevu_kit2:hover {
        box-shadow: 0px 0px 10px #000000;
        z-index: 500;
        -webkit-transition: all 50ms ease-in;
        -webkit-transform: scale(0.1);
        -ms-transition: all 50ms ease-in;
        -ms-transform: scale(0.1);
        -moz-transition: all 50ms ease-in;
        -moz-transform: scale(0.1);
        transition: all 50ms ease-in;
        transform: scale(1.0009);
      }

      .enrollbtn {
        position: relative !important;
        background-color: #34495e !important;
        color: #ffbb00 !important;
      }

      .enrollbtn:hover {
        background-color: #337ab7 !important;
        color: #ffbb00;
        border-radius: 0.25em;
        color: #ffbb00;
        border-radius: 0.25em;
      }

    </style>
    <script defer>
      $(function() {
        var topOfOthDiv = $(".hideshare").offset().top;
        $(window).scroll(function() {
          if ($(window).scrollTop() > topOfOthDiv) { //scrolled past the other div?
            $(".share").hide(); //reached the desired point -- show div
          } else {
            $(".share").show();
          }
        });
      });

    </script>
    <script defer>
      $(function() {
        var topOfOthDiv = $(".hideshare2").offset().top;
        $(window).scroll(function() {
          if ($(window).scrollTop() > topOfOthDiv) { //scrolled past the other div?
            $(".share2").hide(); //reached the desired point -- show div
          } else {
            $(".share2").show();
          }
        });
      });

    </script>
    <style>
      @media screen and (min-width: 768px){ .container .jumbotron,
      .container-fluid .jumbotron {
        padding-right: 50px;
        padding-left: 50px;
      }

      .image-props img {
        filter: contrast(1.8) brightness(1.5) grayscale(1);
      }

      .image-props figure:before {
        z-index: 3;
        mix-blend-mode: overlay;
        box-shadow: 0 0 200px black inset;
      }

      .image-propsnlp img {
        filter: contrast(1.8) brightness(1.5) grayscale(0.4);
      }

      .image-propsnlp figure:before {
        z-index: 3;
        mix-blend-mode: overlay;
        box-shadow: 0 0 200px black inset;
      }

      .move-left {
        position: absolute;
        left: -220%;
      }

      button {
        padding-top: 2px !important;
        padding-bottom: 2px !important;
      }

      .btn,
      .label,
      .label-primary,
      .enrollbtn {
        padding-top: -2px !important;
        padding-bottom: -2px !important;
      }

      .exploregreen {
        position: relative !important;
        background-color: #00ab6b !important;
      }

      .exploregreen:hover {
        position: relative !important;
        background-color: #00AB03 !important;
        color: white;
        border-radius: 0.25em;
        color: white;
        border-radius: 0.25em;
      }

      .gridcard {
        max-width: 232px !important;
      }

      }
      

    </style>
    <style>
        /*Media queries*/
        @media screen and (max-width: 600px) {
              .share {
                text-align: center;
                margin-top: 14px !important;
                border: none;
                border-radius: 10px;
                width: 100%;
            }
            .float{
            top:85% !important;
            left: 85%;
            position: fixed !important;
            z-index: 550;
            }
            
            .meright {
             
                /* right: 1%; */
                top: 15%;
                /* padding-left: 35px; */
                /*padding: 42px;*/
                text-align: center;
                /*margin: 0 auto;*/
                left:-25px;
                
            }
            
            .fiximg{
                position: relative;
                right:26px !important;
            }
            
            
            .col-md-offset-2{
             margin-top: 1200px;  
             width: 90%;
            }
            .fa, .fa-arrow-right, .fa-2x, .arrow1{
                top:678px !important;
                left:18px;
            }
            
            .herebtn{
                margin-left:42px !important;
            }
            
            .firstheading, .secondheading{
                margin-top: 10%;
                margin-left: 5% !important;
                font-size: 25px;
                font-weight: bolder;
            }
            
            #microcourses{
                margin: 0 auto !important;
                
            }
            
            .eachlistsub{
                min-width:400px !important;
            }
            
            .smcontent{
                padding-left:15% !important;
            }
            .smcontent img{
                position: relative !important;
                left: 54px !important;
            }
            
            .list-group-item {
            position: relative;
            display: block;
            padding: 10px 15px;
            margin-bottom: 30px;
            background-color: #fff;
            border: 1px solid #ddd;
        }
        
        .subjects1 .label, .label-primary {
            background: #55aef7 !important;
            color: white;
            border-radius: 0.25em;
            margin-left: 6px;
            padding: 14px 15px 5px 15px !important;
            color: white;
            border-radius: 0.25em;
            height: 40px;
            font-size: 13px;
        }
        
        .enrollbtn, .exploregreen{
          left: 00px !important;
          bottom: 00px !important;
          float: right;
      }
      
      .exploregreen {
        position: relative !important;
        background-color: #00ab6b !important;
      }

      .exploregreen:hover {
        position: relative !important;
        background-color: #00AB03 !important;
        color: white;
        border-radius: 0.25em;
        color: white;
        border-radius: 0.25em;
      }
      
      .enrollbtn {
        background-color: #34495e !important;
        color: #ffbb00 !important;
      }

      .enrollbtn:hover {
        background-color: #337ab7 !important;
        color: #ffbb00;
        border-radius: 0.25em;
        color: #ffbb00;
        border-radius: 0.25em;
      }
      
      .disclaimer{
            margin-left: -20% !important;
            font-size: 13px;
            margin-top: -36px;
            margin-right: 10px !important;
            color: gray;
          }
        .successstories{
            margin-left: 15%;
            margin-right: -5%;
        }
        .successstories img{
            align-content: center;
        }
        
        .successstories span, p{
            font-size: 13px;
        }
        
        .successstories img{
            margin-left:6% !important;
        }
        
        .headng{
            font-size:36px !important;
            font-weight:bolder !important;
        }
        
        .fluidmargin{
                padding-right: 0px;
                padding-left: 0px;
                margin-right: 0;
                margin-left: 0;
                margin-bottom: 60px !important;
        }
        
        .gridcard {
            max-width: 500px !important;
            max-height: 500px !important;
            margin-left: 9px;
        }
        
        .style_prevu_kit2 {
            display: inline-block;
            border: 0;
            width: 300px;
            height: 350px;
            margin: 6px;
            position: relative;
            -webkit-transition: all 200ms ease-in;
            -webkit-transform: scale(1);
            -ms-transition: all 200ms ease-in;
            -ms-transform: scale(1);
            -moz-transition: all 200ms ease-in;
            -moz-transform: scale(1);
            transition: all 200ms ease-in;
            transform: scale(1);
        }
        
        .style_prevu_kit2 img{
                width: 65%;
                margin: auto;
                padding-bottom: 0;
        }
        
        .gridrow{
            margin-left: 0px !important;
        }
        .jumbotron p {
            margin-bottom: -20px !important;
            font-size: 19px !important;
            font-weight: 200 !important;
            padding: 20px !important;
            margin-top: -41px !important;
        }
        
        .style_prevu_kit2 img {
            width: 65%;
            margin: auto;
            margin-top: -17px !important;
        }
        
        .x{
            margin-top: -40px !important;
        }
        
        .btnj{
            margin-top: -70px !important;
        }
        
        }
      
        
        
        
        /*Media queries*/
        @media screen and (max-width: 360px) {
              .share {
                text-align: center;
                margin-top: 14px !important;
                border: none;
                border-radius: 10px;
                width: 100%;
            }
            .float{
            top:85% !important;
            left: 85%;
            position: fixed !important;
            z-index: 550;
            }
            
            .meright {
             
                /* right: 1%; */
                top: 15%;
                /* padding-left: 35px; */
                /*padding: 42px;*/
                text-align: center;
                /*margin: 0 auto;*/
                left:-25px;
                
            }
            
            .fiximg{
                position: relative;
                right:26px !important;
            }
            
            
            .col-md-offset-2{
             margin-top: 1200px;  
             width: 90%;
            }
            .fa, .fa-arrow-right, .fa-2x, .arrow1{
                top: 736px !important;
                left:18px;
            }
            
            .herebtn{
                margin-left: 0px !important;
            }
            
            .firstheading, .secondheading{
                margin-top: 10%;
                margin-left: 5% !important;
                font-size: 25px;
                font-weight: bolder;
            }
            
            #microcourses{
                margin: 0 auto !important;
                
            }
            
            .eachlistsub{
                min-width:400px !important;
            }
            
            .smcontent {
                padding-left: 7% !important;
                margin-right: 46px;
            }
            .smcontent img{
                position: relative !important;
                left: 54px !important;
            }
            
            .list-group-item {
            position: relative;
            display: block;
            padding: 10px 15px;
            margin-bottom: 30px;
            background-color: #fff;
            border: 1px solid #ddd;
        }
        
        .subjects1 .label, .label-primary {
            background: #55aef7 !important;
            color: white;
            border-radius: 0.25em;
            margin-left: 6px;
            padding: 14px 15px 5px 15px !important;
            color: white;
            border-radius: 0.25em;
            height: 40px;
            font-size: 13px;
        }
        
        .enrollbtn, .exploregreen{
          left: 00px !important;
          bottom: 00px !important;
          float: right;
      }
      
      .exploregreen {
        position: relative !important;
        background-color: #00ab6b !important;
      }

      .exploregreen:hover {
        position: relative !important;
        background-color: #00AB03 !important;
        color: white;
        border-radius: 0.25em;
        color: white;
        border-radius: 0.25em;
      }
      
      .enrollbtn {
        background-color: #34495e !important;
        color: #ffbb00 !important;
      }

      .enrollbtn:hover {
        background-color: #337ab7 !important;
        color: #ffbb00;
        border-radius: 0.25em;
        color: #ffbb00;
        border-radius: 0.25em;
      }
      
      .disclaimer{
            margin-left: -20% !important;
            font-size: 13px;
            margin-top: -36px;
            margin-right: 10px !important;
            color: gray;
          }
        .successstories{
            margin-left: 15%;
            margin-right: -5%;
        }
        .successstories img{
            align-content: center;
        }
        
        .successstories span, p{
            font-size: 13px;
        }
        
        .successstories img{
            margin-left:6% !important;
        }
        
        .headng{
            font-size:36px !important;
            font-weight:bolder !important;
        }
        
        .fluidmargin{
                padding-right: 0px;
                padding-left: 0px;
                margin-right: 0;
                margin-left: 0;
                margin-bottom: 60px !important;
        }
        
        .gridcard {
            max-width: 500px !important;
            max-height: 500px !important;
            margin-left: 9px;
        }
        
        .style_prevu_kit2 {
            display: inline-block;
            border: 0;
            width: 300px;
            height: 350px;
            margin: 6px;
            position: relative;
            -webkit-transition: all 200ms ease-in;
            -webkit-transform: scale(1);
            -ms-transition: all 200ms ease-in;
            -ms-transform: scale(1);
            -moz-transition: all 200ms ease-in;
            -moz-transform: scale(1);
            transition: all 200ms ease-in;
            transform: scale(1);
        }
        
        
        
        .style_prevu_kit2 img{
                width: 65%;
                margin: auto;
                padding-bottom: 0;
        }
        .style_prevu_kit2 p{
                font-weight:bolder !important;
        }
        
        .gridrow {
    margin-left: -17px !important;
}
.gridrow p {
    margin-left: -17px !important;
    font-weight:bolder;
}

        .jumbotron p {
            margin-bottom: -20px !important;
            font-size: 19px !important;
            font-weight: bolder !important;
            padding: 20px !important;
            margin-top: -41px !important;
        }
        
        .style_prevu_kit2 img {
            width: 65%;
            margin: auto;
            margin-top: -17px !important;
            padding-bottom: 0;
        }
        
        .x{
            margin-top: -40px !important;
        }
        
        .btnj{
            margin-top: -70px !important;
        }
        
        }
        
    </style>
  </head>

  <body>
    <!-- Begin Article
================================================== -->
    <div class="container ">
      <div class="row">
        <img class="img-responsive hidden-sm hidden-xs" style="margin:0px; max-width:120%;min-width:100%;" height="60px" src="https://yt3.ggpht.com/MVb4FIpLMFN3HJ7RpIzIZK3IN9wLPjdZDYc8f-Q1smrBxFHKZAvSUTXA28aT5Palwslgkc9bzA=w2560-fcrop64=1,00005a57ffffa5a8-k-c0xffffffff-no-nd-rj" />
        <img class="img-responsive hidden-lg hidden-md" style="margin-top:4%;" height="60px" src="https://yt3.ggpht.com/MVb4FIpLMFN3HJ7RpIzIZK3IN9wLPjdZDYc8f-Q1smrBxFHKZAvSUTXA28aT5Palwslgkc9bzA=w2560-fcrop64=1,00005a57ffffa5a8-k-c0xffffffff-no-nd-rj" />
        <!-- Begin Fixed Left Share -->
        <div class="col-md-2 col-xs-12 hidden-xs hidden-sm">
          <div class="share hidden-sm hidden-xs">
            <p>
              <b>
                <strong style="text-decoration:underline;margin-left:9px;font-size:26px;">Queries ?</strong>
              </b>
              <br>
              mail us
              <br><button type="button" class="btn" onclick="window.open('https://mail.google.com/mail/u/0/?view=cm&fs=1&to=rocky@suvenconsultants.com&su=Query%20about%20elearning%20course&tf=1')" href="" target="_blank">here</button></p>
            <p><span style="text-decoration:underline;">OR</span><br>For Technical guidance Chat with<br>Rocky Sir<br>
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
              <a style="bottom: 123px !important;" href="https://api.whatsapp.com/send?phone=919892544177&text=Hello%20Sir%21%20I%20need%20some%20technical%20guidance" class="float" target="_blank">
                <i class="fa fa-whatsapp my-float"></i>
              </a>
              &nbsp; 9892544177</p>
          </div>
        </div>
        <div class="col-md-2 col-xs-12 hidden-lg hidden-md">
          <div class="share2 hidden-md hidden-lg">
            <p>
              <b>
              </b>
              <br>
            <p>
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
              <a style="bottom: 123px !important;" href="https://api.whatsapp.com/send?phone=919892544177&text=Hello%20Rocky%20Sir%21%20I%20need%20some%20technical%20guidance" class="float" target="_blank">
                <i class="fa fa-whatsapp my-float"></i>
              </a>
              </p>
          </div>
        </div>
        <!-- End Fixed Left Share -->
        <!-- Begin Fixed RIght Share -->
        <div class="col-md-3 col-xs-12 meright" style="float:right;position:absolute;">
          <h3 class="text-success text-center shiftme"><span style="font-weight:bolder;">Data Science</span><br> team at <span style="font-weight:bolder;">Suven</span></h3>
          <div class="">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                  <span class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <img src="https://datascience.suvenconsultants.com/images/testimonials/1per.jpg" class="img-circle fiximg" alt="" width=80 height=80 style="margin-rignt:-5px;">
                  </span>
                  <div class="row">
                    <span class="text-justify text-primary col-lg-12 col-md-12 col-sm-12 col-xs-12" style="font-size:11px; margin-left:24px;">
                      <b class="text-info applypads" style="font-weight: bolder;font-size:1.2rem;">Rocky Jagtiani</b> Technology trainer to companies like Accenture , Morgan Stanley, EY. Have trained more than 18000 candidates in 0-3 years work-ex category. Having 18+ of years of training experience. Would be teaching most of the subjects under data science domain. Specializes in Python , ML and NLP.<br><br><br><br>
                    </span></div>
                </div>
              </div><br><br><br><br>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                  <span class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <img src="https://datascience.suvenconsultants.com/images/testimonials/2per.jpg" class="img-circle fiximg" alt="" width=80 height=80 style="margin-rignt:-5px;">
                  </span>
                  <div class="row">
                    <span class="text-justify text-primary col-lg-12 col-md-12 col-sm-12 col-xs-12" style="font-size:11px; margin-left:24px;">
                      <b class="text-info applypads" style="font-weight: bolder;font-size:1.2rem;">Niraj Sharma</b> Presently Data Analyst at NeoSoft (CMM level 5). An expert in R programming. An active contributor at Kaggle Data Analytics using R competitions. Having 3+ years of training experience. Would be teaching Statistics and Data Analytics using R in this course.<br><br><br><br>
                    </span></div>
                </div>
              </div><br><br><br><br><br><br>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                  <span class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <img src="https://datascience.suvenconsultants.com/elearning/assets/imgm/pankajsharma.JPG" class="img-circle fiximg" alt="" width=80 height=80 style="margin-rignt:-5px;">
                  </span>
                  <div class="row">
                    <span class="text-justify text-primary col-lg-12 col-md-12 col-sm-12 col-xs-12" style="font-size:11px; margin-left:24px;">
                      <b class="text-info applypads" style="font-weight: bolder;font-size:1.2rem;">Pankaj Sharma</b> Pankaj Sharma is presently Senior Software Engineer at Mphasis. Had worked for 6.5 years as a consultant at Capgemini India & UK both. An active contributor at Kaggle ML-NLP-OpenCV competitions. Having ranked with in 500 in most competitions.<br><br><br><br>
                    </span></div>
                </div>
              </div><br><br><br><br><br><br>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                  <span class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <img src="./assets/imgm/kranjekar.jpg" class="img-circle fiximg" alt="" width=80 height=80 style="margin-rignt:-5px;">
                  </span>
                  <div class="row">
                    <span class="text-justify text-primary col-lg-12 col-md-12 col-sm-12 col-xs-12" style="font-size:11px; margin-left:24px;">
                      <b class="text-info applypads" style="font-weight: bolder;font-size:1.2rem;">Hoshang Karanjekar</b> is MTech in Computer Science specializing in AI domain. He works for Viacom18 Media Pvt Ltd. Has a total experience of 4+ years. A problem solver on kaggle. Specializes in FLASK, AWS and deploying ML models on the cloud.<br><br><br><br>
                    </span></div>
                </div>
              </div><br><br><br><br><br><br>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                  <span class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <img src="https://datascience.suvenconsultants.com/images/testimonials/4per.jpg" class="img-circle fiximg" alt="" width=80 height=80 style="margin-rignt:-5px;">
                  </span>
                  <div class="row">
                    <span class="text-justify text-primary col-lg-12 col-md-12 col-sm-12 col-xs-12" style="font-size:11px; margin-left:24px;">
                      <b class="text-info applypads" style="font-weight: bolder;font-size:1.2rem;">Simran Jagtiani</b> Presently Head of HR & Operations , awarded as Women Entrepreneur of the year in 2011. Having mentored more than 5000 participants in the 0-3 years WorkEx category and having successfully placed all of them as IT professional.<br><br>
                    </span></div>
                </div>
              </div><br><br><br><br><br><br>
            </div>
          </div>
        </div>
        <!-- End Fixed Right Share -->
        <!-- Begin Post -->
        <div class="col-md-8 col-md-offset-2 col-xs-12" style="padding-right:4%;">
          <br><br>
          <div class="mainheading">
            <h3 class="posttitle"><span style="color:rgb(56, 118, 29);font-weight:bolder;">2 mins please....</span><span style="font-weight:bolder;"> Let us get Introduced..</span></h3>
          </div>
          <!-- Begin Post Content -->
          <div class="article-post">
            <p style="font-size:15px;">Well, let us introduce ourselves. We @Suven are a dedicated team of trainers, with Mr. Rocky Jagtiani heading the team. Here is his <a style="text-decoration:underline;" href="https://www.linkedin.com/in/rocky-jagtiani-3b390649/" target="_blank">linked-in profile</a> for details. We are very popular in Mumbai for our "Master's in Data Science" programme with <b style="background-color:yellow;">&nbsp;100% placement calls and 200% ROI&nbsp;</b>. Please <u>Google</u> on "suven consultants reviews" or read some LI post <a style="text-decoration:underline;" href="https://www.linkedin.com/posts/suven-consultants-and-technology-pvt-ltd_fluidai-suvenml-webdevelopment-activity-6639799014827102209--0m9" target="_blank">here</a>, <a style="text-decoration:underline;" href="https://www.linkedin.com/posts/suven-consultants-and-technology-pvt-ltd_fluidai-suvenml-webdevelopment-activity-6639799014827102209--0m9" target="_blank">here</a> or <a style="text-decoration:underline;" href="https://www.linkedin.com/posts/rocky-jagtiani-3b390649_nmimsuniversity-students-faculties-activity-6622504323341443073-W3-P" target="_blank">here</a>.</p>
            <p style="font-size:15px;">Many students and working professionals cannot make it to our class room training programmes (<em style="color:silver;">which don't cost lacs like that of UpGrad or GreatLearning or ... </em>) due to distance and time constraints.</p>
            <p style="font-size:15px;">Our team practically gets one request per day from students, College TPO's and IT support staff for <u>our data science courses</u> over Linked-in. <b style="background-color:yellow;">&nbsp;So here we are&nbsp;</b> with our <b style="background-color:yellow;">&nbsp;e-learning course modules&nbsp;</b>.</p>
            <p style="font-size:15px;">It's your turn......<b style="background-color:yellow;">&nbsp;Please introduce yourself&nbsp;
              </b> &nbsp;&nbsp;&nbsp;<i style="color:silver;position:absolute;top:358px;" class="fa fa-arrow-right fa-2x arrow1" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button onclick="window.open('https://docs.google.com/forms/u/1/d/e/1FAIpQLScPpX9SPBQkjj5xklDta_EOO0mADa-st3Zw8941ThkS5woKCQ/viewform')" class="btn herebtn" style="background-color:white;border:2px solid green;"><u><b>here</b></u></button></p>
            <br><br>
          </div>
          <div class="mainheading">
            <h3 class="posttitle"><span style="color:rgb(56, 118, 29);font-weight:bolder;">2 mins please....</span><span style="font-weight:bolder;"> Now about the Courses :</span></h3>
          </div>
          <div class="article-post">
            <p style="font-size:15px;">Well, the SuvenML team over the last 3 years of classroom training in Data Science experienced that their target audiences are of two categories :</p>
          </div>
          <div class="mainheading">
            <h4 class="posttitle"><span style="color:rgb(56, 118, 29);font-weight:bolder;"></span><span style="font-weight:bolder;">Category A.</span></h4>
          </div>
          <div class="article-post">
            <p style="font-size:15px;">Students and Fresh Graduates wanting placements - post training</p>
          </div>
          <div class="mainheading">
            <h4 class="posttitle"><span style="color:rgb(56, 118, 29);font-weight:bolder;"></span><span style="font-weight:bolder;">Category B.</span></h4>
          </div>
          <div class="article-post">
            <p style="font-size:15px;">Working Professionals (below 4 years workEx) and Students planning for MS(in US or UK) in some data science domain.</p>
          </div>
          <div class="article-post">
            <p style="font-size:15px;"><b style="font-weight:bolder;background-color:yellow;">For Category A learners we have a package of 7 subjects</b> namely Python Core programming fundamentals, SQL - Beginner to Intermediate, Python for Data Science, Machine Learning - Beginner, Machine Learning - Intermediate, Web skills for Coding Intelligent* Web application and Job-Prep Course.</p>
            <p style="font-size:15px;">This whole package of 7 subjects has to be taken together as it leads to <b style="font-weight:bolder;background-color:yellow;">100% placements</b>. Each subject has a <b style="font-weight:bolder;background-color:yellow;">e-Certification issued after the required assessment is done</b>.</p>
            <p style="font-size:15px;"><b style="font-weight:bolder;background-color:yellow;">For Category B learners we have many subjects to choose from.</b> One can choose one or more subjects according to skill he/she wishes to add to their profile. <b style="font-weight:bolder;background-color:yellow;">Each subject has a e-Certification issued after the required assessment</b> is done.</p>
            <br><br>
          </div>
          <div class="mainheading">
            <h3 class="posttitle"><span style="color:rgb(56, 118, 29);font-weight:bolder;">Last 1 min....</span><span style="font-weight:bolder;"> Why learn from us ?</span></h3>
          </div>
          <div class="article-post">
            <p style="font-size:15px;">We promise we are better than most other online course providers out their on www. OOPs.. you think we are boosting.. not at all.</p>
          </div>
          <div class="hideshare"></div>
          <div class="mainheading">
            <h4 class="posttitle"><span style="color:rgb(56, 118, 29);font-weight:bolder;"></span><span style="font-weight:bolder;">Quick Pointers :</span></h4>
          </div>
          <div class="article-post">
            <p style="font-size:13px;"><b>></b> <span style="color:rgb(56, 118, 29);font-weight:bold;">trained</span> more than 15000 learners<br>
              <b>></b> <span style="color:rgb(56, 118, 29);font-weight:bold;">placed 78%</span> immediately with in a month of completing the Placement track.<br>
              <b>></b> So many people speaking <span style="color:rgb(56, 118, 29);font-weight:bolder;">(good)</span> about us on social media.<br>
              <b>></b> See <a style="text-decoration:underline;" href="https://www.linkedin.com/posts/rocky-jagtiani-3b390649_happy-blessed-databasejobs-activity-6617275475507150849-Wi6Z" target="_blank">here</a> or <a style="text-decoration:underline;" href="https://www.linkedin.com/posts/rocky-jagtiani-3b390649_spit-nlp-fdp-activity-6611635324244332544-jLbB" target="_blank">here</a> or <b>simply Google "rocky sir suven".</b><br>
              <b>></b> <span style="color:rgb(56, 118, 29);font-weight:bolder;">Each online course has a 20% open content for you</span> to analyze our quality.<br>
              <!--<b>></b> Yes, we don't have any Refund policy. Because we are doing our work with 100% sincerity and commitment. <span style="color:rgb(56, 118, 29);font-weight:bolder;">You don't understand concept or code talk/chat with the trainer</span>. Mr Rocky Jagtiani & entire SuvenML team  strongly believes in quality and will provide best to their learners.<br>-->
              <b>></b> Each course has<br>
              <b>max <span style="color:rgb(56, 118, 29);font-weight:bold;">25% Video</span></b> to explain the concepts<br>
              <b>max <span style="color:rgb(56, 118, 29);font-weight:bold;">25% reading</span></b> on theory concepts<br>
              <span style="font-weight:bolder;background-color:yellow;">50-60% code execution in</span> Colab Notebooks or some other IDE
            </p>
            <div class="mainheading">
              <h4 class="posttitle"><span style="color:rgb(56, 118, 29);font-weight:bolder;">After-all you learn coding,</span><span style="font-weight:bolder;"> by coding !!</span></h4>
            </div>
            <br><br>
          </div>
          <div class="article-post">
            <br>
            <div class="container" style="margin-left:-5%;">
              <div class="row">
                <div class="col-lg-1 col-md-1">
                  <!--*******************************************************************************************************************************************************************-->
                  <div style="position:absolute;" class="move-left">
                    <!--Testimonials start-->
                    <div class="container text-center text-justify" style="">
                      <br><br><br><br><br><br><br><br><br><br><br><br>
                      <h3 class="text-success"><span style="font-weight:bolder; padding-left:24px;">Testimonials</span><br><span style="font-weight:bolder;"></span></h3><br>
                      <div class="">
                        <div class="row">
                          <div class="row" style="padding-left:4%;">
                            <div class="row">
                              <span class="col-md-3" style="">
                                <img src="./assets/imgm/testimonials/samiksha.jpg" class="img-circle fiximg" alt="" width=80 height=80>
                              </span><br><br><br><br>
                              <div class="row">
                                <span class="text-center text-primary col-lg-3 colmd-3 col-sm-3 col-xs-3" style="font-size:11px;padding:21px;margin-top:-2.3%;margin-left:1.1%;">
                                  <p><b class="text-info applypads" style="font-weight: bolder;font-size:1.3rem;">Pratiksha Patil</b></p>
                                  <p class="text-info" style="font-size:11px;margin-top:-10px;">Rocky Sir, and his team helped me in understanding all core ML concepts.</p>
                                  <p class="text-info" style="font-size:11px;margin-top:-10px;font-weight: bolder;font-size:1.3rem;">BTech(CS) | Jr. Data Analyst</p><br>
                                </span>
                              </div>
                            </div>
                          </div>
                          <div class="row" style="padding-left:4%;">
                            <div class="row">
                              <span class="col-md-3" style="">
                                <img src="./assets/imgm/testimonials/nidhi.jpg" class="img-circle fiximg" alt="" width=80 height=80>
                              </span><br><br><br><br>
                              <div class="row">
                                <span class="text-center text-primary col-lg-3 col-md-3 col-sm-3 col-xs-3" style="font-size:11px;padding:21px;margin-top:-2.3%;margin-left:1.1%;">
                                  <p><b class="text-info applypads" style="font-weight: bolder;font-size:1.3rem;">Nidhi Shah</b></p>
                                  <p class="text-info" style="font-size:11px;margin-top:-10px;">The Jupyter Notebooks made by SuvenML team is awesome. I enjoyed learning at SuvenML.</p>
                                  <p class="text-info" style="font-size:11px;margin-top:-10px;font-weight: bolder;font-size:1.3rem;">BSci(CS) | Jr. Data Scientist </p><br>
                                </span></div>
                            </div>
                          </div>
                          <div class="row" style="padding-left:4%;">
                            <div class="row">
                              <span class="col-md-3" style="">
                                <img src="./assets/imgm/testimonials/shrivats.jpg" class="img-circle fiximg" alt="" width=80 height=80 style="margin-rignt:-5px;">
                              </span><br><br><br><br>
                              <div class="row">
                                <span class="text-center text-primary col-lg-3 colmd-3 col-sm-3 col-xs-3" style="font-size:11px;padding:21px;margin-top:-2.3%;margin-left:1.1%;">
                                  <p><b class="text-info applypads" style="font-weight: bolder;font-size:1.3rem;">Sameeksha Shrivastava</b></p>
                                  <p class="text-info" style="font-size:11px;margin-top:-10px;">Each course at Suven is awesome. I have done almost all.</p>
                                  <p class="text-info" style="font-size:11px;margin-top:-10px;font-weight: bolder;font-size:1.3rem;">System Engineer | 5+ Years Work Exp.</p><br>
                                </span></div>
                            </div>
                          </div>
                          <div class="row" style="padding-left:4%;">
                            <div class="row">
                              <span class="col-md-3" style="">
                                <img src="./assets/imgm/testimonials/akash.jpg" class="img-circle fiximg" alt="" width=80 height=80 style="margin-rignt:-5px;">
                              </span><br><br><br><br>
                              <div class="row">
                                <span class="text-center text-primary col-lg-3 colmd-3 col-sm-3 col-xs-3" style="font-size:11px;padding:21px;margin-top:-2.3%;margin-left:1.1%;">
                                  <p><b class="text-info applypads" style="font-weight: bolder;font-size:1.3rem;">Aahan Gupta</b></p>
                                  <p class="text-info" style="font-size:11px;margin-top:-10px;">Learning from their courses enabled me fully to take part and excel in kaggle competitions. Great content , great teaching.</p>
                                  <p class="text-info" style="font-size:11px;margin-top:-10px;font-weight: bolder;font-size:1.3rem;">BE(CS) | Data Scientist</p><br>
                                </span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--End Testimonials-->
                  <!--********************************************************************************************************************************************************************-->
                </div>
                <span id="onlinecourses"></span>
                <!--SECTION1 MICROCOURSES FOR LG MD-->
                
                <h3 class="text-center firstheading" style="margin-top:10%;margin-left:-22%;font-size:25px; font-weight:bolder;"><strong><span style="color:#28a745;">Package of 7 courses</span><span style="">&nbsp;for Freshers & Non-CS candidates&nbsp;</span><span style="color:#28a745;">seeking Placements</span></strong></h3>
                <h4 class="posttitle text-center secondheading" style="font-size:16px;color:gray;margin-left:-23%;">Placement Oriented "Data Science Track" with Web Implementation skills</h4><br><br><br>
                <div id="" class="col-lg-9 col-md-9" style="margin-left:9%;">
                  <div class="card col-lg-10 col-md-10 col-xs-10 col-sm-10 eachlistsub" style="margin-left:0%;">
                    <ul class="list-group list-group-flush">
                      <a href="https://docs.google.com/forms/d/e/1FAIpQLScPpX9SPBQkjj5xklDta_EOO0mADa-st3Zw8941ThkS5woKCQ/viewform" target="_blank">
                        <li class="list-group-item style_prevu_kit smcontent">
                          <div class="row">
                            <div class="col-md-2"><img src="./images/jsocPython.png" width="135" height="130" class="rounded img-fluid float-left" alt="..."></div>
                            <div class="col-md-1"></div>
                            <div class="col-md-9"><span style="margin-left:-5%;margin-right:7%;" class="badge badge-primary badge-pill">A</span><span style="margin-left:4%;display:inline;"><b style="margin-left:-10%;margin-top:9px;font-size:16px;">Python Core programming fundamentals</b><br>
                                <p style="margin-left:-5%;font-size:11px;margin-top:2px;margin-right:5px;color:gray;">Datatypes & their build-in functions, Control Statements, Reading/Writing from files, Exception Handling, Regex & its daily application, Classes & Objects. Two Mini projects for practice</p>
                              </span></div>
                            <a href="https://docs.google.com/forms/u/1/d/e/1FAIpQLScPpX9SPBQkjj5xklDta_EOO0mADa-st3Zw8941ThkS5woKCQ/viewform" target="_blank" style="left:450px;bottom:1px;" type="button" id="btnadd2" class="label label-primary enrollbtn">
                              <span class="checkmark checkmark-animation"></span>&nbsp;&nbsp;Join Wait List
                            </a>
                          </div>
                        </li>
                      </a>
                      <a href="https://docs.google.com/forms/d/e/1FAIpQLScPpX9SPBQkjj5xklDta_EOO0mADa-st3Zw8941ThkS5woKCQ/viewform" target="_blank">
                        <li class="list-group-item style_prevu_kit smcontent">
                          <div class="row">
                            <div class="col-md-2"><img src="./images/sql.png" width="135" height="130" class="rounded img-fluid float-left" alt="..."></div>
                            <div class="col-md-1"></div>
                            <div class="col-md-9"><span style="margin-left:-5%;margin-right:7%;" class="badge badge-primary badge-pill">B</span><span style="margin-left:4%;display:inline;"><b style="margin-left:-10%;margin-top:9px;font-size:16px;">SQL - Beginner to Intermediate</b><br>
                                <p style="margin-left:-5%;font-size:11px;margin-top:2px;margin-right:5px;color:gray;">Learn the workflow for handling big datasets with BigQuery and SQL, Select, From & Where, Group By, Having & Count, Order By, As & With, Joining Data. Solving challenges on Hackerrank.com scoring at least 3 star ranking.</p>
                              </span></div>
                            <a href="https://docs.google.com/forms/u/1/d/e/1FAIpQLScPpX9SPBQkjj5xklDta_EOO0mADa-st3Zw8941ThkS5woKCQ/viewform" target="_blank" style="left:450px;bottom:1px;" type="button" id="btnadd2" class="label label-primary enrollbtn"><span class="checkmark checkmark-animation"></span>&nbsp;&nbsp;Join Wait List</a>
                          </div>
                        </li>
                      </a>
                      <a href="https://docs.google.com/forms/d/e/1FAIpQLScPpX9SPBQkjj5xklDta_EOO0mADa-st3Zw8941ThkS5woKCQ/viewform" target="_blank">
                        <li class="list-group-item style_prevu_kit smcontent">
                          <div class="row">
                            <div class="col-md-2"><img src="./images/jsocPythonDS.png" width="135" height="130" class="rounded img-fluid float-left" alt="..."></div>
                            <div class="col-md-1"></div>
                            <div class="col-md-9"><span style="margin-left:-5%;margin-right:7%;" class="badge badge-primary badge-pill">C</span><span style="margin-left:4%;display:inline;"><b style="margin-left:-10%;margin-top:9px;font-size:16px;">Python for Data Science</b><br>
                                <p style="margin-left:-5%;font-size:11px;margin-top:2px;margin-right:5px;color:gray;">NumPy Basics for Data Science, Pandas for Data Analysis, Matplotlib for Data Visualization, solving many case studies applying NumPy, Pandas and Matplotlib functions.</p>
                              </span></div>
                            <a href="https://docs.google.com/forms/u/1/d/e/1FAIpQLScPpX9SPBQkjj5xklDta_EOO0mADa-st3Zw8941ThkS5woKCQ/viewform" target="_blank" style="left:501px;bottom:-13px;" type="button" id="btnadd2" class="label label-primary  exploregreen">Explore</a>
                          </div>
                        </li>
                      </a>
                      <a href="https://docs.google.com/forms/d/e/1FAIpQLScPpX9SPBQkjj5xklDta_EOO0mADa-st3Zw8941ThkS5woKCQ/viewform" target="_blank">
                        <li class="list-group-item style_prevu_kit smcontent">
                          <div class="row">
                            <div class="col-md-2"><img src="./images/machinelearn.png" width="135" height="130" class="rounded img-fluid float-left" alt="..."></div>
                            <div class="col-md-1"></div>
                            <div class="col-md-9"><span style="margin-left:-5%;margin-right:7%;" class="badge badge-primary badge-pill">D</span><span style="margin-left:4%;display:inline;"><b style="margin-left:-10%;margin-top:9px;font-size:16px;">Machine Learning - Beginner</b><br>
                                <p style="margin-left:-5%;font-size:11px;margin-top:2px;margin-right:5px;color:gray;">Supervised & Unsupervised ML, ML pipeline, Basic Data Exploration, Encoding Categorical data, Feature Scaling, Naive Bayes Classification, Linear Regression, Decision Trees, Random Forest, Principal Component Analysis, k-Means Clustering and deploying ML models on FLASK</p>
                              </span></div>
                            <a href="redirectwithheader.php?&ln=4" target="_blank" style="left:501px;bottom:5px;" type="button" id="btnadd2" class="label label-primary  exploregreen">Explore</a>
                          </div>
                        </li>
                      </a>
                      <a href="https://docs.google.com/forms/d/e/1FAIpQLScPpX9SPBQkjj5xklDta_EOO0mADa-st3Zw8941ThkS5woKCQ/viewform" target="_blank">
                        <li class="list-group-item style_prevu_kit smcontent">
                          <div class="row">
                            <div class="col-md-2"><img src="./images/machinelearn.png" width="135" height="130" class="rounded img-fluid float-left" alt="..."></div>
                            <div class="col-md-1"></div>
                            <div class="col-md-9"><span style="margin-left:-5%;margin-right:7%;" class="badge badge-primary badge-pill">E</span><span style="margin-left:4%;display:inline;"><b style="margin-left:-10%;margin-top:9px;font-size:16px;">Machine Learning - Intermediate</b><br>
                                <p style="margin-left:-5%;font-size:11px;margin-top:2px;margin-right:5px;color:gray;">Problem of underfitting & overfitting data, Cross Validation, Impute Missing Values, Feature Engineering, Feature Extraction vs. Feature Selection, Pipelines, XGBoost, lots of solved case studies to reinforce concepts.</p>
                              </span></div>
                            <a href="./mli?ctype=2" target="_blank" style="left:501px;bottom:3px;" type="button" id="btnadd2" class="label label-primary  exploregreen">Explore</a>
                          </div>
                        </li>
                      </a>
                      <a href="https://docs.google.com/forms/d/e/1FAIpQLScPpX9SPBQkjj5xklDta_EOO0mADa-st3Zw8941ThkS5woKCQ/viewform" target="_blank">
                        <li class="list-group-item style_prevu_kit smcontent">
                          <div class="row">
                            <div class="col-md-2"><img src="./images/www.png" width="135" height="130" class="rounded img-fluid float-left" alt="..."></div>
                            <div class="col-md-1"></div>
                            <div class="col-md-9"><span style="margin-left:-5%;margin-right:7%;" class="badge badge-primary badge-pill">F</span><span style="margin-left:4%;display:inline;"><b style="margin-left:-10%;margin-top:9px;font-size:16px;">Web skills for Coding Intelligent* Web application</b><br>(*Intelligent means integrating ML model into Web App)<br>
                                <p style="margin-left:-5%;font-size:11px;margin-top:2px;margin-right:5px;color:gray;">Recalling HTML5, Css3, Javascript. Learning AJAX-PHP-MySQL for developing a complete end to end Web based application. Deploying ML on FLASK, Integrating ML with PHP-MySQL Web App. <b>Internship projects</b> with detailed coding steps for practice. <b>Bonus topic</b> : Intro to Node.js and when to use it.</p>
                              </span></div>
                            <a href="https://docs.google.com/forms/u/1/d/e/1FAIpQLScPpX9SPBQkjj5xklDta_EOO0mADa-st3Zw8941ThkS5woKCQ/viewform" target="_blank" style="left:565px;bottom:5px;" type="button" id="btnadd2" class="label label-primary enrollbtn"><span class="checkmark checkmark-animation"></span>&nbsp;&nbsp;Join Wait List</a>
                          </div>
                        </li>
                      </a>
                      <a href="https://docs.google.com/forms/d/e/1FAIpQLScPpX9SPBQkjj5xklDta_EOO0mADa-st3Zw8941ThkS5woKCQ/viewform" target="_blank">
                        <li class="list-group-item style_prevu_kit smcontent">
                          <div class="row">
                            <div class="col-md-2"><img src="./images/interview-prep.png" width="135" height="130" class="rounded img-fluid float-left" alt="..."></div>
                            <div class="col-md-1"></div>
                            <div class="col-md-9"><span style="margin-left:-5%;margin-right:7%;" class="badge badge-primary badge-pill">G</span><span style="margin-left:4%;display:inline;"><b style="margin-left:-10%;margin-top:9px;font-size:16px;">Job-Prep Course</b><br>
                                <p style="margin-left:-5%;font-size:11px;margin-top:2px;margin-right:5px;color:gray;">Tips on Quantitative & Verbal Aptitude, making your "Best looking Resume" and boosting confidence for Interviews. 2 Mock Interview calls - one Technical & other HR.<br>On successfully <b>finishing all 7 subjects</b> from A to G our company would offer <b>100% placements</b> to the candidate.</p>
                              </span></div>
                            <a href="https://docs.google.com/forms/u/1/d/e/1FAIpQLScPpX9SPBQkjj5xklDta_EOO0mADa-st3Zw8941ThkS5woKCQ/viewform" target="_blank" style="left:450px;bottom:5px;" type="button" id="btnadd2" class="label label-primary enrollbtn"><span class="checkmark checkmark-animation"></span>&nbsp;&nbsp;Join Wait List</a>
                          </div>
                        </li>
                      </a>
                      <li type="none" class="text-center smcontent">
                        <div class="row" style="padding-top:2%; padding-left:7%"><br>
                          <div class="col-md-12"><span style="display:inline;">
                              <b style="text-decoration:underline;margin-left:-5%; color:black;" onMouseOver="this.style.color='black'" onMouseOut="this.style.color='black'"></b>
                              <p style="margin-left: 4%; font-size: 13px; margin-top: -36px; margin-right: 85px; color: gray;" class="disclaimer">Above courses from <span style="" class="badge badge-primary badge-pill">A</span> to <span style="" class="badge badge-primary badge-pill">G</span> form placement oriented "Data Science Track" with web implementation skills</p>
                              <!--<ul style="list-style-type:disc;margin-left:-10%;">-->
                              <!--  <li style="margin-top:-2%;">-->
                              <!--    <p style="font-size:11px;color:gray;">Data Visualization and Analysis</p>-->
                              <!--  </li>-->
                              <!--  <li style="margin-top:-2%;">-->
                              <!--    <p style="font-size:11px;color:gray;">Natural Language Processing - Beginner to Intermediate</p>-->
                              <!--  </li>-->
                              <!--  <li style="margin-top:-2%;">-->
                              <!--    <p style="font-size:11px;margin-right:5px;color:gray;">Deep Learning for NLP & Text based applications</p>-->
                              <!--  </li>-->
                              <!--</ul>-->
                            </span></div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!--New testimonials-->
              <div class="row" style="margin-left:-17%;">
                <div class="container" style="">
                  <div class="row-fluid" style=":line-height:18px;">
                    <div class="" style="padding:50px;">
                      <div class="container successstories">
                        <h1 class="text-center"><strong><span class="headng" style="color:#28a745;">Success</span><span style="color:#28a745;"></span> Stories</strong></h1><br>
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                          <!-- Wrapper for slides -->
                          <div class="carousel-inner">
                            <div class="item active">
                              <div class="row">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-5">
                                  <img src="./images/getpic0.jpg" alt="" style="max-height:260px; max-width:90%;" class="img-fluid img-thumbnail mx-auto">
                                </div>
                                <div class="col-lg-5">
                                  <h3>Gaurav Vishwakarma</h3>
                                  <p><span style="color:#28a745;">Web Developer @ Mukesoft</span><br>Thank you soo much (Simran) Mam. Its been a great experience and also created some good memories from Suven consultants which i would never forgot.
                                    feedback given on <a style="font-size:10px;" href="https://www.linkedin.com/feed/update/urn:li:activity:6634361999662911488/" target="_blank">https://www.linkedin.com/feed/update/urn:li:activity:6634361999662911488/</a>
                                  </p>
                                </div>
                                <div class="col-lg-1"></div>
                              </div>
                            </div>
                            <div class="item">
                              <div class="row">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-5">
                                  <img src="./images/getpic1.jpg" alt="" style="max-height:260px; max-width:90%;" class="img-fluid img-thumbnail mx-auto">
                                </div>
                                <div class="col-lg-5">
                                  <h3>Arvind Yadav</h3>
                                  <p><span style="color:#28a745;">Web Developer @Coense Solutions #ProjectHeena</span><br>Excellent course work , brilliant teaching by Rocky sir and his team. Complete hand holding by Simran Mam in scheduling interviews & placing me.
                                  </p>
                                </div>
                                <div class="col-lg-1"></div>
                              </div>
                            </div>
                            <div class="item">
                              <div class="row">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-5">
                                  <img src="./images/getpic2.jpg" alt="" width="80%" height="70%" class="img-fluid img-thumbnail mx-auto">
                                </div>
                                <div class="col-lg-5">
                                  <h3>Rahul Sar</h3>
                                  <p><span style="color:#28a745;">Software developer @ Accenture</span><br>I am blessed to be mentored for various subjects under Rocky Sir & his team. Their content and teaching is absolutely great in depth as well easy to understand.
                                  </p>
                                </div>
                                <div class="col-lg-1"></div>
                              </div>
                            </div>
                            <div class="item">
                              <div class="row">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-5">
                                  <img src="./images/getpic3.jpg" width="80%" height="70%" class="img-fluid img-thumbnail mx-auto">
                                </div>
                                <div class="col-lg-5">
                                  <h3>Zuhrah Sirguroh</h3>
                                  <p><span style="color:#28a745;">Professional web scraper at dMACQ Software</span><br>Jupyter Notebooks for the entire data science track is awesome. Short Video of 10-15 mins explaining the concept to the point. Theory taking me in depth. Lots of coding examples to implement what we see & read.
                                  </p>
                                </div>
                                <div class="col-lg-1"></div>
                              </div>
                            </div>
                            <div class="item">
                              <div class="row">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-5">
                                  <img src="./images/getpic4.jpg" alt="" width="80%" height="70%" class="img-fluid img-thumbnail mx-auto">
                                </div>
                                <div class="col-lg-5">
                                  <h3>Prathibha Gupta</h3>
                                  <p><span style="color:#28a745;">Software developer @ Majesco</span><br>Team @ Suven Consultants is very dedicated , well connected with each and every student. I found their "Master in Data Science Programme" very useful in my daily job and career upgrade.
                                  </p>
                                </div>
                                <div class="col-lg-1"></div>
                              </div>
                            </div>
                          </div>
                          <ol class="carousel-indicators" style="bottom: -30px;">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                            <li data-target="#myCarousel" data-slide-to="4"></li>
                          </ol>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <h3 class="text-center" style="margin-top:9%; font-size:30px; font-weight:bolder;"><strong><span style="color:#28a745;">&nbsp;&nbsp;Independent</span><span style="">&nbsp;Courses for&nbsp;</span><span style="color:#28a745;">IT Professionals & Students*</span></strong></h3>
    <h4 class="posttitle text-center" style="font-size:16px;color:gray;">&nbsp;&nbsp;(*Planning for MS in Data Science or Analytics)</h4><br><br><br>
    <div class="container-fluid fluidmargin" style="margin: 0 5% 0 9%; z-index:500;">
      <div class="row gridrow" style="margin:auto;">
        <div class="col-lg-3 col-md-3 card style_prevu_kit2 gridcard" style="margin:20px;border: 0.5px solid gainsboro;background-color:white;max-height: 260px;">
          <div class="">
            <a href="https://docs.google.com/forms/u/1/d/e/1FAIpQLScPpX9SPBQkjj5xklDta_EOO0mADa-st3Zw8941ThkS5woKCQ/viewform" target="_blank">
              <div class="jumbotron text-center" style="border-radius:0px;border-top: 0.5px solid gainsboro;;background-color:white;margin-top:0%;padding-top:8px;padding-bottom:0px; ">
                <img class="img-responsive" src="./images/datavis.png"><br>
                <p style="font-size:19px;margin: -25px -40px 0px -40px;">Data Visualization and Analysis</p>
                <h4><b></b></h4>
              </div>
            </a>
          </div>
          <a href="https://docs.google.com/forms/u/1/d/e/1FAIpQLScPpX9SPBQkjj5xklDta_EOO0mADa-st3Zw8941ThkS5woKCQ/viewform" target="_blank" style="left:90px;bottom:-55px;" type="button" id="btnadd2" class="label label-primary enrollbtn"><span class="checkmark checkmark-animation"></span>&nbsp;&nbsp;Join Wait List</a>
        </div>
        <div class="col-lg-3 col-md-3 card style_prevu_kit2 gridcard" style="margin:20px;border: 0.5px solid gainsboro;background-color:white;max-height: 260px;">
          <div class="">
            <a href="https://docs.google.com/forms/u/1/d/e/1FAIpQLScPpX9SPBQkjj5xklDta_EOO0mADa-st3Zw8941ThkS5woKCQ/viewform" target="_blank">
              <div class="jumbotron text-center" style="border-radius:0px;border-top: 0.5px solid gainsboro;;background-color:white;margin-top:0%;padding-top:8px;padding-bottom:0px; ">
                <img class="img-responsive" src="./images/pythonBA.png"><br>
                <p style="font-size:19px;margin: -25px -40px 0px -39px;">Python for Daily Business Task Automation</p>
                <h4><b></b></h4>
              </div>
            </a>
          </div>
          <a href="https://docs.google.com/forms/u/1/d/e/1FAIpQLScPpX9SPBQkjj5xklDta_EOO0mADa-st3Zw8941ThkS5woKCQ/viewform" target="_blank" style="left:90px;bottom:-39px;" type="button" id="btnadd2" class="label label-primary enrollbtn"><span class="checkmark checkmark-animation"></span>&nbsp;&nbsp;Join Wait List</a>
        </div>
        <div class="col-lg-3 col-md-3 card style_prevu_kit2 gridcard" style="margin:20px;border: 0.5px solid gainsboro;background-color:white;max-height: 260px;">
          <div class="">
            <a href="https://docs.google.com/forms/u/1/d/e/1FAIpQLScPpX9SPBQkjj5xklDta_EOO0mADa-st3Zw8941ThkS5woKCQ/viewform" target="_blank">
              <div class="jumbotron text-center" style="border-radius:0px;border-top: 0.5px solid gainsboro;;background-color:white;margin-top:0%;padding-top:8px;padding-bottom:0px; ">
                <img class="img-responsive" src="./images/financeauto.png"><br>
                <p style="font-size:19px;margin: -25px -40px 0px -40px;">Python & ML for Finance</p>
                <h4><b></b></h4>
              </div>
            </a>
          </div>
          <a href="https://docs.google.com/forms/u/1/d/e/1FAIpQLScPpX9SPBQkjj5xklDta_EOO0mADa-st3Zw8941ThkS5woKCQ/viewform" target="_blank" style="left:93px;bottom:-65px;" type="button" id="btnadd2" class="label label-primary enrollbtn"><span class="checkmark checkmark-animation"></span>&nbsp;&nbsp;Join Wait List</a>
        </div>
        <div class="col-lg-3 col-md-3  card style_prevu_kit2 gridcard" style="margin:20px;border: 0.5px solid gainsboro;background-color:white;max-height: 260px;">
          <div class="">
            <a href="https://docs.google.com/forms/u/1/d/e/1FAIpQLScPpX9SPBQkjj5xklDta_EOO0mADa-st3Zw8941ThkS5woKCQ/viewform" target="_blank">
              <div class="jumbotron text-center" style="border-radius:0px;border-top: 0.5px solid gainsboro;;background-color:white;margin-top:0%;padding-top:8px;padding-bottom:0px; ">
                <img class="img-responsive" src="./images/unittesting.png"><br>
                <p style="font-size:19px;margin: -25px -40px 0px -40px;">Python & ML for Unit Test Automation</p>
                <h4><b></b></h4>
              </div>
            </a>
          </div>
          <a href="https://docs.google.com/forms/u/1/d/e/1FAIpQLScPpX9SPBQkjj5xklDta_EOO0mADa-st3Zw8941ThkS5woKCQ/viewform" target="_blank" style="left:93px;bottom:-39px;" type="button" id="btnadd2" class="label label-primary enrollbtn"><span class="checkmark checkmark-animation"></span>&nbsp;&nbsp;Join Wait List</a>
        </div>
      </div>
      <div class="row gridrow" style="margin:auto;">
        <div class="col-lg-3 col-md-3  card style_prevu_kit2 gridcard" style="margin:20px;border: 0.5px solid gainsboro;background-color:white;max-height: 260px;">
          <div class="">
            <a href="https://docs.google.com/forms/u/1/d/e/1FAIpQLScPpX9SPBQkjj5xklDta_EOO0mADa-st3Zw8941ThkS5woKCQ/viewform" target="_blank">
              <div class="jumbotron text-center" style="border-radius:0px;border-top: 0.5px solid gainsboro;;background-color:white;margin-top:0%;padding-top:8px;padding-bottom:0px; ">
                <img class="img-responsive" src="./images/seleniumpy.png"><br>
                <p style="font-size:19px;margin: -25px -40px 0px -40px;">Automating Web testing with Selenium using Python</p>
                <h4><b></b></h4>
              </div>
            </a>
          </div><br>
          <a href="https://docs.google.com/forms/u/1/d/e/1FAIpQLScPpX9SPBQkjj5xklDta_EOO0mADa-st3Zw8941ThkS5woKCQ/viewform" target="_blank" style="left:90px;bottom:15px;" type="button" id="btnadd2" class="label label-primary enrollbtn"><span class="checkmark checkmark-animation"></span>&nbsp;&nbsp;Join Wait List</a>
        </div>
        <div class="col-lg-3 col-md-3  card style_prevu_kit2 gridcard" style="margin:20px;border: 0.5px solid gainsboro;background-color:white;max-height: 260px;">
          <div class="">
            <a href="https://docs.google.com/forms/u/1/d/e/1FAIpQLScPpX9SPBQkjj5xklDta_EOO0mADa-st3Zw8941ThkS5woKCQ/viewform" target="_blank">
              <div class="jumbotron text-center" style="border-radius:0px;border-top: 0.5px solid gainsboro;;background-color:white;margin-top:0%;padding-top:8px;padding-bottom:0px; ">
                <img class="img-responsive" src="./images/sql.png"><br>
                <p style="font-size:19px;margin: -25px -40px 0px -40px;">SQL - Beginner to Intermediate</p>
                <h4><b></b></h4>
              </div>
            </a>
          </div>
          <a href="https://docs.google.com/forms/u/1/d/e/1FAIpQLScPpX9SPBQkjj5xklDta_EOO0mADa-st3Zw8941ThkS5woKCQ/viewform" target="_blank" style="left:90px;bottom:-58px;" type="button" id="btnadd2" class="label label-primary enrollbtn"><span class="checkmark checkmark-animation"></span>&nbsp;&nbsp;Join Wait List</a>
        </div>
        <div class="col-lg-3 col-md-3  card style_prevu_kit2 gridcard" style="margin:20px;border: 0.5px solid gainsboro;background-color:white;max-height: 260px;">
          <div class="">
            <a href="https://docs.google.com/forms/u/1/d/e/1FAIpQLScPpX9SPBQkjj5xklDta_EOO0mADa-st3Zw8941ThkS5woKCQ/viewform" target="_blank">
              <div class="jumbotron text-center" style="border-radius:0px;border-top: 0.5px solid gainsboro;;background-color:white;margin-top:0%;padding-top:8px;padding-bottom:0px; ">
                <img class="img-responsive" src="./images/sql.png"><br>
                <p style="font-size:19px;margin: -25px -40px 0px -40px;">Advanced SQL</p>
                <h4><b></b></h4>
              </div>
            </a>
          </div>
          <a href="https://docs.google.com/forms/u/1/d/e/1FAIpQLScPpX9SPBQkjj5xklDta_EOO0mADa-st3Zw8941ThkS5woKCQ/viewform" target="_blank" style="left:90px;bottom:-83px;" type="button" id="btnadd2" class="label label-primary enrollbtn"><span class="checkmark checkmark-animation"></span>&nbsp;&nbsp;Join Wait List</a>
        </div>
        <div class="col-lg-3 col-md-3  card style_prevu_kit2 gridcard" style="margin:20px;border: 0.5px solid gainsboro;background-color:white;max-height: 260px;">
          <div class="">
            <a href="https://docs.google.com/forms/u/1/d/e/1FAIpQLScPpX9SPBQkjj5xklDta_EOO0mADa-st3Zw8941ThkS5woKCQ/viewform" target="_blank">
              <div class="jumbotron text-center" style="border-radius:0px;border-top: 0.5px solid gainsboro;;background-color:white;margin-top:0%;padding-top:8px;padding-bottom:0px; ">
                <img class="img-responsive" src="./images/machinelearn.png"><br>
                <p style="font-size:19px;margin: -25px -40px 0px -40px;">Machine Learning - Beginner</p>
                <h4><b></b></h4>
              </div>
            </a>
          </div>
          <a href="./mlb?ctype=1" target="_blank" style="left:501px;bottom:5px;" type="button" id="btnadd2" class="hidden-lg hidden-md label label-primary  exploregreen">Explore</a>
          <a href="./mlb?ctype=1" target="_blank" style="left:140px;bottom:-51px;" type="button" id="btnadd2" class="label label-primary hidden-xs hidden-sm exploregreen">Explore</a>
        </div>
      </div>
      <div class="row gridrow" style="margin:auto;">
        <div class="col-lg-3 col-md-3 card style_prevu_kit2 gridcard" style="margin:20px;border: 0.5px solid gainsboro;background-color:white;max-height: 260px;">
          <div class="">
            <a href="https://docs.google.com/forms/u/1/d/e/1FAIpQLScPpX9SPBQkjj5xklDta_EOO0mADa-st3Zw8941ThkS5woKCQ/viewform" target="_blank">
              <div class="jumbotron text-center" style="border-radius:0px;border-top: 0.5px solid gainsboro;;background-color:white;margin-top:0%;padding-top:8px;padding-bottom:0px; ">
                <img class="img-responsive" src="./images/machinelearn.png"><br>
                <p style="font-size:19px;margin: -25px -40px 0px -40px;">Machine Learning - Intermediate</p>
                <h4><b></b></h4>
              </div>
            </a>
          </div>
          <a href="./mli?ctype=1" target="_blank" style="left:501px;bottom:5px;" type="button" id="btnadd2" class="hidden-lg hidden-md label label-primary  exploregreen">Explore</a>
          <a href="./mli?ctype=1" target="_blank" style="left:140px;bottom:-51px;" type="button" id="btnadd2" class="label label-primary hidden-xs hidden-sm exploregreen">Explore</a>
        </div>
        <div class="col-lg-3 col-md-3  card style_prevu_kit2 gridcard" style="margin:20px;border: 0.5px solid gainsboro;background-color:white;max-height: 260px;">
          <div class="">
            <a href="https://docs.google.com/forms/u/1/d/e/1FAIpQLScPpX9SPBQkjj5xklDta_EOO0mADa-st3Zw8941ThkS5woKCQ/viewform" target="_blank">
              <div class="jumbotron text-center" style="border-radius:0px;border-top: 0.5px solid gainsboro;;background-color:white;margin-top:0%;padding-top:8px;padding-bottom:0px; ">
                <img class="img-responsive" src="./images/naturallang.png"><br>
                <p style="font-size:19px;margin: -25px -40px 0px -40px;">Natural Language Processing - Beginner to Intermediate</p>
                <h4><b></b></h4>
              </div>
            </a>
          </div><br>
          <a href="https://docs.google.com/forms/u/1/d/e/1FAIpQLScPpX9SPBQkjj5xklDta_EOO0mADa-st3Zw8941ThkS5woKCQ/viewform" target="_blank" style="left:92px;bottom:30px;" type="button" id="btnadd2" class="label label-primary enrollbtn"><span class="checkmark checkmark-animation"></span>&nbsp;&nbsp;Join Wait List</a>
        </div>
        <div class="col-lg-3 col-md-3  card style_prevu_kit2 gridcard" style="margin:20px;border: 0.5px solid gainsboro;background-color:white;max-height: 260px;">
          <div class="">
            <a href="https://docs.google.com/forms/u/1/d/e/1FAIpQLScPpX9SPBQkjj5xklDta_EOO0mADa-st3Zw8941ThkS5woKCQ/viewform" target="_blank">
              <div class="jumbotron text-center" style="border-radius:0px;border-top: 0.5px solid gainsboro;;background-color:white;margin-top:0%;padding-top:8px;padding-bottom:0px; ">
                <img class="img-responsive" src="./images/deeplearn.png"><br>
                <p style="font-size:19px;margin: -25px -40px 0px -40px;">Deep Learning for NLP & Text based applications</p>
                <h4><b></b></h4>
              </div>
            </a>
          </div>
          <a href="https://docs.google.com/forms/u/1/d/e/1FAIpQLScPpX9SPBQkjj5xklDta_EOO0mADa-st3Zw8941ThkS5woKCQ/viewform" target="_blank" style="left:92px;bottom:-36px;" type="button" id="btnadd2" class="label label-primary enrollbtn"><span class="checkmark checkmark-animation"></span>&nbsp;&nbsp;Join Wait List</a>
        </div>
        <div class="col-lg-3 col-md-3  card style_prevu_kit2 gridcard" style="margin:20px;border: 0.5px solid gainsboro;background-color:white;max-height: 260px;">
          <div class="">
            <a href="https://docs.google.com/forms/u/1/d/e/1FAIpQLScPpX9SPBQkjj5xklDta_EOO0mADa-st3Zw8941ThkS5woKCQ/viewform" target="_blank">
              <div class="jumbotron text-center" style="border-radius:0px;border-top: 0.5px solid gainsboro;;background-color:white;margin-top:0%;padding-top:8px;padding-bottom:0px; ">
                <img class="img-responsive" src="./images/www.png"><br>
                <p style="font-size:19px;margin: -25px -40px 0px -40px;">Web skills for Coding Intelligent* Web application</p>
                <p class="x" style="font-size:11px;margin: 0px -40px 0px -40px;">(*Intelligent means integrating ML model into Web App)</p>
              </div>
            </a>
          </div><br><br>
          <a href="https://docs.google.com/forms/u/1/d/e/1FAIpQLScPpX9SPBQkjj5xklDta_EOO0mADa-st3Zw8941ThkS5woKCQ/viewform" target="_blank" style="left:92px;bottom:48px;" type="button" id="btnadd2" class="btnj label label-primary enrollbtn"><span class="checkmark checkmark-animation"></span>&nbsp;&nbsp;Join Wait List</a>
        </div>
      </div>
    </div>
    <div class="hideshare2"></div>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./assets/jsm/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="./assets/jsm/bootstrap.min.js"></script>
    <script src="./assets/jsm/ie10-viewport-bug-workaround.js"></script>
    <script src="./assets/jsm/mediumish.js"></script>
  </body>

</html>
<?php include 'footer.php';?>