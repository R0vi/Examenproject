<?php

class schip_ophalen
{
    private $db;

    function __construct(Connection $connection){
        $this->connection = $connection;
        $this->db = $this->connection->getDb();
    }
    
    function getSchip(){
        $query = $this->db->prepare('SELECT * FROM schip');
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }
}