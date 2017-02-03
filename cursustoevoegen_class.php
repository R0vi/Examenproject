<?php

class cursustoevoegen
{
    //ophalen Database connectie
    private $db;

    function __construct(Connection $connection){
        $this->connection = $connection;
        $this->db = $this->connection->getDb();
    }
    //

    //ophalen form data en deze in een array returnen
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
        if(isset($_POST['max_cursusten'])){
            $maxcursusten = $_POST['max_cursusten'];
        } else {
            return false;
        }
        if(isset($_POST['schip'])){
            $schip = $_POST['schip'];
        } else {
            return false;
        }
        return ['cursusnaam' => $cursusnaam, 'begindatum' => $begindatum, 'einddatum' => $einddatum, 'prijs' => $prijs, 'max_cursusten' => $maxcursusten, 'schip' => $schip];
    }
    //
    
    //cursus naar de database sturen
    //parameter=het form (in meeste gevallen de functie getPost)
    function setCursus($post){
        $query = $this->db->prepare('INSERT INTO cursus (cursus_naam, begindatum, einddatum, prijs, max_cursusten, schip_id) VALUES (:cursus_naam, :begindatum, :einddatum, :prijs, :max_cursusten, (SELECT schip_id FROM schip WHERE naam_schip = :schip))');
        $query->execute(array(':cursus_naam' => $post['cursusnaam'], ':begindatum' => $post['begindatum'], ':einddatum' => $post['einddatum'], ':schip' => $post['schip'], ':prijs' => $post['prijs'], ':max_cursusten' => $post['max_cursusten']));
        header('Location:cursus_overzicht_admin.php');
    }
    //
    
    //ophalen schip uit database
    function getSchip(){
        $query = $this->db->prepare('SELECT naam_schip FROM schip');
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }
    //
}