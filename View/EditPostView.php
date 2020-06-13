<?php
$this->_title = 'Modifier article';
?>

<form method=post action='index.php'>
    <input type="text" name='title' value=<?=$post->title()?>><br/>
    <textarea name="content" rows="10" cols="200">
        <?=$post->content()?>
    </textarea>
    <input type="hidden" name='id' value=<?=$post->id()?> >
    <input type='hidden' name='date' value=<?=$post->date()?>>
    <input type="hidden" name='action' value='sendUpdate' > 
    <input type="hidden" name='controller' value='post'>
    <input type="submit" value="enregister la modification">
</form>