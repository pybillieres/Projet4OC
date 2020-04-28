<?php //ROUTEUR
require('postController.php');//bon ou autre moyen mieux ?

if(isset($_GET['action']))
{
    if($_GET['action'] == 'listPost')
    {
        listPosts();
    }
    elseif($_GET['action'] == 'post')
    {
        if(isset($_GET['id']) && $_GET['id'] > 0)//faut il verifier que id est de type int ?
        {
            post($_GET['id']);
        }
        else
        {
            echo 'pas d\'ID valide';
        }

    }
    else
    {

    }
}

else
{
    post(1);

}
