<?php
require_once 'connection.php';
require_once 'user_edit_class.php';
$connection = new Connection();
$edit = new edit($connection);
if (isset($_SESSION['login'])){
   //
} else {
    header('Location:index.php');
}
if(!empty($_POST)){
    $edit->updateUser($edit->getPost());
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
            <h1>Gebruiker gegevens wijzigen</h1>
            <div class="row">
                <div class="col-md-6">
                    <form method="POST" action="gebruiker_wijzigen.php">
                        <input type="text" name="naam" class="form-control" placeholder="Naam" value="<?php echo $_SESSION['login']['1'];?>"><br>
                        <input type="text" name="adres" class="form-control" placeholder="Adres"  value="<?php echo $_SESSION['login']['2'];?>"><br>
                        <input type="text" name="postcode" class="form-control" placeholder="Postcode"  value="<?php echo $_SESSION['login']['3'];?>"><br>
                        <input type="text" name="woonplaats" class="form-control" placeholder="Woonplaats"  value="<?php echo $_SESSION['login']['4'];?>"><br>
                        <input type="text" name="telefoon" class="form-control" placeholder="Telefoon"  value="<?php echo $_SESSION['login']['5'];?>"><br>
                        <input type="email" name="email" class="form-control" placeholder="Email"  value="<?php echo $_SESSION['login']['6'];?>"><br>
                        <input type="password" name="password" class="form-control" placeholder="Wachtwoord"><br>
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