<?php
//penser à mettre les closes cursor dans le manager
require('postManager.php'); //require once ?

function listPosts()
{
    $postManager = new PostManager;
    $posts = $postManager->readPosts();

    //require(listView)
}

function post($id)
{
    $postManager = new PostManager;
    $post = $postManager->readPost($id);//a remplacer par un get
    $data = $post->fetch();
    echo $data['title'];
    //require(postView)
}




