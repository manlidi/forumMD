<?php
require_once('actions/database.php');
require_once('actions/articles/functions.php');
if( isset( $_POST['nom'], $_POST['description'] ) && ( !empty( $_POST['nom'] ) &&  !empty( $_POST['description'] )) ){
    $nom = htmlentities( addslashes( $_POST['nom'] ) );
    $description = htmlentities( addslashes( $_POST['description'] ) );
    $prixUnitaire = htmlentities( addslashes( $_POST['pu'] ) );
    $img = htmlentities( addslashes( $_FILES['img']['name'] ) );
    $nomcat = htmlentities(addslashes($_POST['nomcat']));
    $sql_insertion = $connexion->prepare(
        'INSERT INTO articles(
            nom, descript, prix) 
        VALUES (
            :nom, :descrip, :pu
        )'
    );
    try {
        $sql_insertion->execute(
        array(
            'nom'       => $nom,
            'descrip'   => $description,
            'pu'        => $prixUnitaire
        ));
        $id_art = $connexion->lastInsertId();
        $sql_insertion->closeCursor();

        $sql_insert_img = $connexion->prepare('INSERT INTO img(lien_img, id_article) VALUES(:lien, :id_art)');
        $sql_insert_img->execute( array(
            'lien' =>  $img,
            'id_art' => $id_art
        ) );

        $upload = "../../image/" . $img;
        move_uploaded_file( $_FILES['img']['tmp_name'], $upload );

        $sql_insert_categorie = $connexion->prepare('INSERT INTO categori(nom, id_article) VALUES (:nom, :id_arti)');
        $sql_insert_categorie->execute( array(
            'nom' =>  $nomcat,
            'id_arti' => $id_art
        ) );

    header('Location: vue_article.php');
    exit;
    } catch (\Throwable $th) {
        echo 'Erreur d\'ajout';
    }
}

if( isset( $_REQUEST['actionDelete'] ) ){
    $id = htmlentities( $_GET['id'] );
    deleteArticle( $id );
    header('Location: vue_article.php');
    exit;
}else{
    header('Location: erreur.php');
    exit;
}

?>