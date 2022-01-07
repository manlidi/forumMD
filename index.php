<?php
session_start();
require_once('actions/questions/searchquestionAction.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php
    include 'include/head.php';
?>
<body>
<?php include 'include/navbar.php'; ?>
<br><br>
    <div class="container">
        <form method="GET">
            <div class="form-group row">
                <div class="col-8">
                    <input type="search" name="recherche" class="form-control">
                </div>
                <div class="col-4">
                    <button type="submit" class="btn btn-success">Rechercher</button>
                </div>
            </div>
        </form>

        <br>
        <?php
            while($question = $allquestions->fetch()){
                ?>
                    <div class="card">
                        <div class="card-header">
                            <a href="article.php?id=<?= $question['id']; ?>">
                                <?= $question['titre']; ?>
                            </a>
                        </div>
                        <div class="card-body">
                            <?= $question['descriptions']; ?>
                        </div>
                        <div class="card-footer">
                            Publié par <a href="profil.php?id=<?= $question['id_membre']; ?>"><?= $question['email_membre']; ?></a>  le <?= $question['datpublication']; ?>
                        </div>
                    </div>
                    <br>
                <?php
            }
        ?>
    </div>
</body>
</html>