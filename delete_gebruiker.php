<?php
//ophalen database connectie
require_once 'connection.php';

$connection = new Connection('', 'dewaai', 'root', '');
$db = $connection->getDb();
//

//kijken of hij admin is
if ($_SESSION['login']['rechten'] == "admin"){
    //
} else {
    header('Location:index.php');
}
//

//kijken of $get gevult is en dan gebruiker deleten uit database
if(!empty($_GET['email'])){
    try{
        $query = $db->prepare('DELETE FROM gebruiker WHERE email = :email');
        $query->execute(array(':email' => $_GET['email']));
        header('Location:gebruiker_overzicht.php');
    } catch (Exception $e) {
        header('Location:delete_mislukt.php');
    }
} else {
    header('Location:index.php');
}
//