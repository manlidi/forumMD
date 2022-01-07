<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">ForumMD</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Accueil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="publiequestion.php">Publier une question</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="questions.php">Questions</a>
      </li>
      <?php
        if(isset($_SESSION['auth'])){
          ?>
            <li class="nav-item">
              <a class="nav-link" href="profil.php?id=<?= $_SESSION['id']; ?>">Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="actions/users/deconnexionAction.php">Deconnexion</a>
            </li>
          <?php
        }
      ?>
    </ul>
  </div>
</nav>