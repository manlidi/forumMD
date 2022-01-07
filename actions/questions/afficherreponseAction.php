<?php

require_once('actions/database.php');

$sel = $connexion->prepare("SELECT * From reponse WHERE id_question = ? ORDER BY id DESC");
$sel->execute(array($_GET['id']));
?>