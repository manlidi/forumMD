<?php
    session_start();
    require_once('actions/users/profilusersAction.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php
    include 'include/head.php';
?>
<body>
<?php
    include 'include/navbar.php';
?>
<br><br>
<div class="container">
<?php
        if(isset($error)){
            echo '<p style="color: red;>'.$error.'</p>';
        }

        if(isset($ensemblequestion)){
            ?>
                <div class="card">
                    <div class="card-body">
                        <h5><?= $email; ?></h5>
                        <hr>
                        <p><?= $nom .' ' . $prenom; ?></p>
                    </div>
                </div>
                <br>
            <?php
            while($en = $ensemblequestion->fetch()){
                ?>
                    <div class="card">
                        <div class="card-header">
                            <?= $en['titre']; ?>
                        </div>
                        <div class="card-body">
                            <?= $en['descriptions']; ?><br>
                            <?= $en['contenu']; ?>
                        </div>
                        <div class="card-footer">
                            Par <?= $en['email_membre']; ?> le <?= $en['datpublication']; ?>
                        </div>
                    </div>
                    <br>
                <?php
            }
        }
    ?>
</div>

</body>
</html>