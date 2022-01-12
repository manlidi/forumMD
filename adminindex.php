<?php
session_start();
require_once ('actions/users/securiteAction.php');
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
    <a href="ajout_article.php">Ajouter un article</a>
</body>
</html>