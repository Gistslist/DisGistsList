<?php
require_once '../bat_config.php';
require_once '../db_connect_copy.php';
require_once '../Input_copy.php';

$userstmt = $dbc->prepare('SELECT * FROM bat_user'); 
// $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
// $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
$userstmt->execute();
$users = $userstmt->fetchAll(PDO::FETCH_ASSOC);



if (Input::has('first_name')) {
  $query = 'INSERT INTO bat_user(first_name, last_name, user_name, password, email)
            VALUES (:first_name, :last_name, :user_name, :password, :email)';

  $stmt = $dbc->prepare($query);
  $stmt->bindValue(':first_name', Input::get('first_name'), PDO::PARAM_STR);
  $stmt->bindValue(':last_name', Input::get('last_name'), PDO::PARAM_STR);
  $stmt->bindValue(':user_name', Input::get('user_name'), PDO::PARAM_STR);
  $stmt->bindValue(':password', Input::get('password'), PDO::PARAM_STR);
  $stmt->bindValue(':email', Input::get('email'), PDO::PARAM_STR);
  $stmt->execute();
  // echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}
?>

