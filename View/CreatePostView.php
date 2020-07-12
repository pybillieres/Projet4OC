<?php
$this->_title = 'Nouvel article';
?>

<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarToggler">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="user/changePassword">Changer mot de passe</a>
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

      <a href='index.php?controller=connection' class="btn btn-primary mb-5">Retourner à la page d'administration</a>
      
<form method=post action='index.php'>
    <label for="title">Titre:</label>
    <input type="text" name='title' class='form-control'><br />
    <textarea class="mceEditor" name="content" rows="10" cols="200">
    </textarea>
    <input type='hidden' name='date'>
    <input type="hidden" name='action' value='sendCreate'>
    <input type="hidden" name='controller' value='post'>
    <input type="submit" value="Créer le post" class="btn btn-primary mt-2">
</form>