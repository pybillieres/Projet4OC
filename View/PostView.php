<?php $this->_title = $post->title(); ?>
<h1>Blog</h1>
<div>
    <h2><?= htmlspecialchars($post->Title());?></h2>
    <p><?= htmlspecialchars($post->Content());?></p>
</div>
<br>
<a href="index.php">Retour à l'accueil</a>
<div id="comments" class="text-left" style="margin-left: 50px">
    <h3>Commentaires</h3>
    <?php
    if(empty($comments) != TRUE){
        foreach ($comments as $comment)
        {
            ?>
            <h4><?= htmlspecialchars($comment->author());?></h4>
            <p><?= htmlspecialchars($comment->content());?></p>
            <?php
        }
    }
    ?>
</div>

