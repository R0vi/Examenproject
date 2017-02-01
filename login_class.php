<?php

class login
{
    //ophalen database connectie
    private $db;

    function __construct(Connection $connection){
        $this->connection = $connection;
        $this->db = $this->connection->getDb();
    }
    //

    //ophalen form data
    function getPost() {
        if(isset($_POST['email'])){
            if(isset($_POST['password'])){
                return ['email' => $_POST['email'], 'password' => $_POST['password']];
            }
        }
    }
    //

    //check of login klopt
    function compareWithDatabase($userPost){
        $query = $this->db->prepare('SELECT * FROM gebruiker WHERE email = :email');
        $query->execute(array(':email' => $userPost['email']));
        $result = $query->fetch();

        if($result){
            if(password_verify($userPost['password'], $result['wachtwoord'])){
                echo "login succesfull";
                return $result;
            } else {
                echo "login unsuccesfull";
                return null;
            }
        } else {
            echo "login unsuccesfull";
            return null;
        }
    }
    //

    //de data van de user in de sessie zetten
    function setSession($userData){
        $_SESSION['login'] = $userData;
        if(!empty($_SESSION['login'])){
            header('Location: index.php');
        }
    }
    //
}