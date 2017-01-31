<?php

class edit
{
    private $db;

    function __construct(Connection $connection){
        $this->connection = $connection;
        $this->db = $this->connection->getDb();
    }

    function getPost(){
        if(isset($_POST['email'])){
            $email = $_POST['email'];
        } else {
            return false;
        }
        if(isset($_POST['password'])){
            $password = $_POST['password'];
        } else {
            return false;
        }
        if(isset($_POST['naam'])){
            $naam = $_POST['naam'];
        } else {
            return false;
        }
        if(isset($_POST['adres'])){
            $adres = $_POST['adres'];
        } else {
            return false;
        }
        if(isset($_POST['postcode'])){
            $postcode = $_POST['postcode'];
        } else {
            return false;
        }
        if(isset($_POST['woonplaats'])){
            $woonplaats = $_POST['woonplaats'];
        } else {
            return false;
        }
        if(isset($_POST['telefoon'])) {
            $telefoon = $_POST['telefoon'];
        } else {
            return false;
        }
        return ['email' => $email, 'password' => $password, 'naam' => $naam, 'adres' => $adres, 'postcode' => $postcode, 'woonplaats' => $woonplaats, 'telefoon' => $telefoon];
    }

    function updateUser($post){
        $query = $this->db->prepare('UPDATE gebruiker SET naam = :naam, adres = :adres, postcode = :postcode, woonplaats = :woonplaats, telefoon = :telefoon, email = :email, wachtwoord = :password WHERE Gebruikers_id = :gebruikers_id');
        $query->execute(array(':naam' => $post['naam'], ':adres' => $post['adres'], ':postcode' => $post['postcode'], ':woonplaats' => $post['woonplaats'], ':telefoon' => $post['telefoon'], ':email' => $post['email'], ':password' => $post['password'], ':gebruikers_id' => 6));
    }

}