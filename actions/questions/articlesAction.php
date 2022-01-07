<?php
    require_once('actions/database.php');

    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = $_GET['id'];
        $qu = $connexion->prepare("SELECT * FROM questions WHERE id = ?");
        $qu->execute(array($id));

        if($qu->rowCount() > 0){
            $qinfo = $qu->fetch();

            $qt = $qinfo['titre'];
            $qd = $qinfo['descriptions'];
            $qc = $qinfo['contenu'];
            $qidm = $qinfo['id_membre'];
            $qemm = $qinfo['email_membre'];
            $qdp = $qinfo['datpublication'];
        }else{
            $error = "Aucune question n'a été trouvée!!";
        }
    }else{
        $error = "Aucune question n'a été trouvée!!";
    }

?>