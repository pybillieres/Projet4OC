<?php
//penser à mettre les closes cursor dans le manager
//require('postManager.php'); //require once ? Autre option (namespace ?)

function loadClass($class)
{
    require $class.'.php';
}

spl_autoload_register('loadClass'); //pourquoi il n'appelle pas loadclass comme une fonction ? Ou le placer


function listPosts()
{
    $postManager = new PostManager;
    $posts = $postManager->readPosts();
    //comment traiter mes données ici ? point sur fetch() et ou le mettre

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




