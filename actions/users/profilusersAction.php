<?php
    require_once('actions/database.php');

    if(isset($_GET['id']) && !empty($_GET['id'])){
        $idusers = $_GET['id'];
        $usersexistes = $connexion->prepare("SELECT * FROM membres WHERE id = ?");
        $usersexistes->execute(array($idusers));

        if($usersexistes->rowCount() > 0){
            $usersinfo = $usersexistes->fetch();
            $nom = $usersinfo['nom'];
            $prenom = $usersinfo['prenom'];
            $email = $usersinfo['email'];

            $ensemblequestion = $connexion->prepare("SELECT * FROM questions WHERE id_membre = ? ORDER BY id DESC");
            $ensemblequestion->execute(array($idusers));
        }else{
            $error = "Aucun utilisateur trouver!";
        }
    }else{
        $error = "Aucun utilisateur trouver!";
    }
?>