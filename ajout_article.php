<?php
session_start();
require_once ('actions/users/securiteAction.php');
require_once('actions/articles/ajoutarticleAction.php');
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
        <a href="vue_article.php"><button class="btn btn-outline-warning">Accueil</button></a>
            <div class="col-sm-12 text-center">
                <h4>AJOUTER UN ARTICLE</h4>
                <hr class="colorgraph">
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <form method="POST" class="row contact_form" enctype="multipart/form-data">
                            <input type="hidden" value="add_produit" name="action" id="action">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Le nom de l'article" required />
                                </div>
                                <br>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="nomcat" name="nomcat" placeholder="La categorie de l'article" required />
                                </div>
                                <br>
                                <div class="form-group">
                                    <textarea class="form-control" id="description" name="description" rows="2" placeholder="Description sur l'article..." required></textarea>
                                </div>
                                <br>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <input type="number" name="pu" id="pu" class="form-control" placeholder="Prix Unitaire" aria-label="Prix Unitaire" aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary" type="button">FCFA</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="image">Image de l'article</label>
                                    <input type="file" class="form-control" id="img" name="img" />
                                </div>
                                <br>
                                <div class="form-group">
                                    <button type="submit" value="submit" class="btn btn-primary">
                                        AJOUTER ARTICLE
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================Contact Area =================-->
</body>
</htm>