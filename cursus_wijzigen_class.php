<?php

class cursus_wijzigen
{
    //ophalen Database connectie
    private $db;

    function __construct(Connection $connection){
        $this->connection = $connection;
        $this->db = $this->connection->getDb();
    }
    //
    
    function getCursus($cursus_id){
        $query = $this->db->prepare('SELECT * FROM cursus WHERE cursus_id = :cursus_id');
        $query->execute(array(':cursus_id' => $cursus_id));
        $result = $query->fetch();
        return $result;
    }
    

    function getPost(){
        return ['cursus_naam' => $_POST['cursus_naam'], 'begindatum' => $_POST['begindatum'], 'einddatum' => $_POST['einddatum'], 'prijs' => $_POST['prijs'], 'max_cursusten' => $_POST['max_cursusten'], 'cursusnaam' => $_POST['cursusnaam']];
    }

    function setEdit($post){
        $query = $this->db->prepare('UPDATE cursus SET cursus_naam = :cursus_naam, begindatum = :begindatum, einddatum = :einddatum, prijs = :prijs, max_cursusten = :max_cursusten WHERE cursus_naam = :cursusnaam');
        $query->execute(array('cursus_naam' => $post['cursus_naam'], ':begindatum' => $post['begindatum'], ':einddatum' => $post['einddatum'], ':prijs' => $post['prijs'], ':max_cursusten' => $post['max_cursusten'], ':cursusnaam' => $post['cursusnaam']));
        header('Location:cursus_overzicht_admin.php');
    }
    
}