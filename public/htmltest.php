<?php
require_once "ad.show.php";


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
    <!-- bxSlider CSS file -->
    <link rel="stylesheet" href="/css/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="/css/grayscale.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="/js/jquery.bxslider.min.js"></script>
    <script src="/js/main.js"></script>

</head>

<bodyid="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i>  <span class="light">Batlist</span>
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
                        <a class="page-scroll" href="#signup">Sign Up</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#login">Log In</a>
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
                        <p class="intro-text">Holy Contributing to the delinquency of minors! Batman's broke! Buy his stuff!</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    

    <section id="browse" class="container content-section">
        <div class="container">
            <ul class="bxslider">
            <?php foreach ($items as $item): ?>
                <li><img src="/img/<?= $item['image'] ?>" title="<?= $item['item_name'] ?>" id="<?= $item['id'] ?>" /></li>
            <? endforeach ?>
            </ul>
        </div>
    </section>

    <section id="post_ad" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Sell your Bat Gadgets!</h2>
                <p>Feel free to contact me or follow my work!</p>
            </div>
        </div>
    </section>

    <section>experience</section>
    <section>thoughts</section>

    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact Me</h2>
                <p>Feel free to contact me or follow my work!</p>
                <p><a href="mailto:lorne21@gmail.com">lorne21@gmail.com</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://facebook.com/lorne.barfield" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                    </li>
                    <li>
                        <a href="https://github.com/lorne21" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <footer>
        <div class="container text-center">
            <p>Copyright &copy; Batlist 2015</p>
        </div>
    </footer>

</body>
</html>