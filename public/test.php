<?php

require_once 'ad.show.php';


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
    	
    
</body>
</html>





      
    
      

    




      
    
      

    
