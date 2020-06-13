
<?php $this->_title = "Accueil Administration"; ?>

<h1>Administration</h1>
<a href='index.php?controller=user&amp;action=changePassword'>Modifier Password</a><br/>
<a href="index.php?controller=post&amp;action=createPost">Créer nouveau Post</a>
<?php
foreach ($posts as $post)
{
    ?>
    <div>
        <h2><a href="index.php?controller=post&amp;action=post&amp;id=<?=($post->id())?>"><?= htmlspecialchars($post->Title());?></a></h2>
        <br/><a href="index.php?controller=post&amp;action=editPost&amp;id=<?=($post->id())?>">Modifier</a>
        <br/><a href="index.php?controller=post&amp;action=deletePost&amp;id=<?=($post->id())?>&amp;title=<?=($post->title())?>">Supprimer</a>
    </div>
    <br>
    <?php
}
?>