<?php

namespace Pierre\P4\controller;
use Pierre\P4\model\PostManager;
use Pierre\P4\model\View;



function post($id)
{
    $postManager = new PostManager;
    $post = $postManager->readPost($id);
    echo $post->title();
    $view = new View('PostView',['PostView'=>$post]);
}

function listPosts()
{
    $postManager = new PostManager;
    $posts = $postManager->readPosts();
    //var_dump($posts);
    /*foreach($posts as $post)
    {
        echo $post->title().'<br/>';
    }*/
    $view = new View;
    $view ->render('HomeView',['posts'=>$posts]);
}




