<?php
require_once 'connection.php';

$connection = new Connection('', 'dewaai', 'root', '');
$db = $connection->getDb();

if ($_SESSION['login']['rechten'] == "admin"){
    //
} else {
    header('Location:index.php');
}
if(!empty($_GET['naam_schip'])){
    try{
        $query = $db->prepare('DELETE FROM schip WHERE naam_schip = :naam_schip');
        $query->execute(array(':naam_schip' => $_GET['naam_schip']));
        header('Location:schip_overzicht.php');
    } catch (Exception $e) {
        header('Location:delete_mislukt.php');
    }
} else {
    header('Location:index.php');
}