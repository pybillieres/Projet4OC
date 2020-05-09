
<?php $this->_title = "Accueil"; ?>

<h1>Mon blog</h1>
<p>En construction</p>
<?php
foreach ($posts as $post)
{
    ?>
    <div>
        <h2><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($post->Id());?>"><?= htmlspecialchars($post->Title());?></a></h2>
        <p><?= htmlspecialchars($post->Content());?></p>
        <p>Créé le : <?= htmlspecialchars($post->Date());?></p>
    </div>
    <br>
    <?php
}
?>