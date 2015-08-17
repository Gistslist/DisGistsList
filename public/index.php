<?php
//session_start();
require_once "ad.show.php";
require_once "users.create.php";
require_once "create_form_test.php";

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

     <!---Scriptkiddies--->
     <script src="/js/test.js"></script>
     <script src="/js/main.js"></script>
 		 <script src="/js/modernizr.custom.js"></script>
     <script>var angle = 0;
     function galleryspin(sign) {
     spinner = document.querySelector("#spinner");
     if (!sign) { angle = angle + 45; } else { angle = angle - 45; }
     spinner.setAttribute("style","-webkit-transform: rotateY("+ angle +"deg); -moz-transform: rotateY("+ angle +"deg); transform: rotateY("+ angle +"deg);");
     }</script>
   </head>

   <body>
     <?php include '../views/Navvvy.php';?>
     <?php include '../views/Signal.php';?>

     <section id="browse" class="container content-section">
        <div id="carousel">
          <figure id="spinner">
          <?php foreach ($items as $item): ?>
            <img src="<?= $item['image'] ?>">
          <? endforeach ?>
          <img src=//demosthenes.info/assets/images/wanaka-tree.jpg alt="">
          <img src=//demosthenes.info/assets/images/still-lake.jpg alt="">
          <img src=//demosthenes.info/assets/images/pink-milford-sound.jpg alt="">
          <img src=//demosthenes.info/assets/images/paradise.jpg alt="">
          <img src=//demosthenes.info/assets/images/morekai.jpg alt="">
          <img src=//demosthenes.info/assets/images/milky-blue-lagoon.jpg alt="">
          <img src=//demosthenes.info/assets/images/lake-tekapo.jpg alt="">
          <img src=//demosthenes.info/assets/images/milford-sound.jpg alt="">
          </figure>
        </div>
          <span style=float:left class=ss-icon onclick="galleryspin('-')">&lt;</span>
          <span style=float:right class=ss-icon onclick="galleryspin('')">&gt;</span>
    </section>

    <div class="main">
      <ul id="og-grid" class="og-grid">
        <li>
          <a href="" data-largesrc="images/1.jpg" data-title="Mars" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
            <img src="/img/Acc.jpg" alt="img01"/>
          </a>
        </li>
        <li>
          <a href="" data-largesrc="images/2.jpg" data-title="Lorne" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
            <img src="/img/cc.png" alt="img02"/>
          </a>
        </li>
        <li>
          <a href="" data-largesrc="images/3.jpg" data-title="Tom" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
            <img src="/img/Mart22.png" alt="img03"/>
          </a>
        </li>
        <li>
          <a href="" data-largesrc="images/1.jpg" data-title="Mars" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
            <img src="/img/Acc.jpg" alt="img01"/>
          </a>
        </li>
        <li>
          <a href="" data-largesrc="images/2.jpg" data-title="Lorne" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
            <img src="/img/cc.png" alt="img02"/>
          </a>
        </li>
        <li>
          <a href="" data-largesrc="images/3.jpg" data-title="Tom" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
            <img src="/img/Mart22.png" alt="img03"/>
          </a>
        </li>
        <li>
          <a href="" data-largesrc="images/1.jpg" data-title="Mars" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
            <img src="/img/Acc.jpg" alt="img01"/>
          </a>
        </li>
        <li>
          <a href="" data-largesrc="images/2.jpg" data-title="Lorne" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
            <img src="/img/cc.png" alt="img02"/>
          </a>
        </li>
        <li>
          <a href="" data-largesrc="images/3.jpg" data-title="Tom" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
            <img src="/img/Mart22.png" alt="img03"/>
          </a>
        </li>
        <li>
          <a href="" data-largesrc="images/1.jpg" data-title="Mars" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
            <img src="/img/Acc.jpg" alt="img01"/>
          </a>
        </li>
        <li>
          <a href="" data-largesrc="images/2.jpg" data-title="Lorne" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
            <img src="/img/cc.png" alt="img02"/>
          </a>
        </li>
        <li>
          <a href="" data-largesrc="images/3.jpg" data-title="Tom" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
            <img src="/img/Mart22.png" alt="img03"/>
          </a>
        </li>
        <li>
          <a href="" data-largesrc="images/1.jpg" data-title="Mars" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
            <img src="/img/Acc.jpg" alt="img01"/>
          </a>
        </li>
        <li>
          <a href="" data-largesrc="images/2.jpg" data-title="Lorne" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
            <img src="/img/cc.png" alt="img02"/>
          </a>
        </li>
        <li>
          <a href="" data-largesrc="images/3.jpg" data-title="Tom" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
            <img src="/img/Mart22.png" alt="img03"/>
          </a>
        </li>
        <li>
          <a href="" data-largesrc="images/1.jpg" data-title="Mars" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
            <img src="/img/Acc.jpg" alt="img01"/>
          </a>
        </li>
        <li>
          <a href="" data-largesrc="images/2.jpg" data-title="Lorne" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
            <img src="/img/cc.png" alt="img02"/>
          </a>
        </li>
        <li>
          <a href="" data-largesrc="images/3.jpg" data-title="Tom" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
            <img src="/img/Mart22.png" alt="img03"/>
          </a>
        </li>
        <li>
          <a href="" data-largesrc="images/1.jpg" data-title="Mars" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
            <img src="/img/Acc.jpg" alt="img01"/>
          </a>
        </li>
        <li>
          <a href="" data-largesrc="images/2.jpg" data-title="Lorne" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
            <img src="/img/cc.png" alt="img02"/>
          </a>
        </li>
        <li>
          <a href="" data-largesrc="images/3.jpg" data-title="Tom" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
            <img src="/img/Mart22.png" alt="img03"/>
          </a>
        </li>
        <li>
          <a href="" data-largesrc="images/1.jpg" data-title="Mars" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
            <img src="/img/Acc.jpg" alt="img01"/>
          </a>
        </li>
        <li>
          <a href="" data-largesrc="images/2.jpg" data-title="Lorne" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
            <img src="/img/cc.png" alt="img02"/>
          </a>
        </li>
        <li>
          <a href="" data-largesrc="images/3.jpg" data-title="Tom" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
            <img src="/img/Mart22.png" alt="img03"/>
          </a>
        </li>
        <li>
          <a href="" data-largesrc="images/1.jpg" data-title="Mars" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
            <img src="/img/Acc.jpg" alt="img01"/>
          </a>
        </li>
        <li>
          <a href="" data-largesrc="images/2.jpg" data-title="Lorne" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
            <img src="/img/cc.png" alt="img02"/>
          </a>
        </li>
        <li>
          <a href="" data-largesrc="images/3.jpg" data-title="Tom" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
            <img src="/img/Mart22.png" alt="img03"/>
          </a>
        </li>
        <li>
          <a href="" data-largesrc="images/1.jpg" data-title="Mars" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
            <img src="/img/Acc.jpg" alt="img01"/>
          </a>
        </li>
        <li>
          <a href="" data-largesrc="images/2.jpg" data-title="Lorne" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
            <img src="/img/cc.png" alt="img02"/>
          </a>
        </li>
        <li>
          <a href="" data-largesrc="images/3.jpg" data-title="Tom" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
            <img src="/img/Mart22.png" alt="img03"/>
          </a>
        </li>
        <li>
          <a href="" data-largesrc="images/1.jpg" data-title="Mars" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
            <img src="/img/Acc.jpg" alt="img01"/>
          </a>
        </li>
        <li>
          <a href="" data-largesrc="images/2.jpg" data-title="Lorne" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
            <img src="/img/cc.png" alt="img02"/>
          </a>
        </li>
        <li>
          <a href="" data-largesrc="images/3.jpg" data-title="Tom" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
            <img src="/img/Mart22.png" alt="img03"/>
          </a>
        </li>
        <li>
          <a href="" data-largesrc="images/1.jpg" data-title="Mars" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
            <img src="/img/Acc.jpg" alt="img01"/>
          </a>
        </li>
        <li>
          <a href="" data-largesrc="images/2.jpg" data-title="Lorne" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
            <img src="/img/cc.png" alt="img02"/>
          </a>
        </li>
        <li>
          <a href="" data-largesrc="images/3.jpg" data-title="Tom" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
            <img src="/img/Mart22.png" alt="img03"/>
          </a>
        </li>
        <li>
          <a href="" data-largesrc="images/1.jpg" data-title="Mars" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
            <img src="/img/Acc.jpg" alt="img01"/>
          </a>
        </li>
        <li>
          <a href="" data-largesrc="images/2.jpg" data-title="Lorne" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
            <img src="/img/cc.png" alt="img02"/>
          </a>
        </li>
        <li>
          <a href="" data-largesrc="images/3.jpg" data-title="Tom" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
            <img src="/img/Mart22.png" alt="img03"/>
          </a>
        </li>
        <li>
          <a href="" data-largesrc="images/1.jpg" data-title="Mars" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
            <img src="/img/Acc.jpg" alt="img01"/>
          </a>
        </li>
      </ul>
      <a id="og-additems" href="#">add more</a>
    </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="js/grid.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  <script>
    $(function() {
      Grid.init();
    });
  </script>

   </body>
 </html>
