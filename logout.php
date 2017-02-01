<?php
//ophalen database connectie
require_once 'connection.php';
$connection = new Connection('', 'dewaai', 'root', '');
//

//uiloggen
unset($_SESSION['login']);
//

//doorlinken
header("Location: index.php");
//