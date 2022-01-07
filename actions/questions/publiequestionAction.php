<?php
session_start();
require('actions/database.php');

//Vérifier si le formulaire est soumis
if (isset($_POST['validate'])) {

     //Vérifier si l'utilisateur a entrer toutes les données
     if (!empty($_POST['titre']) && !empty($_POST['descriptions']) && !empty($_POST['contenu'])) {
        
        //Les données de la question
        $titre = htmlspecialchars($_POST['titre']);
        $descriptions = nl2br(htmlspecialchars($_POST['descriptions']));
        $contenu = nl2br(htmlspecialchars($_POST['contenu']));
        $date = date('d/m/Y');
        $idmembres = $_SESSION['id'];
        $emailmembres = $_SESSION['email'];

        //faire l'insertion
        $insertquestion = $connexion->prepare('INSERT INTO `questions`(`titre`, `descriptions`, `contenu`, `id_membre`, `email_membre`, `datpublication`) VALUES(?, ?, ?, ?, ?, ?)');
        $insertquestion->execute(array($titre, $descriptions, $contenu, $idmembres, $emailmembres, $date));
    
        $success = "Votre question a bien été enregistrée!";
    
    } else {
    $error = "Veuillez compléter tous les champs!";
    }
}
?>