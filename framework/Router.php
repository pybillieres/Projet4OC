<?php

namespace Pierre\P4\Framework;
use Pierre\P4\controller\PostController;


class Router
{

function route(){

if(isset($_GET['action']))
{
    if($_GET['action'] == 'listPost')
    {
        
    }
    elseif($_GET['action'] == 'post')
    {
        if(isset($_GET['id']) && $_GET['id'] > 0)
        {
            $postCtrller = new PostController;
            $postCtrller->post($_GET['id']);
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
    $postCtrller = new PostController;
    $postCtrller->listPosts();
}
}
}