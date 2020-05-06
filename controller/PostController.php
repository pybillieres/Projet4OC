<?php

namespace Pierre\P4\controller;
use Pierre\P4\model\PostManager;



function post($id)
{
    $postManager = new PostManager;
    $post = $postManager->readPost($id);
    echo $post->title();
    //require(postView)
}




