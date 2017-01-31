<?php

class cursustoevoegen
{
    private $db;

    function __construct(Connection $connection){
        $this->connection = $connection;
        $this->db = $this->connection->getDb();
    }

    function getPost(){
        if(isset($_POST['cursus_naam'])){
            $cursusnaam = $_POST['cursus_naam'];
        } else {
            return false;
        }
        if(isset($_POST['begindatum'])){
            $begindatum = $_POST['begindatum'];
        } else {
            return false;
        }
        if(isset($_POST['einddatum'])){
            $einddatum = $_POST['einddatum'];
        } else {
            return false;
        }
        if(isset($_POST['prijs'])){
            $prijs = $_POST['prijs'];
        } else {
            return false;
        }
        if(isset($_POST['schip'])){
            $schip = $_POST['schip'];
        } else {
            return false;
        }
        return ['cursusnaam' => $cursusnaam, 'begindatum' => $begindatum, 'einddatum' => $einddatum, 'prijs' => $prijs, 'schip' => $schip];
    }

    function setCursus($post){
        $query = $this->db->prepare('INSERT INTO cursus (cursus_naam, begindatum, einddatum, prijs, schip_id) VALUES (:cursus_naam, :begindatum, :einddatum, :prijs, (SELECT schip_id FROM schip WHERE naam_schip = :schip))');
        $query->execute(array(':cursus_naam' => $post['cursusnaam'], ':begindatum' => $post['begindatum'], ':einddatum' => $post['einddatum'], ':schip' => $post['schip'], ':prijs' => $post['prijs']));
        header('Location:cursus_overzicht.php');
    }

    function getSchip(){
        $query = $this->db->prepare('SELECT naam_schip FROM schip');
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }
}