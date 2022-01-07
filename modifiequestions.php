<?php
    require_once('actions/questions/recupereinfomodifAction.php');
    require_once('actions/questions/modificationAction.php');
    require_once('actions/users/securiteAction.php');
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
    <div class="container">
        <?php
            if(isset($error)){
                echo '<p style="color: red;">'.$error.'</p>';
            }elseif(isset($success)){
                echo '<p style="color: green;">'.$success.'</p>';  
            }
        ?>
        <?php if(isset($con)){
            ?>
                <form method="POST">

                    <div class="mb-3">
                        <label for="titre">Titre de la question</label>
                        <input type="titre" class="form-control" value="<?= $ti; ?>" id="titre" name="titre">
                    </div>
                    <div class="mb-3">
                        <label for="descriptions">Description de la question</label>
                        <textarea class="form-control" id="descriptions" name="descriptions"><?= $des; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="contenu">Contenu de la question</label>
                        <textarea class="form-control" id="contenu" name="contenu"><?= $con; ?></textarea>
                    </div>
                    <button type="submit" name="validate" class="btn btn-primary">Modifier la question</button>

                </form> 
            <?php
        } 
      ?>
    </div>
   
</body>
</html>