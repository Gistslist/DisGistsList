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

if(Input::has('item_name')){
    if($_FILES) {
        $uploads_directory = 'img/uploads/';
        $filename = $uploads_directory . basename($_FILES['image']['name']);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $filename)) {
            echo '<p>The file '. basename( $_FILES['image']['name']). ' has been uploaded.</p>';
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
  
    $item_name = Input::getString('item_name');
    $price = Input::get('price');
    $used_against = Input::getString('used_against');
    $bat_condition = Input::getString('bat_condition');
    $generation = Input::get('generation');
    $description = Input::getString('description');
    

   

    $insertQuery = "INSERT INTO ad_list (item_name, price, description, used_against, bat_condition, generation, image)
            VALUES (:item_name, :price, :description, :used_against, :bat_condition, :generation, :image)";
    $stmt=$dbc->prepare($insertQuery);
    
    

    $stmt->bindValue(':item_name', $item_name, PDO::PARAM_STR);
    $stmt->bindValue(':price', $price, PDO::PARAM_STR);
    $stmt->bindValue(':used_against', $used_against, PDO::PARAM_STR);
    $stmt->bindValue(':bat_condition', $bat_condition, PDO::PARAM_STR);
    $stmt->bindValue(':generation', $generation, PDO::PARAM_STR);
    $stmt->bindValue(':description', $description, PDO::PARAM_STR);
    $stmt->bindValue(':image', $filename, PDO::PARAM_STR);      
    $stmt->execute();
      
      
    
    

      
   
}else{
    $errorMessage = "Please fill out all fields to add an item.";
    $exceptionError = "input item_name";
}

}
?>
<!DOCTYPE html>
<html>
<head>
  <title>bat stuff</title>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>
<body>
  
  <h1 class = "container">bat stuff</h1>
    <table class = "table-striped container">
        <tr>
          <th>item_name</th>
          <th>price</th>
          <th>used against</th>
          <th>bat condition</th>
          <th>generation</th>
          <th>description</th>
          <th>image</th>
          </tr>
      
      <? foreach ($items as $item):?>
          <tr>
            <td><?= $item['item_name']; ?></td>
            <td><?= $item['price']; ?></td>
            <td><?= $item['used_against']; ?></td>
            <td><?= $item['bat_condition']; ?></td>
            <td><?= $item['generation']; ?></td>
            <td><?= $item['description']; ?></td>
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
  <div class='container'>
       <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Creat An Ad!
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Create Ad</h4>
      </div>
      <div class="modal-body">
        <form method="POST" action="random.php" enctype="multipart/form-data">
              <fieldset>
              <div class="adCreate form-group">
                  <label for="item_name"></label>
                  <input type="text" name="item_name" class="form-control" id="item_name" placeholder="Item Name">
              </div>
              <div class="adCreate form-group">
                  <label for="price"></label>
                  <input type="number" name="price" class="form-control" id="price" placeholder="Price">
              </div>
              <div class="adCreate form-group">
                  <label for="used_against"></label>
                  <input type="text" name="used_against" class="form-control" id="used_against" placeholder="Used Against">
              </div>
              <div class="adCreate form-group">
                  <label for="bat_condition"></label>
                  <input type="text" name="bat_condition" class="form-control" id="bat_condition" placeholder="Condition">
              </div>
              <div class="adCreate form-group">
                  <label for="generation"></label>
                  <input type="text" name="generation" class="form-control" id="generation" placeholder="Generation">
              </div>
              <div class="adCreate form-group">
                  <label for="image">File input</label>
                  <input type="file" name="image" id="image">
              </div>
              <div>
                <label for="description"></label>
                  <textarea    type="text" id="description" name="description" placeholder="description" rows="5" cols="40"
                  autofocus></textarea>
              </div>
              <button type="submit" class="adCreate btn-submit btn-default">Submit</button>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    
</body>
</html>





      
    
      

    