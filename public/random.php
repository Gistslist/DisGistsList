<?php
require_once '../bat_config.php';
require_once '../db_connect_copy.php';
require_once '../Input_copy.php';

$limit = 4;
$offset = 0;
$count = $dbc->query('SELECT COUNT(*) FROM ad_list;')->fetchColumn();
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

$query = ("SELECT * FROM ad_list LIMIT :limit OFFSET :offset");
$stmt = $dbc->prepare($query);

//bind
$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();


$items = $stmt->fetchAll(PDO::FETCH_ASSOC);

if(Input::has('item_name') && Input::has('price') && Input::has('description') 
   && Input::has('used_against') && Input::has('bat_condition') && Input::has('generation') && Input::has('image')){
  
    $item_name = Input::getString('item_name');
    $price = Input::getString('price');
    $description = Input::get('description');
    $used_against = Input::getNumber('used_against');
    $bat_condition = Input::getString('bat_condition');
    $generation = Input::getString('generation');
    $image = Input::getString('image');

    $formatDate =date("Y-m-d", strtotime($description));

    $insertQuery = "INSERT INTO ad_list (item_name, price, description, used_against, bat_condition, generation, image)
            VALUES (:item_name, :price, :description, :used_against, :bat_condition, :generation, :image)";
    $stmt=$dbc->prepare($insertQuery);
    
    

    $stmt->bindValue(':item_name', $item_name, PDO::PARAM_STR);
    $stmt->bindValue(':price', $price, PDO::PARAM_STR);
    $stmt->bindValue(':description', $formatDate, PDO::PARAM_STR);
    $stmt->bindValue(':used_against', $used_against, PDO::PARAM_STR);
    $stmt->bindValue(':bat_condition', $bat_condition, PDO::PARAM_STR);
    $stmt->bindValue(':generation', $generation, PDO::PARAM_STR);
    $stmt->bindValue(':image', $image, PDO::PARAM_STR);      
    $stmt->execute();
      
      
    
    

      
   
}else{
    $errorMessage = "Please fill out all fields to add a park.";
    $exceptionError = "input item_name";
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
          <th>item_name</th>
          <th>price</th>
          <th>description</th>
          <th>used against</th>
          <th>bat condition</th>
          <th>generation</th>
          <th>image</th>
          </tr>
      
      <? foreach ($items as $item):?>
          <tr>
            <td><?= $item['item_name']; ?></td>
            <td><?= $item['price']; ?></td>
            <td><?= $item['description']; ?></td>
            <td><?= $item['used_against']; ?></td>
            <td><?= $item['bat_condition']; ?></td>
            <td><?= $item['generation']; ?></td>
            <td><img src="<?= $item['image']; ?>"></td>
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





      
    
      

    