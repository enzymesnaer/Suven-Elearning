<?php 
session_start();

$paytmMerchantKey ="_22i8jB4ZN4hCtto";

// Create an array having all required parameters for creating checksum.
$MID = "WHnxVm73856087122017";
$ORDERID = "ORD" . rand(10000,999999);
$CUSTID = "CUST".rand(11111,99999);
$INDUSTRY_TYPE_ID = "Retail";
$CHANNEL_ID = "WEB";
$WEBSITE = "WEBSTAGING";
$CALLBACK_URL = 'http://ec2-13-235-42-224.ap-south-1.compute.amazonaws.com/Suven-Elearning/datascience/elearning/payment/paytmresponse.php';
$TXN_AMOUNT = "";
$courseId = 0;
$userid=$_SESSION['uid'];


if(isset($_POST['course_type'])){
	list($courseId, $TXN_AMOUNT) = explode('|',$_POST['course_type']);
	//$TXN_AMOUNT = $_POST['course_type'];
	require_once('paytmfunctions.php');

	require '../dbconnect.php';
    $add_cust_order = "insert into user_course_orders (userid,courseid,orderid) values ($userid,$courseId,'$ORDERID')";
	if(mysqli_query($conn,$add_cust_order)){
		echo "Customer order created ";
		GenerateRedirectPage();
	}else{
		echo mysqli_error($conn);
	}
	
}

?>