<?php

require_once('actions/database.php');

if(isset($_POST['validate'])){

    if (!empty($_POST['titre']) && !empty($_POST['descriptions']) && !empty($_POST['contenu'])) {

           //Les données de la question
           $ntitre = htmlspecialchars($_POST['titre']);
           $ndescriptions = nl2br(htmlspecialchars($_POST['descriptions']));
           $ncontenu = nl2br(htmlspecialchars($_POST['contenu']));
         
           $edit = $connexion->prepare("UPDATE questions SET titre = ?, descriptions = ?, contenu = ? WHERE id = ?");
           $edit->execute(array($ntitre, $ndescriptions, $ncontenu, $idques));

           header('Location: questions.php');
   
    }else{
        $error = "Veuillez compléter tous les champs!";
    }
}

?>