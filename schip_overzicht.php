<?php
require_once 'connection.php';
require_once 'schip_ophalen_class.php';
$connection = new Connection('', 'dewaai', 'root', '');
$schip_get = new schip_ophalen($connection);
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
          <h1>Schip overzicht</h1>
          <hr>
          <table class="table table-hover">
            <th>Naam</th>
            <th>Schipnummer</th>
            <th>Ontwerp</th>
            <th>Cursus</th>
            <th>Averij</th>
            <th>Delete</th>
            <?php
            $schip = $schip_get->getSchip();
            foreach ($schip as $value){
              echo '<tr>';
              echo '<td>'.$value['naam_schip'].'</td>';
              echo '<td>'.$value['schipnummer'].'</td>';
              echo '<td>'.$value['ontwerp'].'</td>';
              echo '<td>'.$value['cursus'].'</td>';
              if($value['averij'] == 0){
                echo "<td>Nee</td>";
              } else {
                echo "<td>Ja</td>";
              }
              echo "<td><a href='delete_schip.php?naam_schip=".$value['naam_schip']."' class='btn btn-danger'>Verwijder</a></td>";
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