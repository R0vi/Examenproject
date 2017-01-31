<?php

class gebruikers_ophalen
{
    private $db;

    function __construct(Connection $connection){
        $this->connection = $connection;
        $this->db = $this->connection->getDb();
    }
    
    function getUsers(){
        $query = $this->db->prepare('SELECT * FROM gebruiker');
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }
}