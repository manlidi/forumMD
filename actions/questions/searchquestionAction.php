<?php

require_once('actions/database.php');

$allquestions = $connexion->query("SELECT * FROM questions ORDER BY id DESC LIMIT 0,5");


if(isset($_GET['recherche']) && !empty($_GET['recherche'])){
    $search = $_GET['recherche'];

    $allquestions = $connexion->query('SELECT * FROM questions WHERE titre LIKE "%'.$search.'%" ORDER BY id DESC');



}

?>