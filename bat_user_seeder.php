<?php
require 'bat_config.php';
require 'db_connect_copy.php';


$truncstmt=$dbc->prepare('TRUNCATE bat_user');
$truncstmt->execute();
$users = [
	['first_name'=>'Bruce',
	 'last_name'=>'Wayne',
	 'user_name'=>'batman',
	 'password'=>'batty',
	 'email'=>'batman@batcave.tom']
];

$stmt = $dbc->prepare('INSERT INTO bat_user(first_name, last_name, user_name, password, email)
                        VALUES (:first_name, :last_name, :user_name, :password, :email)');

foreach ($users as $user){
	$stmt->bindValue(':first_name', $user['first_name'], PDO::PARAM_STR);
	$stmt->bindValue(':last_name', $user['last_name'], PDO::PARAM_STR);
    $stmt->bindValue(':user_name', $user['user_name'], PDO::PARAM_STR);
    $stmt->bindValue(':password', $user['password'], PDO::PARAM_STR);
    $stmt->bindValue(':email', $user['email'], PDO::PARAM_STR);
    
    
    $stmt->execute();
    
    echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}