<?php
session_start();
require_once('actions/database.php');

//Vérifier si le formulaire est soumis
if (isset($_POST['validate'])) {

    //Vérifier si l'utilisateur a entrer toutes les données
    if (!empty($_POST['email']) && !empty($_POST['mdp'])) {
        
        //Les données de l'utilisateurs
        $email = htmlspecialchars($_POST['email']);
        $mdp = htmlspecialchars($_POST['mdp']);

         //Vérifier si l'utilisateurs existe déja et Vérifier si c'est le bon email
        $membresExist = $connexion->prepare('SELECT * FROM membres WHERE email = ?');
        $membresExist->execute(array($email));
        
        
        if($membresExist->rowCount() > 0){
             
            //Vérifier si c'est le bon mot de passe
            $membreInfo = $membresExist->fetch();
            if(password_verify($mdp, $membreInfo['mdp'])){

                //authentifier l'utilisateur sur le site et récupérer ces données dans des variables globales session
                $_SESSION['auth'] = true;
                $_SESSION['id'] = $membreInfo['id'];
                $_SESSION['nom'] = $membreInfo['nom'];
                $_SESSION['prenom'] = $membreInfo['prenom'];
                $_SESSION['email'] = $membreInfo['email'];

                //redirige l'utilisateur vers la page d'accueil
                header('Location: index.php');

            }else{
            $error = "Mot de passe incorrect!!!";
            }        

        }else{
            $error = "Email incorrect!!!";
        }
    }else{
        $error = "Veuillez compléter tous les champs!!!";
    }
}   

?>