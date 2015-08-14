<?php

require '../bat_config.php';
require '../db_connect_copy.php';

if(!empty($_POST)) {

  $query = 'INSERT INTO ad_list(item_name, price, description, used_against, bat_condition, generation, image)
                        VALUES(:item_name, :price, :description, :used_against, :bat_condition, :generation, :image)';

  $ad_list = new ad_list($dbc);
  $ad_list->item_name = $_POST['item_name'];
  $ad_list->price = $_POST['price'];
  $ad_list->description = $_POST['description'];
  $ad_list->used_against = $_POST['used_against'];
  $ad_list->bat_condition = $_POST['bat_condition'];
  $ad_list->generation = $_POST['generation'];
  $ad_list->image = $_POST['image'];
  $ad_list->save();
}

?>
<!DOCTYPE html>
<html>
  <head>
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
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Add Bat Item</button>

<!-- Modal -->
<div class="modal fade" id="myModal" data-target="#myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Bat Item</h4>
      </div>
      <div class="modal-body">
      <div class="container">
        <form method="POST">
            <div class="form-group">
                <label for="item_name"></label>
                <input type="text" id="item_name" name="item_name" placeholder="Item"></input>
            </div>

            <div class="form-group">
                <label for="price"></label>
                <input type="text" id="price" name="price" placeholder="Price"></input>
            </div>

            <div class="form-group">
                <label for="description"></label>
                <input type="text" id="description" name="description" placeholder="Description"></input>
            </div>
            <div class="form-group">
                <label for="used_against"></label>
                <input type="text" id="used_against" name="used_against" placeholder="Used against"></input>
            </div>

            <div class="form-group">
                <label for="bat_condition"></label>
                <input type="text" id="bat_condition" name="bat_condition" placeholder="Bat condition"></input>
            </div>

            <div class="form-group">
                <label for="generation"></label>
                <input type="text" id="generation" name="generation" placeholder="Generation"></input>
            </div>

            <a href="gistlist.dev/htmltest.htm" class="btn btn-default">Cancel</a>
            <button type="submit" class="btn btn-primary">Holy broke ass Batman</button>
            <button type="submit" class="userCreate btn-submit btn-default">Submit</button>
        </form>
    </div>
    </div>
  </body>
</html>
