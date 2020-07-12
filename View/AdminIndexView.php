
<?php $this->_title = "Accueil Administration"; ?>

<h1 class="text-center">Administration</h1>

    <div class="container-fluid">
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

<?php

if (empty($posts) != TRUE) {
foreach ($posts as $post)
{
    ?>
    <div class="bg-light p-3 rounded">
        <h2><a href="index.php?controller=post&amp;action=post&amp;id=<?=($post->id())?>" class="text-dark"><?= htmlspecialchars($post->Title());?></a></h2>
        <a href="index.php?controller=post&amp;action=editPost&amp;id=<?=($post->id())?>" class="btn btn-info mr-2">Modifier</a>
        <a href="post/deletePost/<?=($post->id())?>" class="btn btn-info">Supprimer</a>
    </div>
    <br>
    <?php
}
}
elseif(empty($posts) == TRUE)
{
?>
<p>Pas encore d'article publié</p>
<?php
}
?>