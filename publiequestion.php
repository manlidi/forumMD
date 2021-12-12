<?php
require('actions/publiequestionAction.php');
require('actions/securiteAction.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php
    include 'include/head.php';
?>
<body>

<?php include 'include/navbar.php'; ?>

<h1>Questions</h1>
<div class="separation"><hr></div>

    <form method="POST" action="" class="container">

    <?php
        if(isset($error)){
            echo '<p style="color: red;">'.$error.'</p>';
        }elseif(isset($success)){
            echo '<p style="color: green;">'.$success.'</p>';  
        }
    ?>
        <div class="mb-3">
            <label for="titre">Titre de la question</label>
            <input type="titre" class="form-control" id="titre" name="titre">
        </div>
        <div class="mb-3">
            <label for="descriptions">Description de la question</label>
            <textarea class="form-control" id="descriptions" name="descriptions"></textarea>
        </div>
        <div class="mb-3">
            <label for="contenu">Contenu de la question</label>
            <textarea class="form-control" id="contenu" name="contenu"></textarea>
        </div>
        <button type="submit" name="validate" class="btn btn-primary">Publier la question</button>
       
    </form>
</body>
</html>