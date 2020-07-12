<?php $this->_title = $post->title(); ?>
<div>
    <h2><?= htmlspecialchars($post->Title()); ?></h2>
    <p><?= $post->Content(); ?></p>
</div>
<br>
<a href='index.php' class="btn btn-primary">Retourner à la page d'accueil</a>
<div id="comments">
    <h3 class="text-center">Commentaires</h3>
    <?php
    if (empty($comments) != TRUE) {
        foreach ($comments as $comment) {
    ?>
            <h4><?= htmlspecialchars($comment->author()); ?></h4>
            <p><?= htmlspecialchars($comment->content()); ?><br />
                <a href="comment/reportComment/<?= ($comment->id()) ?>">signaler le commentaire</a>
            </p>

    <?php
        }
    }
    ?>
    <form method=post action='index.php' class="mt-5 col-lg-6 formLogin text-center">
        <label for="author" class="mt-2">Votre pseudo</label>
        <input type="text" name='author' id="author" class="form-control col-lg-12">
        <label for="content" class="mt-2">Votre commentaire</label>
        <textarea name="content" rows="5" id="content" class="form-control col-lg-12"></textarea>
        <input type='hidden' name='idPost' value=<?= $post->id() ?>>
        <input type="hidden" name='action' value='createComment'>
        <input type="hidden" name='controller' value='comment'>
        <input type="submit" value="envoyer commentaire" class="mt-3 mb-5 btn btn-primary">
    </form>
</div>