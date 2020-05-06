<?php //ROUTEUR

namespace Pierre\P4;
use Pierre\P4\Autoloader;

require_once 'Autoloader.php';
require_once 'controller/PostController.php';
require_once 'controller/HomeController.php';

Autoloader::register();

if(isset($_GET['action']))
{
    if($_GET['action'] == 'listPost')
    {
        
    }
    elseif($_GET['action'] == 'post')
    {
        if(isset($_GET['id']) && $_GET['id'] > 0)
        {
            controller\post($_GET['id']);
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
    //controller\post(1);
    Controller\listPosts();//comment eviter de devoir préciser le chemin du namespace
}
