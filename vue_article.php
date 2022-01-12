<?php
require_once('actions/articles/functions.php');
?>
<!DOCTYPE html>
<html lang="fr">
<?php
    include 'include/head.php';
    ?>
<body>
<?php
    include 'include/navbar.php';
    ?>
    <!--================Contact Area =================-->
    <div class="jumbotron">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="text-center">Les articles</h3>
                <a href="ajout_article.php"><button class="btn btn-outline-warning">AJOUTER ARTICLE</button></a>
                <div class="row pt-5">
                    <?php
                    foreach (listeArticle() as $key => $value) {
                    ?>
                        <div class="col-sm-4">
                            <div class="card">
                                <?php 
                                    if( get_link_img( $value['id'] ) != '' ){
                                        ?>
                                        <img class="card-img-top" src="image/<?= get_link_img( $value['id'] ) ?>" alt="Card image cap">
                                        <?php
                                    }
                                ?>
                                <div class="card-body">
                                    <a href="page.php?id=<?= $value['id'] ?>"><h5 class="card-title"><?= $value['nom'] ?></h5></a>
                                    <p class="card-text"><?= $value['descript'] ?></p>
                                    <a href="#" class="btn btn-primary">Prix Unitaire: <?= $value['prix'] ?></a>
                                    <a href="actions/articles/ajoutarticleAction.php?id=<?= $value['id'] ?>&actionDelete" class="btn btn-outline-danger">Supprimer</a>
                                </div>
                            </div>
                            <hr>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>

        </div>
    </div>
    <!--================Contact Area =================-->
</body>
</htm>