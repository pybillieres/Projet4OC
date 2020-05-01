<?php //ROUTEUR
require('controller/postController.php');
require('model/Autoloader.php');
Autoloader::register();


if(isset($_GET['action']))
{
    if($_GET['action'] == 'listPost')
    {
        listPosts();
    }
    elseif($_GET['action'] == 'post')
    {
        if(isset($_GET['id']) && $_GET['id'] > 0)
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
