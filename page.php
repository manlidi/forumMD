<?php 
require_once('actions/articles/functions.php');
if( isset( $_REQUEST['id'] ) && !empty( $_REQUEST['id'] ) ){
    $id = htmlentities( $_REQUEST['id'] );
    if( get_article( $id ) != null){
        $affiche = get_article( $id );
        ?>
        <!DOCTYPE html>
        <html lang="en">
        
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
            <title>Forum</title>
        </head>
        
        <body>
            <div class="jumbotron">
                <h3 class="text-center"><?= $affiche['nom'] ?></h3><hr>
                <div class="row">
                    <di class="col-sm-2"></di>
                    <div class="col-sm-8">
                    <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-6"><img class="card-img-top" src="image/<?= get_link_img( $affiche['id'] ) ?>" alt="Card image cap"></div>
                        </div><hr>
                        <h5>Description</h5>
                        <p><?= $affiche['descript'] ?></p>
                        <div class="row">
                            <p class="alert alert-success"><strong>Prix Unitaire : <?= $affiche['prix'] ?></strong></p>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </body>
        </htm>
            <?php 
    }else{
        header('Location: erreur.php');
    } 
}else{
    header('Location: erreur.php');
}