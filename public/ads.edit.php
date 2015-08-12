<?php

//require 'dbconnect.php'
  $LISTID = $_GET['id'];
  $LIST = new LISTT($dbc, $LISTID);

if(!empty($_POST)) {

  $LIST->title = $_POST['title'];
  $LIST->price = $_POST['price'];
  $LIST->dscrp = $_POST['dscrp'];
  $LIST->gener = $_POST['gener'];

  $LIST->save();


}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<div class="container">
        <h1>update LISTING</h1>
        <form role="form" method="POST">
            <div class="form-group">
                <label for="title">Title</label>
                <textarea class="form-control" id="title" name="title"  rows="2" placeholder="Which gadget batman?"></textarea>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <textarea class="form-control" id="price" name="price" rows="2"></textarea>
            </div>
            <div class="form-group">
                <label for="dscrp">Description</label>
                <textarea class="form-control" id="dscrp" name="dscrp" rows="2" placeholder="Descriptive words"></textarea>
            </div>
            <div class="form-group">
                <label for="gener">Generation</label>
                <textarea class="form-control" id="gener" name="gener"  rows="2" placeholder="Circa 19??"></textarea>
            </div>
            <a href="gistlist.php" class="btn btn-default">Cancel</a>
            <button type="submit" class="btn btn-primary">update Listing</button>
        </form>
    </div>
  </body>
</html>
