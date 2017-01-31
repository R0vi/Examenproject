<?php

class coursesignup
{
    private $db;

    function __construct(Connection $connection){
        $this->connection = $connection;
        $this->db = $this->connection->getDb();
    }
    
    function getCursus(){
        $query = $this->db->prepare('SELECT * FROM cursus');
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }

}