<?php
    session_start();
    require_once('actions/database.php');

    /**
     * si l'id de la question est bien passé en paramètre
     */
    if(isset($_GET['id']) && !empty($_GET['id'])){
        $idques = $_GET['id'];
        /**
         * Si la question existe selectionné la
         */
        $questionsexistes = $connexion->prepare("SELECT * FROM questions WHERE id = ?");
        $questionsexistes->execute(array($idques));

        if ($questionsexistes->rowCount() > 0) {
            /**
             * Récupérer les données de la question
             */
            $quesinfo = $questionsexistes->fetch();
            if ($quesinfo['id_membre'] == $_SESSION['id']) {
                $ti = $quesinfo['titre'];
                $des = $quesinfo['descriptions'];
                $con = $quesinfo['contenu'];

                $des = str_replace('<br />', '', $des);
                $con = str_replace('<br />', '', $con);

            }else{
                $error = "Vous n'etes pas l'auteur de cette question. Vous n'avez pas le droit de la modifier!";
            }
        }else{
            $error = "Aucune question trouvée!";
        }

    }else{
        $error = "Aucune question trouvée!";
    }
?>