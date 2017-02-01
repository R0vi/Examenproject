<?php
require_once 'connection.php';
require_once 'gebruikeroverzicht_ophalen_class.php';
$connection = new Connection('', 'dewaai', 'root', '');
$user_get = new gebruikers_ophalen($connection);
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
          <h1>Gebruiker overzicht</h1>
          <hr>
          <table class="table table-hover">
            <th>Id</th>
            <th>Naam</th>
            <th>Adres</th>
            <th>Postcode</th>
            <th>Woonplaats</th>
            <th>Telefoon</th>
            <th>Email</th>
            <th>Rechten</th>
            <th>Delete</th>
            <?php
            $gebruiker = $user_get->getUsers();
            // foreach loop die de gegevens om en om print
            foreach ($gebruiker as $value){
              echo '<tr>';
              echo '<td>'.$value['Gebruikers_id'].'</td>';
              echo '<td>'.$value['naam'].'</td>';
              echo '<td>'.$value['adres'].'</td>';
              echo '<td>'.$value['postcode'].'</td>';
              echo '<td>'.$value['woonplaats'].'</td>';
              echo '<td>'.$value['telefoon'].'</td>';
              echo '<td>'.$value['email'].'</td>';
              echo '<td>'.$value['rechten'].'</td>';
              //delete knop voor verwijderen van user
              echo "<td><a href='delete_gebruiker.php?email=".$value['email']."' class='btn btn-danger'>Verwijder</a></td>";
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