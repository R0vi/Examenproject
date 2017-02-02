<?php
require_once 'connection.php';
require_once 'schiptoevoegen_class.php';
$connection = new Connection();
$schiptoevoegen = new schiptoevoegen($connection);
if ($_SESSION['login']['rechten'] == "admin"){
   //
} else {
    header('Location:index.php');
}
if(!empty($_POST)){
    $schiptoevoegen->setSchip($schiptoevoegen->getPost());
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
            <h1>Schip Toevoegen</h1>

            <div class="row">
                <div class="col-md-6">
                    <form action="schip_toevoegen.php" method="post">
                      Schipnaam:<input type="text" name="schip_naam" placeholder="Schip naam" class="form-control"><br>
                      Schipnummer:<input type="text" name="schip_nummer" placeholder="Schipnummer" class="form-control"><br>
                      Ontwerp:<input type="text" name="schip_ontwerp" class="form-control"><br>
                      Cursus:<select name="cursus" class="form-control">
                            <?php
                            $course = $schiptoevoegen->getCursus();
                            foreach ($course as $value){
                                echo '<option>'.$value['cursus_naam'].'</option>';
                            }
                            ?>
                      </select>
                      Averij:<input type="checkbox" name="schip_averij" class="form-control"><br>
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