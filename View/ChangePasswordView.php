<?php
$this->_title = 'Changer password';
?>

<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarToggler">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="user/changePassword">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="post/createPost">Créer un article</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="comment/moderateComments">Modérer les commentaires</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Connection/logout">Déconnexion</a>
            </li>
          </ul>
        </div>
      </nav>


<a href='index.php?controller=connection' class="btn btn-primary">Retourner à la page d'administration</a>


<form method="post" action='index.php' class="mt-5 col-lg-4 formLogin text-center">
    <fieldset>
        <label for="password">Nouveau mot de passe</label>
        <input type="password" name="password" class="form-control col-lg-12">
        <label for="passwordConfirm">Confirmez votre nouveau mot de passe</label>
        <input type="password" name="passwordConfirm" class="form-control col-lg-12">
        <input type="hidden" name='action' value='confirmPassword'>
        <input type="hidden" name='controller' value='user'>
        <input type="submit" value='Confirmer' class="mt-3 btn btn-primary">
    </fieldset>
</form>