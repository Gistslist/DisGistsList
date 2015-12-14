<?php

require_once '../bat_config.php';
require_once '../db_connect_copy.php';
require_once '../Input_copy.php';

$_SESSION['loginmessage'] = 'Log In';
$_SESSION['logoutmessage'] = '';
$_SESSION['USERNAME'] = 'batman';


$username = Input::get('login_user_name');
$password = Input::get('login_password');
// var_dump($username);
// var_dump($password); 

if (!empty($_REQUEST) && !isset($_SESSION['LOGGED_IN_USER'])){

	$checkuserstmt = $dbc->prepare("SELECT password FROM bat_user WHERE user_name = '$username'");
	$checkuserstmt->execute();
	$pwcheck = $checkuserstmt->fetchAll(PDO::FETCH_ASSOC);
	// var_dump($pwcheck);
	if ($pwcheck['0']['password'] == $password){
		$_SESSION['LOGGED_IN_USER'] = true;
		$_SESSION['USERNAME'] = $username;
		// return true;
	} else {
		$_SESSION['loginmessage'] = "Login Failed! Please try again";
		// return false;
	}
}


if (isset($_SESSION['LOGGED_IN_USER'])){
	if ($_SESSION['LOGGED_IN_USER']){
		$_SESSION['loginmessage'] = '';
		$_SESSION['logoutmessage'] = 'Log Out';


	} 
} else {
	$_SESSION['loginmessage'] = 'Log In';
	$_SESSION['logoutmessage'] = '';
	$_SESSION['USERNAME'] = 'Batschelet';

	}
// }

	// }
// }


?>
