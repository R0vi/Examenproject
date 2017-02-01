<?php

class schip_ophalen
{
    //ophalen database connectie
    private $db;

    function __construct(Connection $connection){
        $this->connection = $connection;
        $this->db = $this->connection->getDb();
    }
    //
    
    //ophalen schip data uit database
    function getSchip(){
        $query = $this->db->prepare('SELECT * FROM schip');
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }
    //
}