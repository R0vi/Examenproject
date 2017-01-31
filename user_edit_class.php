<?php
class edit
{
    private $db;
    private $user_data;
    function __construct(Connection $connection){
        $this->connection = $connection;
        $this->db = $this->connection->getDb();
    }
    function getPost(){

        if(!empty($_POST['email'])){
            $email = $_POST['email'];
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
        
        $user_data = ['email' => $email, 'password' => $password, 'naam' => $naam, 'adres' => $adres, 'postcode' => $postcode, 'woonplaats' => $woonplaats, 'telefoon' => $telefoon, 'rechten' => 'klant'];

        return ['email' => $email, 'password' => $password, 'naam' => $naam, 'adres' => $adres, 'postcode' => $postcode, 'woonplaats' => $woonplaats, 'telefoon' => $telefoon, 'rechten' => 'klant'];
    }

    function updateUser($post){
        if(empty($this->errors)){
            $query = $this->db->prepare('UPDATE gebruiker SET naam = :naam, adres = :adres, postcode = :postcode, woonplaats = :woonplaats, telefoon = :telefoon, email = :email, wachtwoord = :password WHERE Gebruikers_id = :gebruikers_id');

            $query->execute(array(':naam' => $post['naam'], ':adres' => $post['adres'], ':postcode' => $post['postcode'], ':woonplaats' => $post['woonplaats'], ':telefoon' => $post['telefoon'], ':email' => $post['email'], ':password' => $post['password'], ':gebruikers_id' => $_SESSION["login"]["Gebruikers_id"]));
            


            // $query = $this->db->prepare('SELECT * FROM gebruiker WHERE Gebruikers_id = :gebruikers_id');
            // $query->execute(array(':gebruikers_id' => $_SESSION["login"]["gebruikers_id"]));
            // $result = $query->fetch();
            $_SESSION['login'] = $user_data;

            header('Location:edit_success.php');
        } else {
            echo "string";
            return false;
        }
    }

}