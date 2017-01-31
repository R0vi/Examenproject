<?php

class Connection
{
    private $db;
    public function __construct($host = 'localhost', $database, $username, $password)
    {
        $this->db = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        error_reporting(-1);
        session_start();
    }

    public function getDb()
    {
        return $this->db;
    }


}