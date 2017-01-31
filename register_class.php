<?php

class register
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
        return ['email' => $email, 'password' => $password, 'naam' => $naam, 'adres' => $adres, 'postcode' => $postcode, 'woonplaats' => $woonplaats, 'telefoon' => $telefoon, 'rechten' => 'klant'];
    }

    function setUser($post){
        $query = $this->db->prepare('INSERT INTO gebruiker (naam, adres, postcode, woonplaats, telefoon, email, wachtwoord, rechten) VALUES (:naam, :adres, :postcode, :woonplaats, :telefoon, :email, :password, :rechten)');
        $query->execute(array(':naam' => $post['naam'], ':adres' => $post['adres'], ':postcode' => $post['postcode'], ':woonplaats' => $post['woonplaats'], ':telefoon' => $post['telefoon'], ':email' => $post['email'], ':password' => $post['password'], ':rechten' => $post['rechten']));
    }

}