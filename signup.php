<?php
require('actions/signupAction.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php
    include 'include/head.php';
?>
<body>
<h1>Formulaire d'Inscription</h1>
<div class="separation"><hr></div>

    <form method="POST" action="" class="container">

    <?php
        if(isset($error)){
            echo '<p style="color: red;>'.$error.'</p>';
        }
    ?>
        <div class="mb-3">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom">
        </div>
        <div class="mb-3">
            <label for="prenom">Prénom</label>
            <input type="text" class="form-control" id="prenom" name="prenom">
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="civilite">Civilité</label><br>
            <input name="civilite" value="m" checked="" type="radio">Homme
            <input name="civilite" value="f" type="radio">Femme
        </div>
        <div class="mb-3">
            <label for="mdp">Mot de passe</label>
            <input type="password" class="form-control" id="mdp" name="mdp"><br>
        </div>
        <button type="submit" name="validate" class="btn btn-primary">S'inscrire</button>
        <br>
        <br> 
        <a href="login.php"><p>Vous avez déja un compte? Connectez vous!</p></a>
    </form>
</body>
</html>