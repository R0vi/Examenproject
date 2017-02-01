<?php

class inschrijving_overzicht
{
    private $db;

    function __construct(Connection $connection){
        $this->connection = $connection;
        $this->db = $this->connection->getDb();
    }

    function getInschrijving($gebruiker_id){
        $query = $this->db->prepare('SELECT cursus_id FROM inschrijving WHERE gebruikers_id = :gebruikers_id');
        $query->execute(array(':gebruikers_id' => $gebruiker_id));
        $cursus_id = $query->fetchAll();

        $cursusData = [];
        foreach($cursus_id as $cursus){
            $query2 = $this->db->prepare('SELECT * FROM cursus WHERE cursus_id = :cursus_id');
            $query2->execute(array(':cursus_id' => $cursus['cursus_id']));
            $result = $query2->fetch();
            array_push($cursusData, $result);
        }
        return $cursusData;
    }
}