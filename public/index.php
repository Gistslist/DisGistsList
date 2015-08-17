<?php
require_once "ad.show.php";
require_once "users.create.php";
require_once "create_form_test.php";
require_once "bat_login.php";

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!---Stylize--->
     <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="/css/main.css">
     <link rel="stylesheet" type="text/css" href="/css/test.css">

     <!---Scriptkiddies--->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <script src="/js/test.js"></script>
     <script src="/js/main.js"></script>
 		 <script src="/js/modernizr.custom.js"></script>

   </head>

   <body>
     <?php include '../views/Navvvy.php';?>
     <?php include '../views/Signal.php';?>


     <section id="browse" class="container content-section">
        <div id="carousel">
          <figure id="spinner">

                <?php foreach ($items as $item): ?>
                    <!-- <div role="button" data-toggle="modal" data-target="#myModal<?= $item['id'] ?>"> -->
                        <img src="<?= $item['image'] ?>" role="button" data-toggle="modal" data-target="#myModal<?= $item['id'] ?>">
                <? endforeach ?>

          </figure>
        </div>
          <span style=float:left class=ss-icon onclick="galleryspin('-')">&lt;</span>
          <span style=float:right class=ss-icon onclick="galleryspin('')">&gt;</span>
    </section>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
   </body>
 </html>
