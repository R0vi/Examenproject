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

    function cursusSingnUp(){
        $data = ['cursus_naam' => $_POST['cursus_naam'], 'gebruikers_id' => $_SESSION['login']['Gebruikers_id']];
        $query = $this->db->prepare('INSERT INTO inschrijving (cursus_id, gebruikers_id) VALUES ((SELECT cursus_id FROM cursus WHERE cursus_naam = :cursus_naam), (SELECT Gebruikers_id FROM gebruiker WHERE Gebruikers_id = :gebruikers_id))');
        $query->execute(array(':cursus_naam' => $data['cursus_naam'], ':gebruikers_id' => $data['gebruikers_id']));
    }
}