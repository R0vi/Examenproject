<?php
require_once 'connection.php';
require_once 'courseSignUp_class.php';

$connection = new Connection();
$courseSingUp = new coursesignup($connection);

if ($_SESSION['login']['rechten'] == "admin"){
    //
} else {
    header('Location:index.php');
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
        <h1>Cursus overzicht</h1>
        <hr>
        <table class="table table-hover">
            <th>Cursus</th>
            <th>Begindatum</th>
            <th>Einddatum</th>
            <th>Prijs</th>
            <th>Aantal cursisten</th>
            <th>Edit</th>
            <th>Delete</th>
            <?php
            $cursus = $courseSingUp->getCursus();
            function cursusvol($aantal, $max){
                if($aantal == $max){
                    return 'maximaal berijkt!';
                }
            }
            // foreach loop die de gegevens om en om print
            foreach ($cursus as $value){
                echo '<tr>';
                echo '<td>'.$value['cursus_naam'].'</td>';
                echo '<td>'.$value['begindatum'].'</td>';
                echo '<td>'.$value['einddatum'].'</td>';
                echo '<td>'.$value['prijs'].'</td>';
                echo '<td> '.$courseSingUp->calcSignUp($value['cursus_naam']).'/'.$value['max_cursusten'].'<p class="text-danger">'.cursusvol($courseSingUp->calcSignUp($value['cursus_naam']),$value['max_cursusten']).'</p></td>';
                echo "<td><a href='cursus_wijzigen.php?cursus_id=".$value['cursus_id']."' class='btn btn-success'>Edit</a></td>";
                //delete knop voor het verwijderen van een user
                echo "<td><a href='delete_cursus.php?cursus_naam=".$value['cursus_naam']."' class='btn btn-danger'>Verwijder</a></td>";
                echo '<tr>';
            }
            ?>
        </table>
        <hr>
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