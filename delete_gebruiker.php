<?php
require_once 'connection.php';

$connection = new Connection('', 'dewaai', 'root', '');
$db = $connection->getDb();

if ($_SESSION['login']['rechten'] == "admin"){
    //
} else {
    header('Location:index.php');
}
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