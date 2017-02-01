<?php

class gebruikers_ophalen
{
    //ophalen database connectie
    private $db;

    function __construct(Connection $connection){
        $this->connection = $connection;
        $this->db = $this->connection->getDb();
    }
    //
    
    //ophalen gebrukers data
    function getUsers(){
        $query = $this->db->prepare('SELECT * FROM gebruiker');
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }
    //
}