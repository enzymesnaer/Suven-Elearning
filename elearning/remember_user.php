<?php 
require_once('auth_cookie_session_validation.php');

function is_anonymous(){
	$conn=init_connect();
	if(validateCookies($conn) || isset($_SESSION['loggedinsuccess'])){
		return false;
	}else{
		return true;
	}
}

?>