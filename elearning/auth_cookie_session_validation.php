<?php 
if(!isset($_SESSION)) { session_start(); }
require_once('appconstants.php');
require_once('db_connection.php');

function init_connect(){
	return new DbConnection();
}

function close_connect($conn){
	$conn->CloseCon();
}

function authUser($conn,$userid,$pass){
	$password = password_hash($pass, PASSWORD_DEFAULT);
	return $conn->validateUser($userid,$pass);
}

function authAddUser($conn,$name,$email,$userid,$pass){
	$password = password_hash($pass, PASSWORD_DEFAULT);		
	return $conn->addUser($name,$email,$userid,$password);	
}

function genCookies($conn){
	
	$time=time();
	$secret=mt_rand();
	$userId=$_SESSION['userid'];
	
	$cookie_value = $time.'|'.genAuthSignature($userId,$time,$secret).'|'.$userId;	
	$conn->setUserSecretKey($userId,$secret);
	
	$cookie_expiration_time = time() + COOKIEEXPIRY;	
	setcookie( USERCOOKIE, $cookie_value, time() + COOKIEEXPIRY, '/');	
	//setcookie( 'UserName', 'pankaj', 0, '/elearning', 'localhost', isset($_SERVER["HTTPS"]), true);	
}

function validateCookies($conn){
	if(!isset($_COOKIE[USERCOOKIE])){
		echo "No user cookie found";
		return false;
	}else {
		list($time, $signature,$userId) = explode('|',$_COOKIE[USERCOOKIE]);
		$secret = $conn->getUserSecretKey($userId);
		if((time()-$time)>COOKIEEXPIRY){
			echo "Cookie Expired";
			return false;
		}else if (genAuthSignature($userId,$time,$secret)!== $signature){
			echo "Not a Valid Cookie";
			return false;
		}else{
			echo "Cookie validated successfully";
			return true;			
		} 
	}
}

function clearCookies(){
	setcookie( USERCOOKIE, "", time()-30, '/');		
}

function genAuthSignature($userId,$time,$secret) {

	$dataToSign =
	   $userId . "\n" .
	   $time . "\n" .
	   $_SERVER['HTTP_USER_AGENT'] . "\n" .
	   $_SERVER['REMOTE_ADDR'];

	return hash_hmac('SHA1',$dataToSign,$secret);
}

?>