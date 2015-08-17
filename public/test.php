<?php

require_once 'ad.show.php';


?>
<!DOCTYPE html>
<html>
<head>
  <title>test</title>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<!-- bxSlider CSS file -->
	<link href="/css/jquery.bxslider.css" rel="stylesheet" />
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="/js/jquery.bxslider.min.js"></script>
	<script src="/js/main.js"></script>
  

</head>
<body>
 	<ul class="bxslider">
            <?php foreach ($items as $item): ?>
                <li><img src="<?= $item['image'] ?>" /></li>
            <? endforeach ?>
    </ul>

    <ul class="bxslider">
    <?php foreach ($items as $item): ?>
        <li><a href="#imageModal<?= $item['id'] ?>" data-target="#imageModal" data-toggle="modal"><img src="<?= $item['image'] ?>"/></li>
    <? endforeach ?>
    </ul>


<? foreach ($items as $item): ?>

<!-- Modal -->
<div class="modal fade" id="imageModal<?= $item['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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





      
    
      

    




      
    
      

    
