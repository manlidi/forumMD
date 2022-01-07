<?php 
session_start();
require_once('actions/questions/articlesAction.php'); 
require_once('actions/questions/publiereponseAction.php');
require_once('actions/questions/afficherreponseAction.php');
?>
<!DOCTYPE html>
<html lang="en">
    <?php include 'include/head.php';?>
<body>
    <?php include 'include/navbar.php'; ?>
    <br><br>

    <div class="container">
    <?php 
       if(isset($error)){
        echo '<p style="color: red;>'.$error.'</p>';
        }

        if(isset($qdp)){
            ?>
            <section class="show-content">
                <div class="card">
                <h6><?= $qt; ?></h6>
                <hr>
                <p>
                    <?= $qd; ?><br>
                    <?= $qc; ?>
                </p>
                <small><?= '<a href="profil.php?id='.$qidm.'">'.$qemm . '</a> ' . $qdp; ?></small>
                </div>
            </section>
            <br>
                <section class="show-answers">
                <?php
                        while($res = $sel->fetch()){
                            ?>
                                <div class="card">
                                    <div class="card-header">
                                        <a href="profil.php?id=<?= $res['id_membre'] ?>"><?= 'Réponse de'. ' ' . $res['email_membre']; ?></a>
                                    </div>
                                    <div class="card-body">
                                        <?= $res['contenu'] ?>
                                    </div>
                                </div>
                                <br>
                            <?php
                        }
                    ?>
                    <br>
                    <form class="form-group" method="POST"> 
                        <div class="mb-3">
                            <label for="rep">Répondre</label>
                            <textarea name="reponse" class="form-control"></textarea>
                            <br>
                            <button class="btn btn-success" name="validate" type="submit">Répondre</button>
                        </div>
                    </form>
                </section>
            <?php
        }
    ?>
    </div>
</body>
</html>