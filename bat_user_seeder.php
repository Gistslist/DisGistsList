<?php
require 'bat_config.php';
require 'db_connect_copy.php';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";
$truncstmt=$dbc->prepare('TRUNCATE bat_user');
$truncstmt->execute();
$users = [
	['user_name'=>'batman',
	 'password'=>'batty',
	 'email'=>'batman@batcave.tom'],
	['user_name'=>'tom',
	 'password'=>'batty',
	 'email'=>'tom@batcave.tom']
];

$stmt = $dbc->prepare('INSERT INTO bat_user(user_name, password, email)
                        VALUES (:user_name, :password, :email)');

foreach ($users as $user){
    $stmt->bindValue(':user_name', $user['user_name'], PDO::PARAM_STR);
    $stmt->bindValue(':password', $user['password'], PDO::PARAM_STR);
    $stmt->bindValue(':email', $user['email'], PDO::PARAM_STR);
    
    
    $stmt->execute();
    
    echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}