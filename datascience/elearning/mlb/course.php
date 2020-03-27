<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  <link href="https://fonts.googleapis.com/css?family=Istok+Web&display=swap" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">

  <style>
    .indie {
      font-family: 'Sen', sans-serif;
    }

    html,
    body {
      background-color: #FFF !important;
    }

    .lessons {
      margin: -5%;
      padding: 10%;
      padding-left: 30px;
    }

    .selen {
      border: 1px solid gainsboro;
      border-radius: 5px;
      padding: 45px;
      padding-left: 70px;
      padding-top: 0px !important;
      margin-right: -73px;
    }

    ol {
      font-weight: bolder;
      font-size: 16px;
      margin-top: 20px;
    }

    .subhr {
      width: 104%;
      border: 1px solid gainsboro;
      position: absolute;
      margin-left: -9.5%;
      padding: 0;
    }

    /*Circular Svg*/

    #svg circle {
      stroke-dashoffset: 50;
      transition: stroke-dashoffset 1s linear;
      stroke: #666;
      stroke-width: 1em;
    }

    #svg #bar {
      stroke: #FF9F1E;

    }

    #cont {
      display: block;
      height: 80px;
      width: 80px;
      margin: 2em auto;
      box-shadow: 0 0 1em black;
      border-radius: 100%;
      position: relative;

    }

    #cont:after {
      position: absolute;
      display: block;
      height: 160px;
      width: 160px;
      left: 50%;
      top: 50%;
      box-shadow: inset 0 0 1em black;
      content: attr(data-pct)"%";
      margin-top: -80px;
      margin-left: -80px;
      border-radius: 100%;
      line-height: 160px;
      font-size: 2em;
      text-shadow: 0 0 0.5em black;
    }

    input {
      color: #000;
    }

    svg:not(:root) {
      overflow: hidden;
      margin-top: -15%;
      position: absolute;
      left: -60px;
      top: -48px;
    }




    .svgtext {
      font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif;
      background-color: #0d0d0d;
      color: #fff;
      height: 100%;
      padding-top: 2em;
      text-align: center;
    }

    .fiximg {
      margin-left: 36% !important;
      margin-bottom: 4px;
    }

    .text-success {
      padding-left: 57px !important;
    }

    body {
      font-family: 'Istok Web', sans-serif;
    }

    .studtestim {
      margin-top: 161%;
      margin-bottom: -10px;
    }


    @media screen and (max-width: 600px) {
      .smhead {
        float: left;

        color: gray;
        margin-left: -10px !important;
        margin-right: -110px !important;
        margin-bottom: 0;
        margin-top: 10px;
        font-size: 30px;
      }

      .container-fluid>.navbar-collapse,
      .container-fluid>.navbar-header,
      .container>.navbar-collapse,
      .container>.navbar-header {
        margin-right: -30px;
        margin-left: -15px;
      }

      .smheadnxt {
        font-size: 30px !important;
        margin-left: 10px !important;
        margin-top: -12px !important;
        margin-right: -10px !important;
        padding: 60px !important;
      }

      .text-left {
        text-align: center !important;
      }

      .indie1 {
        font-size: 15px;
        margin-top: -37px !important;
        margin-right: -400px !important;
        margin-left: -60px !important;
        color: #3c763d;
        display: block;
        position: absolute;
        left: -10px;
      }


      .smallicon {

        padding: 20px;
        margin-left: 5px;
      }

      .subhr {
        width: 4000%;
        border: 1px solid gainsboro;
        position: absolute;
        margin-left: -460%;
        padding: 0;
        margin-bottom: 5px !important;
      }

      .lessons {
        margin: -7%;
        padding-top: 20%;
        padding-bottom: 10%;
        padding-left: 0px !important;
        /* font-size: 11px !important; */
        margin-top: -5%;
        margin-bottom: 0%;
        /* text-align: justify; */
      }

      .smhr {
        margin-top: 80% !important;
      }

      .col-lg-12,
      .col-md-12 {
        position: relative;
        min-height: 1px;
        padding-right: 0;
        padding-left: 30px;
      }

      .shifthimg {
        margin-top: 10px !important;
      }

      .topicheadings {
        padding-right: 20% !important;
      }


    }
  </style>
  <script>
    $("#percent").on("change", function () {
      var val = parseInt($(this).val());
      var $circle = $("#svg #bar");

      if (isNaN(val)) {
        val = 100;
      } else {
        var r = $circle.attr("r");
        var c = Math.PI * (r * 2);

        if (val < 0) {
          val = 0;
        }
        if (val > 100) {
          val = 100;
        }

        var pct = ((100 - val) / 100) * c;

        $circle.css({ strokeDashoffset: pct });

        $("#cont").attr("data-pct", val);
      }
    });

  </script>
</head>

