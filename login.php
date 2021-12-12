<?php
    require('actions/loginAction.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php
    include 'include/head.php';
?>
<body>
<h1>Formulaire de connexion</h1>
<div class="separation"><hr></div>

    <form method="POST" action="" class="container">

    <?php
        if(isset($error)){
            echo '<p style="color: red;>'.$error.'</p>';
        }
    ?>
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="mdp">Mot de passe</label>
            <input type="password" class="form-control" id="mdp" name="mdp"><br>
        </div>
        <button type="submit" name="connect" class="btn btn-primary">Se connecter</button>
        <br>
        <br> 
        <a href="signup.php"><p>Vous n'avez pas un compte? Inscrivez vous!</p></a>
    </form>
</body>
</html>