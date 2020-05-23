<?php

namespace Pierre\P4\controller;
use Pierre\P4\controller\CommentController;
use Pierre\P4\model\PostManager;
use Pierre\P4\model\View;


Class PostController
{
function post($id)
{
    $postManager = new PostManager;
    $post = $postManager->readPost($id);
    $commentController = new CommentController;
    $comments = $commentController->listComment($id);
    $view = new View;
    $view ->render('PostView',['post'=>$post, 'comments'=>$comments]);
}

function listPosts()
{
    $postManager = new PostManager;
    $posts = $postManager->readPosts();
    $view = new View;
    $view ->render('HomeView',['posts'=>$posts]);
}
}


