<?php

class login
{
    private $db;

    function __construct(Connection $connection){
        $this->connection = $connection;
        $this->db = $this->connection->getDb();
    }

    function getPost() {
        if(isset($_POST['email'])){
            if(isset($_POST['password'])){
                return ['email' => $_POST['email'], 'password' => $_POST['password']];
            }
        }
    }

    function compareWithDatabase($userPost){
        $query = $this->db->prepare('SELECT * FROM gebruiker WHERE email = :email AND wachtwoord = :password;');
        $query->execute(array(':email' => $userPost['email'], ':password' => $userPost['password']));
        $result = $query->fetch();
        if($result){
            echo "login succesfull";
            return $result;
        } else {
            echo "login unsuccesfull";
            return null;
        }
    }

    function setSession($userData){
        $_SESSION['login'] = $userData;
        if(!empty($_SESSION['login'])){
            header('Location: index.php');
        }
    }
}