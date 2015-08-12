<?php
require_once '../bat_config.php';
require_once '../db_connect_copy.php';
require_once '../Input_copy.php';

$limit = 4;
$offset = 0;
$count = $dbc->query('SELECT COUNT(*) FROM bat_user;')->fetchColumn();
$errorMessage = "add an item.";
$numPages = ceil($count / $limit);

if (empty($_GET) || !is_numeric($_GET['page']) || $_GET['page'] < 1) {
  $_GET['page'] = 1;
  $pageID = 1;
  }else {
  $offset = ($_GET['page'] - 1) * $limit;
  $pageID = $_GET['page'];
 }

if($_GET['page'] > $numPages){
  header("Location: ?page={$numPages}");
  exit();
}

$query = ("SELECT * FROM bat_user LIMIT :limit OFFSET :offset");
$stmt = $dbc->prepare($query);

//bind
$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();


$items = $stmt->fetchAll(PDO::FETCH_ASSOC);

if(Input::has('user_name') && Input::has('password') && Input::has('email') ){
  
    $user_name = Input::getString('user_name');
    $password = Input::getString('password');
    $email = Input::get('email');
    

    $formatDate =date("Y-m-d", strtotime($email));

    $insertQuery = "INSERT INTO bat_user (user_name, password, email)
            VALUES (:user_name, :password, :email)";
    $stmt=$dbc->prepare($insertQuery);
    
    

    $stmt->bindValue(':user_name', $user_name, PDO::PARAM_STR);
    $stmt->bindValue(':password', $password, PDO::PARAM_STR);
    $stmt->bindValue(':email', $formatDate, PDO::PARAM_STR);
   
      
      
    
    

      
   
}else{
    $errorMessage = "Please fill out all fields to add a park.";
    $exceptionError = "input user_name";
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>bat stuff</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
  
  <h1 class = "container">bat stuff</h1>
    <table class = "table-striped container">
        <tr>
          <th>user_name</th>
          <th>password</th>
          <th>email</th>
          
          </tr>
      
      <? foreach ($items as $item):?>
          <tr>
            <td><?= $item['user_name']; ?></td>
            <td><?= $item['password']; ?></td>
            <td><?= $item['email']; ?></td>
            
          </tr>
      <? endforeach;?>
    </table> 
  <div class = 'container'>
    <? if ($pageID != 1) : ?>
        <a style="float: left" href="?page=<?= ($pageID - 1) ?>">Previous</a>
      <? endif ?>
    
      <? if ($pageID < $numPages) : ?>
        <a style="float: right" href="?page=<?= ($pageID + 1) ?>">Next</a>
      <? endif ?>

  </div>
    
</body>
</html>