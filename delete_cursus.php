<?php
//ophalen Database connectie
require_once 'connection.php';

$connection = new Connection('', 'dewaai', 'root', '');
$db = $connection->getDb();
//

//check of iemand admin is
if ($_SESSION['login']['rechten'] == "admin"){
    //
} else {
    header('Location:index.php');
}
//

//kijken of $GET gevult is en dan de cursus uit de database verwijderen
if(!empty($_GET['cursus_naam'])){
    try{
        $query = $db->prepare('DELETE FROM cursus WHERE cursus_naam = :cursus_naam');
        $query->execute(array(':cursus_naam' => $_GET['cursus_naam']));
        header('Location:cursus_overzicht_admin.php');
    } catch (Exception $e) {
        header('Location:delete_mislukt.php');
    }
} else {
    header('Location:index.php');
}
//