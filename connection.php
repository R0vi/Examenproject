<?php

class Connection
{
    //met deze klasse kan je met elke database connecten
    private $db;
    
    //parameter $host=ip of leef als localhost wordt gebruikt; $databse=naam van de database; $username=inlognaam; password=wachtwoord
    public function __construct()
    {
        $database = 'dewaai';
        $username = 'ivorenreinbert';
        $password = '';
        $this->db = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        session_start();
    }
    //
    
    //return Database zodat er mee gewerkt kan worden
    public function getDb()
    {
        return $this->db;
    }
    //
}