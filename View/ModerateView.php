<?php $this->_title = "Modération commentaires"; ?>

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




<a href='index.php?controller=connection' class="btn btn-primary">Retourner à la page d'administration</a>
<h1 class="text-center">Modération des commentaires</h1>
<?php
    if (empty($comments) != TRUE) {
        foreach ($comments as $comment) {
    ?>
            <h4 class="mt-5"><?= htmlspecialchars($comment->author()); ?></h4>
            <p><?= htmlspecialchars($comment->content()); ?></p>
            <a href="comment/validcomment/<?=$comment->id()?>" class="btn btn-info mr-2">Conserver</a>
        <a href="index.php?controller=comment&amp;action=moderatecomment&amp;id=<?=$comment->id()?>" class="btn btn-info">Supprimer</a>

    <?php
        }
    }
    else
    {
        ?>
        <p>Aucun commentaire signalé</p><?php
        
    }
    ?>
