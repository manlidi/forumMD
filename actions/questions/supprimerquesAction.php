<?php

    session_start();
    if(!isset($_SESSION['auth'])){
        header('Location: ../../login.php');
    }
    require_once('../database.php');

    if(isset($_GET['id']) && !empty($_GET['id'])){
        $idquestion = $_GET['id'];
        $quesexistes = $connexion->prepare("SELECT * FROM questions WHERE id = ?");
        $quesexistes->execute(array($idquestion));

        if($quesexistes->rowCount() > 0){
            $infomembre = $quesexistes->fetch();
            if($infomembre['id_membre'] == $_SESSION['id']){
                 $delete = $connexion->prepare("DELETE FROM questions WHERE id = ?");
                 $delete->execute(array($idquestion));

                 header('Location: ../../questions.php');
            }else{
                echo "Vous n'etes pas l'auteur de la question, vous ne pouvez donc pas la supprimer";
            }
        }else{
            echo "La question n'existe pas";
        }
    }else{
        echo "Aucune question n'a été trouver!";
    }
?>