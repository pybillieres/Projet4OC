<?php
$this->_title = 'Supprimer article';
?>

<p>Etes vous sur de vouloir supprimer <?=$title?> définitivement ? id= <?=$id?> </p>
<form method=post action='index.php'>
    <label for="confirm">Confirmer</label>
    <input type='radio' id='confirm' name='action' value='confirmDelete'>
    <input type="hidden" name='controller' value="Post">
    <input type="hidden" name='id' value=<?=$id?>>
    <input type="submit">
</form>