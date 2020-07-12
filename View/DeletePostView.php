<?php
$this->_title = 'Supprimer article';
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


<p>Etes vous sur de vouloir supprimer <?= $post->title(); ?> définitivement ? </p>
<a href="index.php?controller=connection" class="btn btn-info mr-2">Retour</a>
<a href="index.php?controller=post&amp;action=confirmDelete&amp;id=<?= $post->id(); ?>" class="btn btn-info mr-2">Supprimer</a>