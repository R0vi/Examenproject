<?php

class register
{
    private $db;
    public $errors = "";

    //ophalen Database connectie
    function __construct(Connection $connection){
        $this->connection = $connection;
        $this->db = $this->connection->getDb();
    }
    //

    //ophalen form
    function getPost(){
            if(!empty($_POST['email'])){
                $email = $_POST['email'];

                $check = $this->db->prepare('SELECT * FROM gebruiker WHERE email = :email');
                $check->execute(array(':email' => $email));
                $result = $check->fetch();
                if ($result){
                    $this->errors = "Email adres al in gebruik!";
                    return false;
                } 

            } else {
                $this->errors = "Email adres invullen!";
                return false;
            }
            if(!empty($_POST['password'])){
                $password = $_POST['password'];
            } else {
                $this->errors = "Wachtwoord verkeerd ingevoerd!";
                return false;
            }
            if(!empty($_POST['naam'])){
                $naam = $_POST['naam'];
            } else {
                $this->errors = "Naam niet acceptabel!";
                return false;
            }
            if(!empty($_POST['adres'])){
                $adres = $_POST['adres'];
            } else {
                $this->errors = "Adres bestaat niet!";
                return false;
            }
            if(!empty($_POST['postcode'])){
                $postcode = $_POST['postcode'];
            } else {
                $this->errors = "Postcode foutief!";
                return false;
            }
            if(!empty($_POST['woonplaats'])){
                $woonplaats = $_POST['woonplaats'];
            } else {
                $this->errors = "Woonplaats bestaat niet!";
                return false;
            }
            if(!empty($_POST['telefoon'])) {
                $telefoon = $_POST['telefoon'];
            } else {
                $this->errors = "Geen geldig telefoon nummer!";
                return false;
            }
        
        return ['email' => $email, 'password' => $password, 'naam' => $naam, 'adres' => $adres, 'postcode' => $postcode, 'woonplaats' => $woonplaats, 'telefoon' => $telefoon, 'rechten' => 'klant'];
    }
    //
    
    //gebruiker naar database sturen
    function setUser($post){
        if(empty($this->errors)){
            $post['password'] = password_hash($post['password'], PASSWORD_DEFAULT);
            $query = $this->db->prepare('INSERT INTO gebruiker (naam, adres, postcode, woonplaats, telefoon, email, wachtwoord, rechten) VALUES (:naam, :adres, :postcode, :woonplaats, :telefoon, :email, :password, :rechten)');
            $query->execute(array(':naam' => $post['naam'], ':adres' => $post['adres'], ':postcode' => $post['postcode'], ':woonplaats' => $post['woonplaats'], ':telefoon' => $post['telefoon'], ':email' => $post['email'], ':password' => $post['password'], ':rechten' => $post['rechten']));
            header('Location:register_succes.php');
        } else {
            return false;
        }
    }
    //

}