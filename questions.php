<?php 
require_once('actions/questions/affichequestionAction.php'); 
require_once('actions/users/securiteAction.php');
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
    <?php 
        while($ques = $afficherquestions->fetch()){
            ?>
                <div class="card">
                    <h5 class="card-header">
                        <a href="article.php?id=<?= $ques['id']; ?>">
                            <?= $ques['titre']; ?>
                        </a>
                    </h5>
                    <div class="card-body">
                        <p class="card-text"> 
                            <?php
                                echo $ques['descriptions'];
                            ?>
                        </p>
                        <a href="modifiequestions.php?id=<?php echo $ques['id']; ?>" class="btn btn-warning">Modifier la question</a>
                        <a href="actions/questions/supprimerquesAction.php?id=<?php echo $ques['id']; ?>" class="btn btn-danger">Supprimer la question</a>
                    </div>
                </div>
                <br>
            <?php 
        }
    
    ?>
    </div>
</body>
</html>