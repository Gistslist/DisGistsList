<?php
session_start();

require_once '../bat_config.php';
require_once '../db_connect_copy.php';
require_once "Input_copy.php";

class Auth
{

	public static function attempt($username, $password)
	{ 
		
		if (!empty($_REQUEST)){ 
			
			$checkuserstmt = $dbc->prepare("SELECT password FROM bat_user WHERE user_name = '$username'"); 
			$checkuserstmt->execute();
			$pwcheck = $checkuserstmt->fetchAll(PDO::FETCH_ASSOC);
			if (password_verify($pwcheck[0]['password'], $password)){
				$_SESSION['LOGGED_IN_USER'] = true;
				$_SESSION['USERNAME'] = $username; 
				// return true; 
			} else {
				$_SESSION['loginmessage'] = "Login Failed! Please try again";
				// return false; 
			}
		}
	}

	public static function check()
	{
		if (isset($_SESSION['LOGGED_IN_USER'])){
			return true; 
		} else {
			return false;
		}
	}

	public static function usercheck()
	{
		if (isset($_SESSION['USERNAME'])){
			return $_SESSION['USERNAME'];
		} else {
			$_SESSION['USERNAME'] = "Batschelet";
		}
	}

	public static function passwordcheck()
	{

	}

	public static function logout()
	{
		session_destroy();
		
		header("Location: http://gistslist.dev/htmltest2.php");
		exit();
	}
}

?>