<body>
  <div>
    <img class="img-responsive shifthimg" style="margin:0px;min-width:100%;" height="60px"
      src="https://yt3.ggpht.com/MVb4FIpLMFN3HJ7RpIzIZK3IN9wLPjdZDYc8f-Q1smrBxFHKZAvSUTXA28aT5Palwslgkc9bzA=w2560-fcrop64=1,00005a57ffffa5a8-k-c0xffffffff-no-nd-rj">
  </div>
  <span class="container hidden-sm hidden-xs">
    <span class="col-lg-3 col-md-3 col-sm-12 col-xs-12 hidden-xs hidden-sm">
      <div class="studtestim">
        <br><br><br><br>
        <!--Testimonials start-->
        <div class="container text-center text-justify">
          <h3 class="text-success"><span
              style="font-weight:bolder; padding-left:40px;margin-bottom:-20px;">Testimonials</span><br><span
              style="font-weight:bolder;"></span></h3><br>
          <div class="">
            <div class="row">
              <div class="row" style="padding-left:4%;margin-top:-10px;">
                <div class="row">
                  <span class="col-md-3">
                    <img src="../assets/imgm/testimonials/samiksha.jpg" class="img-circle fiximg" alt="" width=80
                      height=80>
                  </span><br><br><br><br>
                  <div class="row">
                    <span class="text-center text-primary col-lg-3 colmd-3 col-sm-3 col-xs-3"
                      style="font-size:11px;padding:21px;margin-top:-1%;margin-left:1.1%;">
                      <p><b class="text-info applypads" style="font-weight: bolder;font-size:1.3rem;">Pratiksha
                          Patil</b></p>
                      <p class="text-info" style="font-size:11px;margin-top:-10px;">Rocky Sir, and his team helped me in
                        understanding all core ML concepts.</p>
                      <p class="text-info"
                        style="font-size:11px;margin-top:-10px;font-weight: bolder;font-size:1.3rem;">BTech(CS) | Jr.
                        Data Analyst</p><br>
                    </span>
                  </div>
                </div>
              </div>
              <div class="row" style="padding-left:4%;">
                <div class="row">
                  <span class="col-md-3">
                    <img src="../assets/imgm/testimonials/nidhi.jpg" class="img-circle fiximg" alt="" width=80
                      height=80>
                  </span><br><br><br><br>
                  <div class="row">
                    <span class="text-center text-primary col-lg-3 col-md-3 col-sm-3 col-xs-3"
                      style="font-size:11px;padding:21px;margin-top:-1%;margin-left:1.1%;">
                      <p><b class="text-info applypads" style="font-weight: bolder;font-size:1.3rem;">Nidhi Shah</b></p>
                      <p class="text-info" style="font-size:11px;margin-top:-10px;">The Jupyter Notebooks made by
                        SuvenML team is awesome. I enjoyed learning at SuvenML.</p>
                      <p class="text-info"
                        style="font-size:11px;margin-top:-10px;font-weight: bolder;font-size:1.3rem;">BSci(CS) | Jr.
                        Data Scientist </p><br>
                    </span></div>
                </div>
              </div>
              <div class="row" style="padding-left:4%;">
                <div class="row">
                  <span class="col-md-3">
                    <img src="../assets/imgm/testimonials/shrivats.jpg" class="img-circle fiximg" alt="" width=80
                      height=80>
                  </span><br><br><br><br>
                  <div class="row">
                    <span class="text-center text-primary col-lg-3 colmd-3 col-sm-3 col-xs-3"
                      style="font-size:11px;padding:21px;margin-top:-1%;margin-left:1.1%;">
                      <p><b class="text-info applypads" style="font-weight: bolder;font-size:1.3rem;">Sameeksha
                          Shrivastava</b></p>
                      <p class="text-info" style="font-size:11px;margin-top:-10px;">Each course at Suven is awesome. I
                        have done almost all.</p>
                      <p class="text-info"
                        style="font-size:11px;margin-top:-10px;font-weight: bolder;font-size:1.3rem;">System Engineer |
                        5+ Years Work Exp.</p><br>
                    </span></div>
                </div>
              </div>
              <div class="row" style="padding-left:4%;">
                <div class="row">
                  <span class="col-md-3">
                    <img src="../assets/imgm/testimonials/akash.jpg" class="img-circle fiximg" alt="" width=80
                      height=80>
                  </span><br><br><br><br>
                  <div class="row">
                    <span class="text-center text-primary col-lg-3 colmd-3 col-sm-3 col-xs-3"
                      style="font-size:11px;padding:21px;margin-top:-1%;margin-left:1.1%;">
                      <p><b class="text-info applypads" style="font-weight: bolder;font-size:1.3rem;">Aahan Gupta</b>
                      </p>
                      <p class="text-info" style="font-size:11px;margin-top:-10px;">Learning from their courses enabled
                        me fully to take part and excel in kaggle competitions. Great content , great teaching.</p>
                      <p class="text-info"
                        style="font-size:11px;margin-top:-10px;font-weight: bolder;font-size:1.3rem;">BE(CS) | Data
                        Scientist</p><br>
                    </span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </span>
    <span class="col-lg-9 col-md-9" style="padding-right:0%;margin-right:-10%;">
      <br>
      <span style="display:inline;">
        <span style="float:left;color:gray; margin-left: -30px;margin-right: -19px;margin-bottom: -19px;"
          class="smhead">
          <img src="https://datascience.suvenconsultants.com/elearning/images/machinelearn.png" width="135" height="130"
            class="rounded img-fluid float-left smallicon" alt="...">
        </span>
        <h1 class="text-left smheadnxt" style="margin-left:-28px;margin-top:42px; font-weight:bolder;font-size: 46px;">
          Machine Learning <span style="color:#3c763d">Beginner</span></h1>
        <div class="indie indie1"
          style="font-size: 18px;margin-top: -1px;margin-right: 350px;color:#3c763d;display: block;position: absolute;left: 103px;">
          Supervised &amp;
          Unsupervised ML, ML
          pipeline, Basic Data Exploration, Train-Test-Split, Encoding Categorical data, Feature Scaling, Decision
          (CART) Trees, Random Forest, Naive Bayes
          Classification, Principal Component Analysis, k-Means
          Clustering and deploying ML models on FLASK.<br><br>
          <span style="font-size:16px"><b>Pre-requisite for this course :</b> You should know <b>Python</b> for <b>Data
              Science</b>. </span>
        </div>
      </span>




      <hr class="smhr" style="min-width:100%;margin-top:21%;border:solid 0.5px silver;margin-left:-30px;">
      <div class="col-lg-12 col-md-12">
        <span class="col-lg-9 col-md-9">
          <div class="container-fluid" style="width: 105%;margin-left:-10%;">
            <span style="width:100%;margin-left:-15px;">
              <span
                style="font-family: zeitung, sans-serif;font-size: 20px;font-weight: 600;margin-bottom: 15px;-webkit-box-flex: 1;flex-grow: 1;padding-left: 28px;"><b>Lesson</b></span>
              <span
                style="float: right;margin-right: 4px;font-size: 20px;font-weight: 600;"><b>Notebook</b>&nbsp;&nbsp;&nbsp;
                <span style="float:right;font-size: 20px;font-weight: 600;"><b>Quiz</b></span></span>
            </span>
            <ol type="" class="selen">
              <li class="lessons">
                <div style="width:100%;margin-top:-10px;">
                  <span class="hidden-sm hidden-xs" style="font-size:18px;"><b>Supervised & Unsupervised ML</b></span>
                  <span class="hidden-lg hidden-sm hidden-xs hidden-md" style="font-size:16px;"><b>Supervised &
                      <br>Unsupervised ML</b></span>
                  <!--<span style="float: right;"><img width=50 height=50 src="../images/icons/doc.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="float:right;"><img width=48 height=48 src="../images/icons/quiz.png"></span></span>-->

                  <span class="topicheadings hidden-xs hidden-sm" style="float: right;margin-top:-10px"> <a
                      href="https://colab.research.google.com/drive/1lXf-vXSldsM-FW-vh2DGl4hOIiGf0s4_" target="_blank">
                      <img width=50 height=50 src="../images/icons/doc.png"> </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="float:right;">
                    <a
                      href="https://colab.research.google.com/drive/1lXf-vXSldsM-FW-vh2DGl4hOIiGf0s4_" target="_blank">
                      <img width=50 height=50 src="../images/icons/doc.png"> </a>
                    <img id="quizfilpgreen" width=50 height=50 src="../images/icons/checkdone.png"></span>
                  </span>
                  <span class="hidden-lg hidden-sm hidden-xs hidden-md" data-toggle="modal" data-target="#exampleModal"
                    style="float: right;margin-top:-25px;">
                    <a href="#0" target="">
                      <img width=50 height=50 src="../images/icons/doc.png">
                    </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="float:right;"><img width=48
                        height=48 src="../images/icons/quiz.png"></span></span>
                </div>
                <div><span
                    style="margin-bottom: -23px;font-size:11px;margin-top:2px;margin-right:30%;color:#3c763d;font-weight:500;display: block;"><span
                      class="indie indie2 hidden-xs hidden-sm" style="font-size:17px;">You would perfectly understand
                      the applications of Machine learning. Be able to distinguish between Supervised and Unsupervised
                      Machine learning algorithms.</span>
                  </span></div>
              </li>
              <hr class="subhr">
              <li class="lessons">
                <div style="width:100%;margin-top:-10px;">
                  <span class="topicheadings  hidden-sm hidden-xs"><b>ML Pipeline</b></span>
                  <span class="hidden-lg hidden-sm hidden-xs hidden-md" style="font-size:16px;"><b>ML
                      Pipeline</b></span>
                  <span class="hidden-xs hidden-sm" style="float: right;margin-top:-10px"> <a
                      href="https://colab.research.google.com/drive/1OuHfxds3XASI7rof_rTNeh9v7gx8UD-j" target="_blank">
                      <img width=50 height=50 src="../images/icons/doc.png"> </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="float:right;"><img width=48
                        height=48 src="../images/icons/quiz.png"></span></span>
                  <span class="hidden-lg hidden-sm hidden-xs hidden-md" data-toggle="modal" data-target="#exampleModal"
                    style="float: right;margin-top:-25px;margin-top:2px;">
                    <a href="#0" target="">
                      <img width=50 height=50 src="../images/icons/doc.png">
                    </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="float:right;"><img width=48
                        height=48 src="../images/icons/quiz.png"></span></span>
                </div>
                <div><span
                    style="margin-bottom: -23px;font-size:11px;margin-top:2px;margin-right:30%;color:#3c763d;font-weight:500;display: block;"><span
                      class="indie indie2 hidden-xs hidden-sm" style="font-size:17px;">Any Machine Learning problem has
                      to solved through a series of steps from "data cleaning" to "making the ML model". You would learn
                      these steps through solving a simple Case Study completely.

                    </span></span></div>
              </li>
              <hr class="subhr">
              <li class="lessons">
                <div style="width:100%;margin-top:-10px;">
                  <span class="topicheadings  hidden-sm hidden-xs"><b>Basic Data Exploration</b></span>
                  <span class="hidden-lg hidden-sm hidden-xs hidden-md" style="font-size:16px;"><b>Basic Data
                      Exploration</b></span>
                  <span class="hidden-xs hidden-sm" style="float: right;margin-top:-10px"> <a
                      href="https://colab.research.google.com/drive/1BJGXVT8d391gwhyVXxtuONuvpzGkItGr" target="_blank">
                      <img width=50 height=50 src="../images/icons/doc.png"> </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="float:right;"><img width=48
                        height=48 src="../images/icons/quiz.png"></span></span>
                  <span class="hidden-lg hidden-sm hidden-xs hidden-md" data-toggle="modal" data-target="#exampleModal"
                    style="float: right;margin-top:-25px;margin-top:2px;">
                    <a href="#0" target="">
                      <img width=50 height=50 src="../images/icons/doc.png">
                    </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="float:right;"><img width=48
                        height=48 src="../images/icons/quiz.png"></span></span>
                </div>
                <div><span
                    style="margin-bottom: -23px;font-size:11px;margin-top:2px;margin-right:30%;color:#3c763d;font-weight:500;display: block;"><span
                      class="indie indie2 hidden-xs hidden-sm" style="font-size:17px;">You would be able perform basic
                      "Data Exploration" thereby gaining statistics information of the data. This helps in deciding what
                      type of ML Algo should we apply to our data.
                    </span></span></div>
              </li>
              <hr class="subhr">
              <li class="lessons">
                <div style="width:100%;margin-top:-10px;">
                  <span class="topicheadings  hidden-sm hidden-xs"><b>Train Test Split</b></span>
                  <span class="hidden-lg hidden-sm hidden-xs hidden-md" style="font-size:16px;"><b>Train Test
                      Split</b></span>
                  <span class="hidden-xs hidden-sm" style="float: right;margin-top:-10px"> <a
                      href="https://colab.research.google.com/drive/15zsGllmaSWqmleNYUHAmE57ayTpDQzBB" target="_blank">
                      <img width=50 height=50 src="../images/icons/doc.png"> </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="float:right;"><img width=48
                        height=48 src="../images/icons/quiz.png"></span></span>
                  <span class="hidden-lg hidden-sm hidden-xs hidden-md" data-toggle="modal" data-target="#exampleModal"
                    style="float: right;margin-top:-25px;margin-top:2px;">
                    <a href="#0" target="">
                      <img width=50 height=50 src="../images/icons/doc.png">
                    </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="float:right;"><img width=48
                        height=48 src="../images/icons/quiz.png"></span></span>
                </div>
                <div><span
                    style="margin-bottom: -23px;font-size:11px;margin-top:2px;margin-right:30%;color:#3c763d;font-weight:500;display: block;"><span
                      class="indie indie2 hidden-xs hidden-sm" style="font-size:17px;">In Machine Learning if we use the
                      entire data for training, then how should we test our own Model ? You would understand Why and How
                      to Split the data. Usually its 80% for Training and 20% for Testing the Model. You would learn
                      this through solving a Linear Regression problem completely.
                    </span></span></div>
              </li>
              <hr class="subhr">
              <li class="lessons">
                <div style="width:100%;margin-top:-10px;">
                  <span class="topicheadings  hidden-sm hidden-xs"><b>Encoding Categorical data</b></span>
                  <span class="hidden-lg hidden-sm hidden-xs hidden-md" style="font-size:16px;"><b>Encoding Categorical
                      data</b></span>
                  <span class="hidden-xs hidden-sm" style="float: right;margin-top:-10px"> <a
                      href="https://colab.research.google.com/drive/1EauAwS3vqe70hkOSRN0e-t_JW2bpBZSP" target="_blank">
                      <img width=50 height=50 src="../images/icons/doc.png"> </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="float:right;"><img width=48
                        height=48 src="../images/icons/quiz.png"></span></span>
                  <span class="hidden-lg hidden-sm hidden-xs hidden-md" data-toggle="modal" data-target="#exampleModal"
                    style="float: right;margin-top:-25px;margin-top:2px;">
                    <a href="#0" target="">
                      <img width=50 height=50 src="../images/icons/doc.png">
                    </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="float:right;"><img width=48
                        height=48 src="../images/icons/quiz.png"></span></span>
                </div>
                <div><span
                    style="margin-bottom: -23px;font-size:11px;margin-top:2px;margin-right:30%;color:#3c763d;font-weight:500;display: block;"><span
                      class="indie indie2 hidden-xs hidden-sm" style="font-size:17px;">All Machine Learning algorithms
                      can only understand numeric data. You would learn different types of categorical data and ways to
                      convert them into numeric values.
                    </span></span></div>
              </li>
              <hr class="subhr">
              <li class="lessons">
                <div style="width:100%;margin-top:-10px;">
                  <span class="topicheadings  hidden-sm hidden-xs"><b>Feature Scaling</b></span>
                  <span class="hidden-lg hidden-sm hidden-xs hidden-md" style="font-size:16px;"><b>Feature
                      Scaling</b></span>
                  <span class="hidden-xs hidden-sm" style="float: right;margin-top:-10px"> <a
                      href="https://colab.research.google.com/drive/1KDN_kH8tRulxkaVPswcDfQHzIB_81zum" target="_blank">
                      <img width=50 height=50 src="../images/icons/doc.png"> </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="float:right;"><img width=48
                        height=48 src="../images/icons/quiz.png"></span></span>
                  <span class="hidden-lg hidden-sm hidden-xs hidden-md" data-toggle="modal" data-target="#exampleModal"
                    style="float: right;margin-top:-25px;margin-top:2px;">
                    <a href="#0" target="">
                      <img width=50 height=50 src="../images/icons/doc.png">
                    </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="float:right;"><img width=48
                        height=48 src="../images/icons/quiz.png"></span></span>
                </div>
                <div><span
                    style="margin-bottom: -23px;font-size:11px;margin-top:2px;margin-right:30%;color:#3c763d;font-weight:500;display: block;"><span
                      class="indie indie2 hidden-xs hidden-sm" style="font-size:17px;">At times numeric features are
                      very wide spread something like youtube_Video_views. You would learn 3 different ways on scaling
                      or normalizing them.
                    </span></span></div>
              </li>
              <hr class="subhr">
              <li class="lessons">
                <div style="width:100%;margin-top:-10px;">
                  <span class="topicheadings  hidden-sm hidden-xs"><b>Decision (CART) Trees</b></span>
                  <span class="hidden-lg hidden-sm hidden-xs hidden-md" style="font-size:16px;"><b>Decision (CART)
                      Trees</b></span>
                  <span class="hidden-xs hidden-sm" style="float: right;margin-top:-10px"> <a
                      href="https://colab.research.google.com/drive/1gWwzhgBQjWWu2Cb42afUBkxljJ7zMb3T" target="_blank">
                      <img width=50 height=50 src="../images/icons/doc.png"> </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="float:right;"><img width=48
                        height=48 src="../images/icons/quiz.png"></span></span>
                  <span class="hidden-lg hidden-sm hidden-xs hidden-md" data-toggle="modal" data-target="#exampleModal"
                    style="float: right;margin-top:-25px;margin-top:2px;">
                    <a href="#0" target="">
                      <img width=50 height=50 src="../images/icons/doc.png">
                    </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="float:right;"><img width=48
                        height=48 src="../images/icons/quiz.png"></span></span>
                </div>
                <div><span
                    style="margin-bottom: -23px;font-size:11px;margin-top:2px;margin-right:30%;color:#3c763d;font-weight:500;display: block;"><span
                      class="indie indie2 hidden-xs hidden-sm" style="font-size:17px;">You would learn how to apply and
                      solve problems by using Decision Trees for Regression & Classification both.
                    </span></span></div>
              </li>
              <hr class="subhr">
              <li class="lessons">
                <div style="width:100%;margin-top:-10px;">
                  <span class="topicheadings  hidden-sm hidden-xs"><b>Random Forest</b></span>
                  <span class="hidden-lg hidden-sm hidden-xs hidden-md" style="font-size:16px;"><b>Random
                      Forest</b></span>
                  <span class="hidden-xs hidden-sm" style="float: right;margin-top:-10px"> <a
                      href="https://colab.research.google.com/drive/1QWEWAmEgdjJk9AZ6i88RV4ESTEaBV5h6" target="_blank">
                      <img width=50 height=50 src="../images/icons/doc.png"> </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="float:right;"><img width=48
                        height=48 src="../images/icons/quiz.png"></span></span>
                  <span class="hidden-lg hidden-sm hidden-xs hidden-md" data-toggle="modal" data-target="#exampleModal"
                    style="float: right;margin-top:-25px;margin-top:2px;">
                    <a href="#0" target="">
                      <img width=50 height=50 src="../images/icons/doc.png">
                    </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="float:right;"><img width=48
                        height=48 src="../images/icons/quiz.png"></span></span>
                </div>
                <div><span
                    style="margin-bottom: -23px;font-size:11px;margin-top:2px;margin-right:30%;color:#3c763d;font-weight:500;display: block;"><span
                      class="indie indie2 hidden-xs hidden-sm" style="font-size:17px;">A single decision tree can do a
                      fine job but we can improve its performance by using many Decision trees. This method of using
                      many ML algorithms is called ensemble method. You would learn Random Forest ensemble method and
                      solve some problems.
                    </span></span></div>
              </li>
              <hr class="subhr">
              <li class="lessons">
                <div style="width:100%;margin-top:-10px;">
                  <span class="topicheadings  hidden-sm hidden-xs"><b>Naive Bayes Classification</b></span>
                  <span class="hidden-lg hidden-sm hidden-xs hidden-md" style="font-size:16px;"><b>Naive Bayes
                      Classification</b></span>
                  <span class="hidden-xs hidden-sm" style="float: right;margin-top:-10px"> <a
                      href="https://colab.research.google.com/drive/1ZN9K9y6nHq2mVRaCWm4jjOmTWlmnYI09" target="_blank">
                      <img width=50 height=50 src="../images/icons/doc.png"> </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="float:right;"><img width=48
                        height=48 src="../images/icons/quiz.png"></span></span>
                  <span class="hidden-lg hidden-sm hidden-xs hidden-md" data-toggle="modal" data-target="#exampleModal"
                    style="float: right;margin-top:-25px;margin-top:2px;">
                    <a href="#0" target="">
                      <img width=50 height=50 src="../images/icons/doc.png">
                    </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="float:right;"><img width=48
                        height=48 src="../images/icons/quiz.png"></span></span>
                </div>
                <div><span
                    style="margin-bottom: -23px;font-size:11px;margin-top:2px;margin-right:30%;color:#3c763d;font-weight:500;display: block;"><span
                      class="indie indie2 hidden-xs hidden-sm" style="font-size:17px;">You would learn in simplest
                      possible ways about "Bayes" theorem and apply the Naive Bayes theorem to solve a Machine learning
                      problem.
                    </span></span></div>
              </li>
              <hr class="subhr">
              <li class="lessons">
                <div style="width:100%;margin-top:-10px;">
                  <span class="topicheadings  hidden-sm hidden-xs"><b>Principal Component Analysis</b></span>
                  <span class="hidden-lg hidden-sm hidden-xs hidden-md" style="font-size:16px;"><b>Principal Component
                      <br>Analysis</b></span>
                  <span class="hidden-xs hidden-sm" style="float: right;margin-top:-10px"> <a
                      href="https://colab.research.google.com/drive/1cDv1ziyIfMc0YNeOHoEUw7pKNOw3Bokt" target="_blank">
                      <img width=50 height=50 src="../images/icons/doc.png"> </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="float:right;"><img width=48
                        height=48 src="../images/icons/quiz.png"></span></span>
                  <span class="hidden-lg hidden-sm hidden-xs hidden-md" data-toggle="modal" data-target="#exampleModal"
                    style="float: right;margin-top:-25px;">
                    <a href="#0" target="">
                      <img width=50 height=50 src="../images/icons/doc.png">
                    </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="float:right;"><img width=48
                        height=48 src="../images/icons/quiz.png"></span></span>
                </div>
                <div><span
                    style="margin-bottom: -23px;font-size:11px;margin-top:2px;margin-right:30%;color:#3c763d;font-weight:500;display: block;"><span
                      class="indie indie2 hidden-xs hidden-sm" style="font-size:17px;">You would learn about
                      dimensionality reduction, i.e how to shortlist most important features which influence the target
                      variable. Most of the times very few features actually influence the target variable.
                    </span></span></div>
              </li>
              <hr class="subhr">
              <li class="lessons">
                <div style="width:100%;margin-top:-10px;">
                  <span class="topicheadings  hidden-sm hidden-xs"><b>k-Means Clustering</b></span>
                  <span class="hidden-lg hidden-sm hidden-xs hidden-md" style="font-size:16px;"><b>k-Means
                      Clustering</b></span>
                  <span class="hidden-xs hidden-sm" style="float: right;margin-top:-10px"> <a
                      href="https://colab.research.google.com/drive/1RwzGiEPPMLUE5k4sUJ0BEPIYQR2ono5X" target="_blank">
                      <img width=50 height=50 src="../images/icons/doc.png"> </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="float:right;"><img width=48
                        height=48 src="../images/icons/quiz.png"></span></span>
                  <span class="hidden-lg hidden-sm hidden-xs hidden-md" data-toggle="modal" data-target="#exampleModal"
                    style="float: right;margin-top:-25px;margin-top:2px;">
                    <a href="#0" target="">
                      <img width=50 height=50 src="../images/icons/doc.png">
                    </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="float:right;"><img width=48
                        height=48 src="../images/icons/quiz.png"></span></span>
                </div>
                <div><span
                    style="margin-bottom: -23px;font-size:11px;margin-top:2px;margin-right:30%;color:#3c763d;font-weight:500;display: block;"><span
                      class="indie indie2 hidden-xs hidden-sm" style="font-size:17px;">Clustering is an Unsupervised
                      Machine Learning Algorithm. You would learn how to select important features and divide the data
                      set into clusters. Post Clustering we can label the data and possibly use it to apply some
                      Supervised ML model.
                    </span></span></div>
              </li>
              <hr class="subhr">
              <div class="lessons">
                <div style="width:100%;margin-top:-10px;">
                  <span class=" hidden-sm hidden-xs"><b style="font-size:25px;font-weight:bolder;color:green;">Bonus
                      topic :</b><b> K Nearest Neighbors (KNN) <br>Supervised Classification Algo</b></span>
                  <span class="hidden-lg hidden-sm hidden-xs hidden-md"><b
                      style="font-size:18px;font-weight:bolder;">Bonus topic :</b><b style="font-size:16px;"> K
                      Nearest<br> Neighbors (KNN) <br>Supervised Classification<br> Algo</b></span>
                  <span class="hidden-xs hidden-sm" style="float: right;margin-top:-24px;"> <a
                      href="https://colab.research.google.com/drive/1KTVg6lrxJv3ytYkX0QJP74R2xl0juLdL" target="_blank">
                      <img width=50 height=50 src="../images/icons/doc.png"> </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                      style="float:right;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img width=48 height=48
                        style="display:none;" src="../images/icons/quiz.png"></span></span>
                  <span class="hidden-lg hidden-sm hidden-xs hidden-md" data-toggle="modal" data-target="#exampleModal"
                    style="float: right;margin-top:-32px;">
                    <a href="#0" target="">
                      <img width=50 height=50 src="../images/icons/doc.png">
                    </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="float:right;"><img width=48
                        height=48 src="../images/icons/quiz.png"></span></span>
                </div>
                <div><span
                    style="margin-bottom: -23px;font-size:11px;margin-top:2px;margin-right:30%;color:#3c763d;font-weight:500;display: block;"><span
                      class="indie indie2 hidden-xs hidden-sm" style="font-size:17px;">
                    </span></span></div>
              </div>
              <hr class="subhr">
              <li class="lessons">
                <div style="width:100%;margin-top:-10px;">
                  <span class="topicheadings hidden-sm hidden-xs"><b>Deploying ML models on FLASK</b></span>
                  <span class="hidden-lg hidden-sm hidden-xs hidden-md" style="font-size:16px;"><b>Deploying ML models
                      on<br> FLASK</b></span>
                  <span class="hidden-xs hidden-sm" style="float: right;margin-top:-10px"> <a
                      href="https://colab.research.google.com/drive/1-geJExNlciBnYhYU45RH78UqnHjFZDDD" target="_blank">
                      <img width=50 height=50 src="../images/icons/doc.png"> </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="float:right;"><img width=48
                        height=48 src="../images/icons/quiz.png"></span></span>
                  <span class="hidden-lg hidden-sm hidden-xs hidden-md" data-toggle="modal" data-target="#exampleModal"
                    style="float: right;margin-top:-25px;">
                    <a href="#0" target="">
                      <img width=50 height=50 src="../images/icons/doc.png">
                    </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="float:right;"><img width=48
                        height=48 src="../images/icons/quiz.png"></span></span>
                </div>

                <div><span
                    style="margin-bottom: -23px;font-size:11px;margin-top:2px;margin-right:30%;color:#3c763d;font-weight:500;display: block;"><span
                      class="indie indie2 hidden-xs hidden-sm" style="font-size:17px;">You would learn how to put your
                      ML model to good use. You would host your pickle file (i.e the ML model) over FLASK (web
                      application framework). In this way your friends , teachers and your Boss (at work) would be able
                      to use your ML model for predicting, classifying or recommending.
                    </span></span></div>
              </li>
            </ol>
          </div>
        </span>

        <span class="col-lg-3 col-md-3">
          <div class="container-fluid"><br><br>
            <span style="width:100%;" class="text-center hidden-xs hidden-sm">
              <span class="topicheadings"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your Progress</b></span><br><br>
            </span>



            <!--Progress Bar Starts Here-->
            <div class="svgresized hidden-xs hidden-sm" style="margin-left:-5px;margin-left:-10px;">
              <div id="cont" data-pct="50" class="svgtext">
                <svg id="svg" width="200" height="200" viewPort="0 0 100 100" version="1.1"
                  xmlns="http://www.w3.org/2000/svg">
                  <circle r="50" cx="100" cy="100" fill="transparent" stroke-dasharray="565.48" stroke-dashoffset="0">
                  </circle>
                  <circle id="bar" r="60" cx="100" cy="100" fill="transparent" stroke-dasharray="565.48"
                    stroke-dashoffset="0"></circle>
                </svg>
              </div>
            </div>

            <!--<label for="percent">Type a percent!</label>-->
            <!--<input id="percent" name="percent">-->
            <!--Progress Structure ends-->
            <div><br><br>


              <!-- Begin Fixed RIght Share -->
              <div class="col-md-3 col-xs-12 meright hidden-xs hidden-sm" style="float:right;position:absolute;">

                <h3 class="text-success text-center shiftme"><span
                    style="font-weight:bolder; font-size:25px;margin-left:-47px;">Instructors</span></h3>
                <div class="">
                  <div class="row">

                    <div class="">
                      <div class="row" style="margin-right: -85px;margin-left: -27px;margin-top:10px;">
                        <span class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 22%;">
                          <img src="https://datascience.suvenconsultants.com/images/testimonials/1per.jpg"
                            class="img-circle fiximg" alt="" width=80 height=80>
                        </span>
                        <div class="row">
                          <span class="text-justify text-primary col-lg-12 col-md-12 col-sm-12 col-xs-12"
                            style="font-size: 13px; margin-left:24px;">

                            <b class="text-info applypads" style="font-weight: bolder;font-size:1.2rem;">Rocky
                              Jagtiani</b> Technology trainer to companies like Accenture , Morgan Stanley, EY. Have
                            trained more than 18000 candidates in 0-3 years work-ex category.<br><br><br><br>

                          </span></div>
                      </div>
                    </div>

                    <div class="">
                      <div class="row" style="margin-right: -85px;margin-left: -27px;">
                        <span class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 22%;">
                          <img src="https://datascience.suvenconsultants.com/images/testimonials/2per.jpg"
                            class="img-circle fiximg" alt="" width=80 height=80>
                        </span>
                        <div class="row">
                          <span class="text-justify text-primary col-lg-12 col-md-12 col-sm-12 col-xs-12"
                            style="font-size:13px; margin-left:24px;">

                            <b class="text-info applypads" style="font-weight: bolder;font-size:1.2rem;">Niraj
                              Sharma</b> Presently Data Analyst at NeoSoft (CMM level 5). An expert in R programming. An
                            active contributor at Kaggle Data Analytics using R competitions.<br><br><br><br>

                          </span></div>
                      </div>
                    </div><br>

                  </div>
                </div>
              </div>
              <!-- End Fixed Right Share -->



            </div>
          </div>
        </span>
      </div>
    </span>
    <!--<span class="col-lg-2 col-md-2" >B-->
    <!--</span>-->
  </span>



  <div class="hidden-lg hidden-md container-fluid">
    <div class="row formainheading">
      <div class="row">
        <div class="col-sm-3">
          <span style="float:left;" class="img-responsive img-fluid">
            <img src="https://datascience.suvenconsultants.com/elearning/images/machinelearn.png" width="135"
              height="130" class="rounded img-fluid float-left" alt="...">
          </span>

        </div>
        <div class="col-sm-9">
          <h1 class="" style="font-weight:bolder;font-size: 26px;margin-top:36px;">Machine Learning <span
              style="color:#3c763d">Beginner</span></h1>

        </div>
      </div>

      <div class="row" style="margin: 0% 2% 0% 2%;">
        <span class="col-sm-12 col-xs-12">

          <span style="font-size: 14px;color:#3c763d;">
            Supervised & Unsupervised ML, ML pipeline, Basic Data Exploration, Train-Test-Split, Encoding Categorical
            data, Feature Scaling, Decision (CART) Trees, Random Forest, Naive Bayes Classification, Principal Component
            Analysis, k-Means Clustering and deploying ML models on FLASK.

            <br>
            <br>
            <span style="font-size:16px"><b>Pre-requisite for this course :</b> You should know <b>Python</b> for
              <b>Data Science</b>. </span>
          </span>

        </span>
      </div>
      <br><br>

    </div>
    <div class="row fortabularcontent">
      <table class="table">
        <thead>
          <tr style="font-size:18px;">
            <th><b>Lesson</b></th>
            <th><b>Notebook</b></th>
            <th><b>Quiz</b></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><b>1.</b>&nbsp;&nbsp;Supervised & Unsupervised ML</td>
            <td><span class="" data-toggle="modal" data-target="#exampleModal">
                <a href="#0" target="">
                  <img width=50 height=50 src="../images/icons/doc.png">
                </a></span></td>
            <td><span class="" data-toggle="modal" data-target="#exampleModal">
                <a href="#0" target="">
                  <img width=47 height=47 src="../images/icons/quiz.png">
                </a></span></td>
          </tr>
          <tr>
            <td><b>2.</b>&nbsp;&nbsp;ML Pipeline</td>
            <td><span class="" data-toggle="modal" data-target="#exampleModal">
                <a href="#0" target="">
                  <img width=50 height=50 src="../images/icons/doc.png">
                </a></span></td>
            <td><span class="" data-toggle="modal" data-target="#exampleModal">
                <a href="#0" target="">
                  <img width=47 height=47 src="../images/icons/quiz.png">
                </a></span></td>
          </tr>
          <tr>
            <td><b>3.</b>&nbsp;&nbsp;Basic Data Exploration</td>
            <td><span class="" data-toggle="modal" data-target="#exampleModal">
                <a href="#0" target="">
                  <img width=50 height=50 src="../images/icons/doc.png">
                </a></span></td>
            <td><span class="" data-toggle="modal" data-target="#exampleModal">
                <a href="#0" target="">
                  <img width=47 height=47 src="../images/icons/quiz.png">
                </a></span></td>
          </tr>
          <!--**********************-->

          <tr>
            <td><b>4.</b>&nbsp;&nbsp;Train Test Split</td>
            <td><span class="" data-toggle="modal" data-target="#exampleModal">
                <a href="#0" target="">
                  <img width=50 height=50 src="../images/icons/doc.png">
                </a></span></td>
            <td><span class="" data-toggle="modal" data-target="#exampleModal">
                <a href="#0" target="">
                  <img width=47 height=47 src="../images/icons/quiz.png">
                </a></span></td>
          </tr>
          <tr>
            <td><b>5.</b>&nbsp;&nbsp;Encoding Categorical data</td>
            <td><span class="" data-toggle="modal" data-target="#exampleModal">
                <a href="#0" target="">
                  <img width=50 height=50 src="../images/icons/doc.png">
                </a></span></td>
            <td><span class="" data-toggle="modal" data-target="#exampleModal">
                <a href="#0" target="">
                  <img width=47 height=47 src="../images/icons/quiz.png">
                </a></span></td>
          </tr>
          <tr>
            <td><b>6.</b>&nbsp;&nbsp;Feature Scaling</td>
            <td><span class="" data-toggle="modal" data-target="#exampleModal">
                <a href="#0" target="">
                  <img width=50 height=50 src="../images/icons/doc.png">
                </a></span></td>
            <td><span class="" data-toggle="modal" data-target="#exampleModal">
                <a href="#0" target="">
                  <img width=47 height=47 src="../images/icons/quiz.png">
                </a></span></td>
          </tr>
          <!--**********************-->

          <tr>
            <td><b>7.</b>&nbsp;&nbsp;Decision (CART) Trees</td>
            <td><span class="" data-toggle="modal" data-target="#exampleModal">
                <a href="#0" target="">
                  <img width=50 height=50 src="../images/icons/doc.png">
                </a></span></td>
            <td><span class="" data-toggle="modal" data-target="#exampleModal">
                <a href="#0" target="">
                  <img width=47 height=47 src="../images/icons/quiz.png">
                </a></span></td>
          </tr>
          <tr>
            <td><b>8.</b>&nbsp;&nbsp;Random Forest</td>
            <td><span class="" data-toggle="modal" data-target="#exampleModal">
                <a href="#0" target="">
                  <img width=50 height=50 src="../images/icons/doc.png">
                </a></span></td>
            <td><span class="" data-toggle="modal" data-target="#exampleModal">
                <a href="#0" target="">
                  <img width=47 height=47 src="../images/icons/quiz.png">
                </a></span></td>
          </tr>
          <tr>
            <td><b>9.</b>&nbsp;&nbsp;Naive Bayes Classification</td>
            <td><span class="" data-toggle="modal" data-target="#exampleModal">
                <a href="#0" target="">
                  <img width=50 height=50 src="../images/icons/doc.png">
                </a></span></td>
            <td><span class="" data-toggle="modal" data-target="#exampleModal">
                <a href="#0" target="">
                  <img width=47 height=47 src="../images/icons/quiz.png">
                </a></span></td>
          </tr>
          <!--**********************-->

          <tr>
            <td><b>10.</b>&nbsp;&nbsp;Principal Component Analysis</td>
            <td><span class="" data-toggle="modal" data-target="#exampleModal">
                <a href="#0" target="">
                  <img width=50 height=50 src="../images/icons/doc.png">
                </a></span></td>
            <td><span class="" data-toggle="modal" data-target="#exampleModal">
                <a href="#0" target="">
                  <img width=47 height=47 src="../images/icons/quiz.png">
                </a></span></td>
          </tr>





          <tr>
            <td><b>11.</b>&nbsp;&nbsp;k-Means Clustering</td>
            <td><span class="" data-toggle="modal" data-target="#exampleModal">
                <a href="#0" target="">
                  <img width=50 height=50 src="../images/icons/doc.png">
                </a></span></td>
            <td><span class="" data-toggle="modal" data-target="#exampleModal">
                <a href="#0" target="">
                  <img width=47 height=47 src="../images/icons/quiz.png">
                </a></span></td>
          </tr>
          <tr>
            <td><b style="color:green;">Bonus topic</b> : K Nearest Neighbors (KNN)
              Classification Algo</td>
            <td><span class="" data-toggle="modal" data-target="#exampleModal">
                <a href="#0" target="">
                  <img width=50 height=50 src="../images/icons/doc.png">
                </a></span></td>
            <td><span class="" data-toggle="modal" data-target="#exampleModal" style="display:none;">
                <a href="#0" target="">
                  <img width=47 height=47 src="../images/icons/quiz.png">
                </a></span></td>
          </tr>


          <tr>
            <td><b>12.</b>&nbsp;&nbsp;Deploying ML models on FLASK</td>
            <td><span class="" data-toggle="modal" data-target="#exampleModal">
                <a href="#0" target="">
                  <img width=50 height=50 src="../images/icons/doc.png">
                </a></span></td>
            <td><span class="" data-toggle="modal" data-target="#exampleModal">
                <a href="#0" target="">
                  <img width=47 height=47 src="../images/icons/quiz.png">
                </a></span></td>
          </tr>

        </tbody>

      </table>
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <!--<div class="modal-header">-->
            <!--  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>-->
            <!--  <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
            <!--    <span aria-hidden="true">&times;</span>-->
            <!--  </button>-->
            <!--</div>-->
            <div class="modal-body">
              <center>
                <p>For Google Colab Notebooks
                  larger screen size is required.<br>
                  Please switch to desktop mode.</p>
              </center>
            </div>
            <div class="modal-footer">
              <center><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></center>
              <!--<button type="button" class="btn btn-primary">Save changes</button>-->
            </div>
          </div>
        </div>
      </div>

    </div>



  </div>




</body>

</html>