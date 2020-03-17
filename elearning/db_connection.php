<?php

require_once('dbconfig.php');

class DbConnection
{
	private static $connection;
	
	function __construct(){
	 $dbhost = DB_HOST;
	 $dbuser = DB_USER;
	 $dbpass = "";
	 $db = DATABASE;
	 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) 
			 or
			 die("Connect failed: %s\n". $conn -> error);
	 self::$connection = $conn;
	 }
	 
 
 	function getConnection(){
		return self::$connection;
	}

	function insert($sql){		
		return self::$connection->multi_query($sql);
	} 

	function addUser($name,$uname,$email,$pass){

		// escaping special chars to avoid SQL injection
		$fullname = self::$connection->real_escape_string($name);
		$username = self::$connection->real_escape_string($uname);
		$emailid = self::$connection->real_escape_string($email);
		$password = self::$connection->real_escape_string($pass);

		$username = strtolower($username);
		$fullname = strtolower($fullname);
		$emailid = strtolower($emailid);
		
		$sql = "INSERT INTO ".TABLE_USER."  
		(fullname,userName,email,pass) 
		VALUES ('$fullname','$username','$emailid','$password')"; 
		return self::$connection->multi_query($sql);
	}

	function validateUser($email,$pass){
		
		$username = self::$connection->real_escape_string($email);
		$password = self::$connection->real_escape_string($pass);
		
		$username = strtolower($username);

		$sql="Select pass from ".TABLE_USER." Where username='$username'";
		if ($result = self::$connection -> query($sql)) {
			if(password_verify($password,$result->fetch_row()[0])){
				return true;
			}else{
				return false;
			}
		}
	}	
	
	function getUserSecretKey($userid){
		$username = self::$connection->real_escape_string($userid);		
		$username = strtolower($username);

		$sql="Select secret_key from ".TABLE_TOKEN." Where userid='$username'";
		if ($result = self::$connection -> query($sql)) {
			return $result->fetch_row()[0]; 
		}
	}

	function setUserSecretKey($userid,$secret){
		$username = self::$connection->real_escape_string($userid);		
		$username = strtolower($username);
		
		$sql = "INSERT INTO ".TABLE_TOKEN."  
		(userid,secret_key) 
		VALUES ('$username','$secret')
		ON DUPLICATE KEY UPDATE 
		secret_key=$secret"; 
		return self::$connection->multi_query($sql);		
	}
	
	function CloseCon(){
	 self::$connection -> close();
	 }
}  
?>