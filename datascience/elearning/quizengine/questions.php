<?php
session_start();
include('../dbconnect.php');

$duration = '';

$sql = "select * from timer";
$result = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_array($result))
{
	$duration = $row['duration'];
}
$_SESSION['duration'] = $duration;
$_SESSION['start_time'] = date("Y-m-d H:i:s");

$end_time = date('Y-m-d H:i:s', strtotime('+'.$_SESSION["duration"].'minutes',strtotime($_SESSION["start_time"])));

$_SESSION['end_time'] = $end_time;

?>


<?php 
require '../dbconnect.php';

$topicid='';
$courseid='';
$date_submit = date('d-m-Y');


 if($_POST['userid'] != null){

     $name=$_POST['name'];
     $uid=$_POST['userid'];
     $topicid=$_POST['topicid'];
     $courseid=$_POST['courseid'];
     
     $check_exist = "Select * from quizusers_table where uid = $uid and topicid = $topicid and courseid = $courseid";
     $execute = mysqli_query($conn,$check_exist);
     $row_exist = mysqli_num_rows($execute);
     if($row_exist > 0){
         header('location: index.php?q=error_exist_user_quiz&uid='.$uid.'&topicid='.$topicid.'&courseid='.$courseid.'');
     }
     else{
         mysqli_query($conn,"INSERT INTO quizusers_table (uid, name, score, topicid, courseid, date_submit) VALUES ('$uid','$name', 0, '$topicid', '$courseid', '$date_submit')") or die(mysql_error());
            $_SESSION['name']= $name;
            $_SESSION['uid'] = $uid;
            $_SESSION['topicid'] = $topicid;
            $_SESSION['courseid'] = $courseid;
                                    //$_SESSION['id'] = mysqli_insert_id();
     }
 }else{
     header("location: ../index.php");
 }
   
$topicid=$_POST['topicid'];
$courseid = $_SESSION['courseid'];
$username = $_SESSION['name'];


