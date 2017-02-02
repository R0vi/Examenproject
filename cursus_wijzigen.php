<?php
require_once 'connection.php';
require_once 'cursus_wijzigen_class.php';

$connection = new Connection();
$cursuswijzigen = new cursus_wijzigen($connection);

if ($_SESSION['login']['rechten'] == "admin"){
    //
} else {
    header('Location:index.php');
}

if (isset($_GET['cursus_id'])){
    //
} else {
    header('Location:index.php');
}
if(!empty($_POST)){
    $cursuswijzigen->setEdit($cursuswijzigen->getPost());
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
    <h1>Cursus gegevens wijzigen</h1>
    <div class="row">
        <div class="col-md-6">
            <?php
            $cursus = $cursuswijzigen->getCursus($_GET['cursus_id']);
            ?>
            <form method="POST" action="cursus_wijzigen.php">
                <input type="text" name="cursus_naam" class="form-control" placeholder="Naam" value="<?php echo $cursus['cursus_naam'];?>"><br>
                <input type="date" name="begindatum" class="form-control" placeholder="Begindatum"  value="<?php echo $cursus['begindatum'];?>"><br>
                <input type="date" name="einddatum" class="form-control" placeholder="Einddatum"  value="<?php echo $cursus['einddatum'];?>"><br>
                <input type="text" name="prijs" class="form-control" placeholder="Prijs"  value="<?php echo $cursus['prijs'];?>"><br>
                <input type="text" name="max_cursusten" class="form-control" placeholder="max cursisten"  value="<?php echo $cursus['max_cursusten'];?>"><br>
                <input type="hidden" name="cursusnaam" value="<?php echo $cursus['cursus_naam'];?>">
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