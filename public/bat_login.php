<?php

require_once '../bat_config.php';
require_once '../db_connect_copy.php';
require_once '../Input_copy.php';

$_SESSION['loginmessage'] = 'Log In';
$_SESSION['logoutmessage'] = '';
$_SESSION['USERNAME'] = 'Batschelet';


$username = Input::get('login_user_name');
$password = Input::get('login_password');
// var_dump($username);
// var_dump($password); 

if (!empty($_REQUEST)){

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
}

?>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
		<!---Stylize--->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="/css/main.css">

    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
	<?php include '../views/Navvvy.php';?>
     <?php include '../views/Signal.php';?>
	<h1 align="center" >Login</h1>

	<p><?= $_SESSION['loginmessage'] . $_SESSION['logoutmessage']; ?></p>
	<p>Holy <?= $_SESSION['USERNAME'] ?><p>

	<button type="button" class="btn btn-primary btn-lg center" data-toggle="modal" data-target="#loginModal">
    	Login
    </button>

	<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="loginModalLabel">Please enter your username and password</h4>
          </div>
          <div class="modal-body">
            <form method="POST" action="bat_login.php">
				<label>Username</label>
				<input type="text" name="login_user_name" id="login_user_name"><br>
				<label>Password</label>
				<input type="text" name="login_password" id="login_password"><br>
				<input type="submit">
                <div class="modal-footer">
                	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warning">Submit</button>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>

</body>
</html>
>>>>>>> 676bd36583c574aa38e74a19b5839339fe8beee0
>>>>>>> 5043e1fd35b0e94b16f16af2084853e1c7a8314e