if(!empty($_SESSION['name'])){
    //include('header.php');
?>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google-site-verification" content="PI-ZP6ua4nWrRzz9ZBRHSIioHv3CgSlf9FWicBdYJ5s" />
    <title>  Title Change me </title>
  <!-- <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/internship.css">
  <link rel="stylesheet" href="../css/font-awesome.css"> -->

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



  
<!-- SCRIPTS  Start-->
<!-- <script src="../js/jquery-2.2.4.js"></script>
<script src="jquery.validate.min.js"></script>
<script src="../js/bootstrap.min.js" ></script>
<script src="../js/internship.js"></script> -->

<script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js"></script>



<!-- <script type="text/javascript">
document.onkeydown = function (e) {
  var key = e.charCode || e.keyCode;
  if (key == 13) { 
    // enter key do nothing
  } else {
    e.preventDefault();
  }	     
}
</script>
<script type="text/javascript">
  $(document).keydown(function(e){
  var key = e.charCode || e.keyCode;
  if (key == 13) { 
    // enter key do nothing
  } else {
    e.preventDefault();
  }	
});
</script> -->

<!-- SCRIPTS END -->

<style>
.ai_div{
    border: 1px solid turquoise;
    padding: 10px;
    margin: 10px;
    border-radius: 5px;
    min-height: 300px;
    max-height: 100%;
}
.address_modal{
	height: 200px;
}
.address_modal p{
	font-size: 13px;
}
.training{
    background-color:#fff;
    border: 1px solid silver;
    box-shadow: 0px 0px 10px silver;
    border-radius: 10px;
    padding-top:10px;
    padding-left:10px;
    padding-right:10px;
    padding-bottom:-10px;
    position: fixed;
    font-size:13px;
    bottom: 10px;
    right: 10px;
    z-index: 999;
    line-height:10px;
}
.inset {
  margin-left:12px;     
  margin-top:10px;    
  width: 40px;
  height: 40px;
  border-radius: 50%;
  box-shadow:
    inset 0 0 0 2px rgba(255,255,255,0.6), 
    0 1px 1px rgba(0,0,0,0.1);
  background-color: transparent !important;
  z-index: 999;
}

.inset img {
  border-radius: inherit;
  width: inherit;
  height: inherit;
  display: block;
  position: relative;
  z-index: 998;
}
.well{
       background:linear-gradient(90deg,#70d467 0,#6fbbfa);
       color:#fff;
       font-size:25px !important;
}
.jumbotron{
        background-color:#fff !important;
        box-shadow: 0px 0px 15px silver;
}
body{
    -webkit-user-select: none;
    -moz-user-select: -moz-none;
    -ms-user-select: none;
      user-select: none;
} 
label {
    font-weight: normal !important;
}
#pageloader
{
  background: linear-gradient(90deg,#70d467 0,#6fbbfa);
  /* background: rgba(0,255,0,0.3); */
  display: none;
  height: 100%;
  position: fixed;
  width: 100%;
  z-index: 9999;
}

#pageloader img
{
  left: 50%;
  margin-left: -32px;
  margin-top: -32px;
  position: absolute;
  top: 50%;
}
</style> 
<script>
    $(document).ready(function(){
        $("#login").on("submit", function(){
            $("#pageloader").fadeIn();
        });//submit
    });//document ready
</script>
<script type='text/javascript'>
  document.onkeydown = function (e) {
    e.preventDefault();		
  }
</script>
</head>
<body>
    <div id="pageloader">
        <img src="loading.gif" alt="processing..." />
    </div>
	<nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <!-- <a class="navbar-brand"><img src="https://suvenconsultants.com/mainpagefiles/images/sctpl_logo.png" style="display:inline;"> -->
              <span>Suven Consultants & Technology Pvt. Ltd.</span></a>
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
              </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav navbar-right">
                <li><a id="#" href="https://internship.suvenconsultants.com/faq.php" target="_blank" class="head_panel" style="font-size:15px">FAQ</a></li>
        		<?php
              
                    if(isset($_SESSION['uid'])){
                    echo '';
                    }else{
                       echo '<li><button class="btn btn-success" data-toggle="modal" data-target="#authenticationModal" style="margin-top:15px;">Log In</button></li>'; 
                    }
                ?>
        		<?php
        		if(isset($_SESSION['uid'])){
        		    echo '<li class="dropdown">
                            <div class="inset" class="dropdown-toggle" data-toggle="dropdown">';
                            if($_SESSION['profile'] == '' || $_SESSION['profile'] == null){
                                echo '<img src="../images/users/default-user.png" 
                                class="img-responsive" data-toggle="tooltip" title="'.$_SESSION['name'].'&#010;'.$_SESSION['email'].'" style="cursor:pointer;">';
                            }else{
                                echo '<img src="../images/users/'.$_SESSION["profile"].'" 
                                class="img-responsive" data-toggle="tooltip" title="'.$_SESSION['name'].'&#010;'.$_SESSION['email'].'" style="cursor:pointer;">';
                            }    
                                
                        echo '</div></li>';    
        		}    
                ?>
              </ul>
            </div>
          </div>
        </nav>
<br><br>

		
<script>
		setInterval(function()
			{
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.open("GET","response.php",false);
				xmlhttp.send(null);
				//document.getElementById("response").innerHTML = xmlhttp.responseText;
				
				if(xmlhttp.responseText == "Time Over"){
					document.login.submit();
				}else{
					document.getElementById("response").innerHTML = xmlhttp.responseText;
				}
			},1000);
</script>	

		<div class="well">
            <h3 class="text-center"><strong>
                <?php 
                // echo "AI Engine Assessment of $project_name Project under $category_name Domain for $username";
                ?>
            </strong></h3>
        </div>
        <br>	
        <div class="container">
		<div class="jumbotron">
	    <div style="float:right;"><b>Time Left:</b> <span id="response"></span></div>
		
		<div class="container question">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<form class="form-horizontal" role="form" id='login' method="post" action="#" name="login">
          <?php 
          include('../dbconnect.php');
          mysqli_query ($conn,"set character_set_results='utf8'");

					$res = mysqli_query($conn,"SELECT * FROM questions_table WHERE topicid='$topicid' and courseid='$courseid' ORDER BY RAND() limit 2") or die(mysql_error());
                    $rows = mysqli_num_rows($res);
					$i=1;
                while($result=mysqli_fetch_array($res)){?>

                    <?php if($i==1){?>         
                    <div id='question<?php echo $i;?>' class='cont'>

                    <p class='questions' id="qname<?php echo $i;?>"> <?php echo $i?>.<?php echo $result['questiondefn'];?></p>
                    <label>
                    <input type="radio" value="1" id='radio1_<?php echo $result['questionid'];?>' name='<?php echo $result['questionid'];?>'/> <?php echo $result['answer1'];?>
                    </label>
                    <br/>
                    <label>
                    <input type="radio" value="2" id='radio1_<?php echo $result['questionid'];?>' name='<?php echo $result['questionid'];?>'/> <?php echo $result['answer2'];?>
                    </label>
                    <br/>
                    <label>
                    <input type="radio" value="3" id='radio1_<?php echo $result['questionid'];?>' name='<?php echo $result['questionid'];?>'/> <?php echo $result['answer3'];?>
                    </label>
                    <br/>

                    <label>
                    <input type="radio" checked='checked' style='display:none' value="5" id='radio1_<?php echo $result['questionid'];?>' name='<?php echo $result['questionid'];?>'/>                                                                      
                    </label>
                    <br/>
                    <button id='next<?php echo $i;?>' class='next btn btn-success' type='button'>Next</button>
                    </div>     

                     <?php }elseif($i<1 || $i<$rows){?>

                    <div id='question<?php echo $i;?>' class='cont'>
                    <p class='questions' id="qname<?php echo $i;?>"><?php echo $i?>.<?php echo $result['questiondefn'];?></p>
                    
                    <label>
                    <input type="radio" value="1" id='radio1_<?php echo $result['questionid'];?>' name='<?php echo $result['questionid'];?>'/> <?php echo $result['answer1'];?>
                    </label>
                    <br/>
                    <label>
                    <input type="radio" value="2" id='radio1_<?php echo $result['questionid'];?>' name='<?php echo $result['questionid'];?>'/> <?php echo $result['answer2'];?>
                    </label>
                    <br/>
                    <label>
                    <input type="radio" value="3" id='radio1_<?php echo $result['questionid'];?>' name='<?php echo $result['questionid'];?>'/> <?php echo $result['answer3'];?>
                    </label>
                    <br/>

                    <label>
                    <input type="radio" checked='checked' style='display:none' value="5" id='radio1_<?php echo $result['questionid'];?>' name='<?php echo $result['questionid'];?>'/>                                                                      
                    </label>
                    <br/>
                    <button id='pre<?php echo $i;?>' class='previous btn btn-success' type='button'>Previous</button>                    
                    <button id='next<?php echo $i;?>' class='next btn btn-success' type='button' >Next</button>
                    </div>

                   <?php }elseif($i==$rows){?>
                    <div id='question<?php echo $i;?>' class='cont'>
                    <p class='questions' id="qname<?php echo $i;?>"><?php echo $i?>.<?php echo $result['questiondefn'];?></p>
                    <label>
                    <input type="radio" value="1" id='radio1_<?php echo $result['questionid']; ?>' name='<?php echo $result['questionid']; ?>'/> <?php echo $result['answer1'];?>
                    </label>
                    <br/>
                    <label>
                    <input type="radio" value="2" id='radio1_<?php echo $result['questionid']; ?>' name='<?php echo $result['questionid']; ?>'/> <?php echo $result['answer2'];?>
                    </label>
                    <br/>
                    <label>
                    <input type="radio" value="3" id='radio1_<?php echo $result['questionid']; ?>' name='<?php echo $result['questionid']; ?>'/> <?php echo $result['answer3'];?>
                    </label>
                    <br/>
                    <label>
                    <input type="radio" checked='checked' style='display:none' value="5" id='radio1_<?php echo $result['questionid'];?>' name='<?php echo $result['questionid'];?>'/>                                                                      
                    </label>
                    <br/>
                    <button id='pre<?php echo $i;?>' class='previous btn btn-success' type='button'>Previous</button>                    
                    <button id='next<?php echo $i;?>' class='next btn btn-success' type='submit'>Finish</button>
                    </div>
					<?php } $i++;} ?>

				</form>
			</div>
		</div>
		<hr>
            <h3 class="hidden-sm hidden-xs text-center"><span class="label label-info ">Note : Do not refresh this web page during the test. Else it would give Erratic output.</span></h3>
            <p class="hidden-lg hidden-md text-center" style="font-size:13px;"><span class="label label-info ">Note : Do not refresh this web page during the test.<br><br> Else it would give Erratic output.</span></h3>
        </div>
    </div>
       

<?php
require("../dbconnect.php");


if(isset($_POST[1])){ 
   $keys=array_keys($_POST);
   $order=join(",",$keys);


   $response = mysqli_query($conn,"SELECT questionid, corranswer FROM questions_table WHERE questionid IN($order) ORDER BY FIELD(questionid,$order)")   
   or die(mysql_error());
   $right_answer=0;
   $wrong_answer=0;
   $unanswered=0;
   while($result=mysqli_fetch_array($response)){
       if($result['answer']==$_POST[$result['questionid']]){
               $right_answer++;
           }else if($_POST[$result['questionid']]==5){
               $unanswered++;
           }
           else{
               $wrong_answer++;
           }
   }

   echo "right_answer : ". $right_answer."<br>";
   echo "wrong_answer : ". $wrong_answer."<br>";
   echo "unanswered : ". $unanswered."<br>";
}
?>
		<script>
		
		$('.cont').addClass('hide');
		count=$('.questions').length;
		 $('#question'+1).removeClass('hide');

		 $(document).on('click','.next',function(){
		     element=$(this).attr('id');
		     last = parseInt(element.substr(element.length - 1));
		     nex=last+1;
		     $('#question'+last).addClass('hide');

		     $('#question'+nex).removeClass('hide');
		 });

		 $(document).on('click','.previous',function(){
             element=$(this).attr('id');
             if(element == 'pre10')
             {
                 last = parseInt(element.substr(element.length - 2));
                 pre=last-1;
                 $('#question'+last).addClass('hide');
    
                 $('#question'+pre).removeClass('hide');                 
             }else{
                 last = parseInt(element.substr(element.length - 1));
                 pre=last-1;
                 $('#question'+last).addClass('hide');
    
                 $('#question'+pre).removeClass('hide');   
             }

         });
		
		</script>
		<script type='text/javascript'>
  // document.onkeydown = function (e) {
  //   e.preventDefault();		
  // }
</script>
	</body>
</html>
<?php }else{

//  header( 'Location: index.php' ) ;

}
?>