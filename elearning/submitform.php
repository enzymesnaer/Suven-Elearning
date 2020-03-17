<?php
require_once('auth_cookie_session_validation.php');
require_once('appconstants.php');

// testing only 
if(isset($_POST['validatecookie']))
{
	// test if cookies are validated properly
	$conn=init_connect();
	validateCookies($conn);
}
else if(isset($_POST['frm']) && $_POST['frm']==2){
	
	//echo $_SERVER['REMOTE_ADDR'];
	$conn=init_connect();
	if(authUser($conn,$_POST['email'],$_POST['pass'])){
		session_regenerate_id();
		$_SESSION['loggedinsuccess']=true;
		genCookies($conn);
		echo USERINDEXPAGE;
	}
	else{
		echo null;
	}
}
else if(isset($_POST['frm']) && $_POST['frm']==1){	

	echo "sign up success ";
	$_SESSION["userid"]= $_POST["email"];

	$conn=init_connect();
	if(authAddUser($conn,$_POST['name'],$_POST['email'],$_POST['email'],$_POST['pass']) == TRUE){
		echo "Registered succcessfully";
		genCookies($conn);
	} 
	else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

else{
	clearCookies();
}

//close_connect($conn);

?>