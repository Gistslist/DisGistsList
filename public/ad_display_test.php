<?php
require_once 'create_form_test.php';
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

  <title></title>
</head>
<body>
  <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  
</button> -->
<? foreach ($items as $item): ?>

<a href="#myModal<?= $item['id'] ?>" role="button" data-toggle="modal">

    <img src="<?= $item['image'] ?>">

</a>

<!-- Modal -->
<div class="modal fade" id="myModal<?= $item['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <div class="modal-title" id="myModalLabel"><img src="<?= $item['image'] ?>" width="100%"></div>
      </div>
      <div class="modal-body">
        <h3><?= $item['item_name'] ?></h3>
        <p><?= $item['description'] ?></p>
        

      </div>
      <div class="modal-footer">
         <p> Price: $<?= $item['price'] ?> </p>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Buy</button>

      </div>
    </div>
  </div>
</div>

<? endforeach ?>
</body>
</html>