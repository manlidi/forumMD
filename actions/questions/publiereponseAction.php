<?php

require_once('actions/database.php');

if(isset($_POST['validate'])){
    if(!empty($_POST['reponse'])){
        $reponse = nl2br(htmlspecialchars($_POST['reponse']));

        $insert = $connexion->prepare("INSERT INTO reponse(id_membre, email_membre, id_question, contenu) VALUES (?, ?, ?, ?)");
        $insert->execute(array($_SESSION['id'], $_SESSION['email'], $_GET['id'], $reponse));
    }else{
        $error = "Veuillez entrer votre réponse!";
    }
}


?>