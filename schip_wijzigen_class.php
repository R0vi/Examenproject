<?php

class schip_wijzigen
{
    //ophalen Database connectie
    private $db;

    function __construct(Connection $connection){
        $this->connection = $connection;
        $this->db = $this->connection->getDb();
    }
    //

    function getSchip($schip_id){
        $query = $this->db->prepare('SELECT * FROM schip WHERE schip_id = :schip_id');
        $query->execute(array(':schip_id' => $schip_id));
        $result = $query->fetch();
        return $result;
    }


    function getPost(){
        return ['naam_schip' => $_POST['naam_schip'], 'schipnummer' => $_POST['schipnummer'], 'ontwerp' => $_POST['ontwerp'], 'cursus' => $_POST['cursus'], 'averij' => $_POST['averij'], 'schipnaam' => $_POST['schipnaam']];
    }

    function setEdit($post){
        $query = $this->db->prepare('UPDATE schip SET naam_schip = :naam_schip, schipnummer = :schipnummer, ontwerp = :ontwerp, cursus = :cursus, averij = :averij WHERE naam_schip = :schipnaam');
        $query->execute(array(':naam_schip' => $post['naam_schip'], ':schipnummer' => $post['schipnummer'], ':ontwerp' => $post['ontwerp'], ':cursus' => $post['cursus'], ':averij' => $post['averij'], ':schipnaam' => $post['schipnaam']));
        header('Location:schip_overzicht.php');
    }

}