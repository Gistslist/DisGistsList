<?php
session_start();

require_once "ad.show.php";
require_once "users.create.php";
require_once "create_form_test.php";
require_once "bat_login.php";



?>

<html>
<head>
    <title>Batlist</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/grayscale.css">
    <link rel="stylesheet" type="text/css" href="/css/test.css">
    <!-- bxSlider CSS file -->
    <link rel="stylesheet" href="/css/jquery.bxslider.css">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"> -->

  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="js/grayscale.js"></script>
    <script src="/js/jquery.bxslider.min.js"></script>
    <script src="/js/test.js"></script>

</head>

<bodyid="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i>  <span class="light">Holy <?= $_SESSION['USERNAME'] ?></span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#browse">Browse</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#search">Search</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#post_ad">List your Bat Ad</a>
                    </li>
                    <li>
                        <a href="#" data-toggle="modal" data-target="#registerModal">Sign Up</a>
                    </li>
                    <li>
                        <a href="#login" data-toggle="modal" data-target="#loginModal">
                          <?= $_SESSION['loginmessage']?>
                        </a>
                    </li>
                    <li>
                        <a href="bat_logout.php"><?= $_SESSION['logoutmessage']; ?></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Batlist</h1>
                        <p class="intro-text">Batman's broke! Buy his stuff!</p>
                        <a href="#browse" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <section id="browse" class="container content-section">
        <div id="carousel">
          <figure id="spinner">
<<<<<<< HEAD
          <?php foreach ($items as $item): ?>
            <img src="<?= $item['image'] ?>">              
          <? endforeach ?>  
          <img src=//demosthenes.info/assets/images/wanaka-tree.jpg alt="">
          <img src=//demosthenes.info/assets/images/still-lake.jpg alt="">
          <img src=//demosthenes.info/assets/images/pink-milford-sound.jpg alt="">
          <img src=//demosthenes.info/assets/images/paradise.jpg alt="">
          <!-- <img src=//demosthenes.info/assets/images/morekai.jpg alt="">
          <img src=//demosthenes.info/assets/images/milky-blue-lagoon.jpg alt="">
          <img src=//demosthenes.info/assets/images/lake-tekapo.jpg alt="">
          <img src=//demosthenes.info/assets/images/milford-sound.jpg alt=""> -->
=======
            
                    
                <?php foreach ($items as $item): ?>

                    <!-- <div role="button" data-toggle="modal" data-target="#myModal<?= $item['id'] ?>"> -->

                        <img src="<?= $item['image'] ?>" role="button" data-toggle="modal" data-target="#myModal<?= $item['id'] ?>">

                

                <? endforeach ?> 
            
>>>>>>> 4cb5c77beedbf8431cd7ae3883976c8189122d78
          </figure>
        </div>
          <span style=float:left class=ss-icon onclick="galleryspin('-')">&lt;</span>
          <span style=float:right class=ss-icon onclick="galleryspin('')">&gt;</span>
    </section>

<!-- Modal -->
    <? foreach($items as $item):?>
      <div class="modal fade" id="myModal<?= $item['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?= $item['id']?>">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

              <div class="modal-title" id="myModalLabel<?= $item['id']?>"><img src="<?= $item['image'] ?>" width="100%"></div>
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
    <? endforeach; ?>
    <!-- POST AD SECTION -->
    <section id="post_ad" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Sell your Bat Gadgets!</h2>
                   <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-lg center" data-toggle="modal" data-target="#myModal">
                  Create An Ad!
                </button>
        </div>
    </section>


    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact the MLT</h2>
                <p>Batmen@batlist.com</p>
            </div>
        </div>
    </section>

    <!-- REGISTER MODAL -->
    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="registerModalLabel">Please create a new alter ego</h4>
          </div>
          <div class="modal-body">
            <form method="POST" action="htmltest2.php">
                  <div class="userCreate form-group">
                      <label for="first_name"></label>
                      <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name">
                  </div>
                  <div class="userCreate form-group">
                      <label for="last_name"></label>
                      <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name">
                  </div>
                  <div class="userCreate form-group">
                      <label for="user_name"></label>
                      <input type="text" name="user_name" class="form-control" id="user_name" placeholder="Username">
                  </div>
                  <div class="userCreate form-group">
                      <label for="password"></label>
                      <input type="text" name="password" class="form-control" id="password" placeholder="Password">
                  </div>
                  <div class="userCreate form-group">
                      <label for="email"></label>
                      <input type="text" name="email" class="form-control" id="email" placeholder="Email">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warning">Submit</button>
                  </div>
                  
              </form>
          </div>
        </div>
      </div>
    </div>
    <!-- END REGISTER MODAL -->

    <!-- LOGIN MODAL -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="loginModalLabel">Please enter your username and password</h4>
          </div>
          <div class="modal-body">
            <form method="POST" action="htmltest2.php">  
                <div class="userCreate form-group">
                    <label for="login_user_name"></label>
                    <input type="text" name="login_user_name" class="form-control" id="login_user_name" placeholder="Username">
                </div>
                <div class="userCreate form-group">
                    <label for="login_password"></label>
                    <input type="text" name="login_password" class="form-control" id="login_password" placeholder="Password">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warning">Submit</button>
                </div>  
              </form>
          </div>
        </div>
      </div>
    </div>
    <!-- END LOGIN MODAL -->

    <!-- MAKE AD MODAL -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Create Ad</h4>
          </div>
        <div class="modal-body">
          <form method="POST" action="htmltest2.php" enctype="multipart/form-data">                     
            <div class="adCreate form-group">
                <label for="item_name"></label>
                <input type="text" name="item_name" class="form-control" id="item_name" placeholder="Item Name">
            </div>
            <div class="adCreate form-group input-group">
              <label for="price"></label>
              <span class="input-group-addon">$</span>
              <input type="number" name="price"class="form-control" aria-label="Amount (to the nearest dollar)">
              <span class="input-group-addon">.00</span>
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
                <label>Upload Image</label>
                <div class="input-group">
                    <span class="input-group-btn">
                        <span class=" btn btn-default btn-file">
                            Browse <input type="file" name="data" id="data">
                        </span>
                    </span>
                    <input type="text" id="filefill" class="form-control" readonly />
                </div>
            </div>
            <div class="adCreate form-group center">
                <label for="description"></label>
                <input type="text" name="description" class="form-control" id="description" placeholder="Description">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-warning">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- END MAKE AD MODAL -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; Batlist 2015</p>
        </div>
    </footer>

</body>
</html>