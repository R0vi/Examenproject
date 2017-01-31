<?php

class schiptoevoegen
{
    private $db;

    function __construct(Connection $connection){
        $this->connection = $connection;
        $this->db = $this->connection->getDb();
    }

    function getPost(){
        if(isset($_POST['schip_naam'])){
            $schipnaam = $_POST['schip_naam'];
        } else {
            return false;
        }
        if(isset($_POST['schip_nummer'])){
            $schipnummer = $_POST['schip_nummer'];
        } else {
            return false;
        }
        if(isset($_POST['schip_ontwerp'])){
            $schipontwerp = $_POST['schip_ontwerp'];
        } else {
            return false;
        }
        if(isset($_POST['cursus'])){
            $cursus = $_POST['cursus'];
        } else {
            return false;
        }
        if(isset($_POST['schip_averij'])){
            $schipaverij = 1;
        } else {
            $schipaverij = 0;
        }
        return ['schipnaam' => $schipnaam, 'schipnummer' => $schipnummer, 'schipontwerp' => $schipontwerp, 'cursus' => $cursus, 'schipaverij' => $schipaverij];
    }

    function setSchip($post){
        $query = $this->db->prepare('INSERT INTO schip (naam_schip, schipnummer, ontwerp, cursus, averij) VALUES (:schipnaam, :schipnummer, :ontwerp, :cursus, :averij)');
        $query->execute(array(':schipnaam' => $post['schipnaam'], ':schipnummer' => $post['schipnummer'], ':ontwerp' => $post['schipontwerp'], ':cursus' => $post['cursus'], ':averij' => $post['schipaverij']));
    }

    function getCursus(){
        $query = $this->db->prepare('SELECT cursus_naam FROM cursus');
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }
    
}