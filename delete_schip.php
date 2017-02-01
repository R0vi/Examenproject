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

//kijken of er iets in $get staat en dan schip deleten uit database
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
//