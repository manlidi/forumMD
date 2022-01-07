<?php
    session_start();
    require_once('actions/database.php');

    $afficherquestions = $connexion->prepare("SELECT id, titre, descriptions FROM questions WHERE id_membre = ? ORDER BY id DESC");
    $afficherquestions->execute(array($_SESSION['id']));
?>