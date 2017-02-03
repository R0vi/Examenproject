<?php
require_once 'connection.php';
require_once 'cursustoevoegen_class.php';
$connection = new Connection();
$cursustoevoegen = new cursustoevoegen($connection);
if ($_SESSION['login']['rechten'] == "admin"){
    //
} else {
    header('Location:index.php');
}
if(!empty($_POST)){
    $cursustoevoegen->setCursus($cursustoevoegen->getPost());
}
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
            <h1>Cursus Toevoegen</h1>

            <div class="row">
                <div class="col-md-6">
                    <form method="post" action="cursus_toevoegen.php">
                        Cursus naam:<input type="text" name="cursus_naam" placeholder="Cursus naam" class="form-control"><br>
                        Begindatum:<input type="date" name="begindatum" placeholder="--/--/--" class="form-control"><br>
                        Einddatum:<input type="date" name="einddatum" placeholder="--/--/--" class="form-control"><br>
                        Prijs:<input type="number" name="prijs" placeholder="---" class="form-control"><br>
                        Max aantal cursisten:<input type="number" name="max_cursusten" placeholder="Max aantal cursisten" class="form-control"><br>
                        Schip:<select class="form-control" name="schip">
                        <?php //dropdown met schepen
                        $schip = $cursustoevoegen->getSchip();
                        foreach ($schip as $value){
                            echo '<option>'.$value['naam_schip'].'</option>';
                        }
                        ?>
                    </select><br>
                    <input type="submit" name="submit" class="btn btn-success">
                </form>
                <hr>
            </div>
        </div>
    </div>
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