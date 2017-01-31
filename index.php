<?php
require_once 'connection.php';
$connection = new Connection('', 'dewaai', 'root', '');
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>De Waai</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <!-- Navigation -->
    <?php require_once 'nav.php' ?>

        <!-- Header Carousel -->
        <header id="myCarousel" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <!-- <li d  ata-target="#myCarousel" data-slide-to="2"></li> -->
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="fill" style="background-image:url('img/bg1.jpg');"></div>
                <!-- <div class="carousel-caption">
                    <h2>Caption 1</h2>
                </div> -->
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('img/bg2.jpg');"></div>
                <!-- <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div> -->
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('img/bg3.jpg');"></div>
                <!-- <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div> -->
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('img/bg4.jpg');"></div>
                <!-- <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div> -->
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <div class="cta_home">
        <div class="content"><p>Scroll naar onder voor meer info!<p>
        </div>
    </div>
    <!-- Page Content -->
    <div class="container">
        <hr>
        <div class="row">
           <div class="col-md-4">
               <p>
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                   consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                   cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                   proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
               </p>
           </div>
           <div class="col-md-4">
               <p>
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                   consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                   cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                   proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
               </p>

           </div>
           <div class="col-md-4">
               <p>
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                   consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                   cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                   proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
               </p>
           </div>
       </div>
       <hr>
   </div>
   <!-- Footer -->
   <footer>
    <div class="container">
        <div class="row">   
            <div class="col-md-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                 quis nostrud</p>
                 <a href="sitemap.php">Sitemap</a>
             </div> 
             <div class="col-md-4">
                <img src="img/logo_def.png" class="footer_logo">
            </div> 
            <div class="col-md-4">
                <h3>Contactgegevens</h3>
                <p>Laan van mensenrechten 500
                    <br>
                    7331 VZ Apeldoorn
                    <br>
                    Tel: 055-123456
                    <br>
                    Fax: 055-123457
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 copyright_footer">
                <p>Copyright &copy; De Waai 2017</p>
            </div>
        </div>
    </div>
</footer>

<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>

</body>

</html>
