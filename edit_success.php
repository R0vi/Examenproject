<!DOCTYPE html>
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
        <?php require 'nav.php' ?>


        <!-- Page Content -->
        <div class="container">
            <hr>
            <div class="alert alert-success"><h1>Aanpassen gelukt!</h1></div>
            <h3>U wordt doorverwezen!</h3>
            <h4>Graag opnieuw inloggen!</h4>
            <script>
                var timer = setTimeout(function() {
                    window.location='login.php'
                }, 3000);
            </script>
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