<?php
require_once 'connection.php';
$connection = new Connection('', 'dewaai', 'root', '');

unset($_SESSION['login']);
header("Location: index.php");

