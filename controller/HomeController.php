<?php
namespace Pierre\P4\controller;
use Pierre\P4\model\PostManager;

function listPosts()
{
    $postManager = new PostManager;
    $posts = $postManager->readPosts();
    var_dump($posts);
    foreach($posts as $post)
    {
        echo $post['title'].'<br/>';
    }
    //require(listView)
}