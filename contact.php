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
    <?php require 'nav.php' ?>

    <!-- Page Content -->
    <div class="container">
        <hr>     
        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-8">
                <!-- Embedded Google Map -->
                <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9780.362365004496!2d5.96652685!3d52.2054012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2c7987fa5413b368!2sAventus%2C+locatie+Laan+van+de+Mensenrechten!5e0!3m2!1snl!2snl!4v1485516159356"></iframe>
            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
            <h3>Contact gegevens</h3>
                <p>
                    Laan van mensenrechten<br>7331 VZ, Apeldoorn<br>
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">P</abbr>: (055) 123456</p>
                    <p><i class="fa fa-envelope-o"></i> 
                        <abbr title="Email">E</abbr>: <a href="mailto:name@example.com">info@dezwaai.nl</a>
                    </p>
                        <ul class="list-unstyled list-inline list-social-icons">
                            <li>
                                <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /.row -->

                <!-- Contact Form -->
                <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
                <div class="row">
                    <div class="col-md-8">
                        <h3>Neem contact met ons op!</h3>
                        <form name="sentMessage" id="contactForm" novalidate action="mailto:info@dezwaai.nl">
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Naam:</label>
                                    <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Telefoonnummer:</label>
                                    <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Email Adres:</label>
                                    <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Bericht:</label>
                                    <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                                </div>
                            </div>
                            <div id="success"></div>
                            <!-- For success/fail messages -->
                            <button type="submit" class="btn btn-primary">Versturen!</button>
                        </form>
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
