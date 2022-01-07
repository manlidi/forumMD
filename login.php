<?php
    require_once('actions/users/loginAction.php');
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
<br><br>
    <form method="POST" action="" class="container">

    <?php
        if(isset($error)){
            echo '<p style="color: red;>'.$error.'</p>';
        }
    ?>
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control"  name="email">
        </div>
        <div class="mb-3">
            <label for="mdp">Mot de passe</label>
            <input type="password" class="form-control"  name="mdp"><br>
        </div>
        <button type="submit" name="validate" class="btn btn-primary">Se connecter</button>
        <br>
        <br> 
        <a href="signup.php"><p>Vous n'avez pas un compte? Inscrivez vous!</p></a>
    </form>
</body>
</html>