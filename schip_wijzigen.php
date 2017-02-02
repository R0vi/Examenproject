<?php
require_once 'connection.php';
require_once 'schip_wijzigen_class.php';

$connection = new Connection();
$schipwijzigen = new schip_wijzigen($connection);

if ($_SESSION['login']['rechten'] == "admin"){
    //
} else {
    header('Location:index.php');
}

if (isset($_GET['schip_id'])){
    //
} else {
    header('Location:index.php');
}
if(!empty($_POST)){
    $schipwijzigen->setEdit($schipwijzigen->getPost());
}
?>
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
    <h1>Schip gegevens wijzigen</h1>
    <div class="row">
        <div class="col-md-6">
            <?php
            $schip = $schipwijzigen->getSchip($_GET['schip_id']);
            ?>
            <form method="POST" action="schip_wijzigen.php">
                <input type="text" name="naam_schip" class="form-control" placeholder="Naam" value="<?php echo $schip['naam_schip'];?>"><br>
                <input type="text" name="schipnummer" class="form-control" placeholder="Schipnummer"  value="<?php echo $schip['schipnummer'];?>"><br>
                <input type="text" name="ontwerp" class="form-control" placeholder="Ontwerp"  value="<?php echo $schip['ontwerp'];?>"><br>
                <input type="text" name="cursus" class="form-control" placeholder="Prijs"  value="<?php echo $schip['cursus'];?>"><br>
                <input type="text" name="averij" class="form-control" placeholder="averij"  value="<?php echo $schip['averij'];?>"><br>
                <input type="hidden" name="schipnaam" value="<?php echo $schip['naam_schip'];?>">
                <input type="submit" class="btn btn-success">
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