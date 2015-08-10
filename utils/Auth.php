<?php
require_once "Log.php";
require_once "Input.php";

class Auth
{
	public static $password = '';
	public static function attempt($username, $passwords)
	{
		$newlog = new Log;

		if (!empty($_REQUEST)){
			if ($username == "guest" && password_verify($passwords, self::$password)){
				$_SESSION['LOGGED_IN_USER'] = true;
				$_SESSION['USERNAME'] = $username;
				$newlog->info($username . ' successfully logged in');
				return true;
			} else {
				$_SESSION['loginmessage'] = "Login Failed! Please try again";
				$newlog->error($username . ' failed to log in');
				return false;
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

	public static function user()
	{
		if (isset($_SESSION['USERNAME'])){
			return $_SESSION['USERNAME'];
		} else {
			$_SESSION['USERNAME'] = "";
		}
	}

	public static function logout()
	{
		session_destroy();

		header(" ");
		exit();
	}
}
?>
