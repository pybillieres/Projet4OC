<?php

namespace Pierre\P4\controller;
use Pierre\P4\controller\CommentController;
use Pierre\P4\Controller\ConnectionController;
use Pierre\P4\Framework\Controller;
use Pierre\P4\Model\CommentManager;
use Pierre\P4\Model\Post;
use Pierre\P4\model\PostManager;
use Pierre\P4\model\View;


Class PostController extends Controller
{

function index()
{
    $this->listposts();
}

function post()
{
    $postManager = new PostManager;
    $id=$this->request->Parameter('id');
    $post = $postManager->readPost($id);
    $commentController = new CommentController;
    $comments = $commentController->listComment($id);
    var_dump($_SESSION);
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

function createPost()
{
    if($this->checkSession())
    {
        $view = new View;
        $view->render('CreatePostView');

    }
    else
    {

    }
}

function sendCreate()
{
    if($this->checkSession())
    {
        $title=$this->request->Parameter('title');
        $content=$this->request->Parameter('content');
        $date=date("Y-m-d H:i");
        $data=['title'=>$title, 'content'=>$content, 'date'=>$date];
        $post= new Post($data);
        $postManager = new PostManager;
        $postManager->CreatePost($post); 
        $this->adminIndex();
    }
    else
    {
        echo 'pas de seesion';
        var_dump($_SESSION);
    }       
}

function editPost()
{
    if($this->checkSession())
    {
        $postManager = new PostManager;
        $id=$this->request->Parameter('id');
        $post = $postManager->readPost($id);
        $view = new View;
        $view ->render('EditPostView',['post'=>$post]);
        /*if($this->request->Parameter('action') === 'sendUpdate')
        {
            echo 'modif envoyé';
        }*/
    }
    else
    {
        echo 'pas de seesion';
        var_dump($_SESSION);
    }
}

function sendUpdate()
{
    $id=$this->request->Parameter('id');
    $title=$this->request->Parameter('title');
    $content=$this->request->Parameter('content');
    $date=$this->request->Parameter('date');
    $data=['id'=>$id, 'title'=>$title, 'content'=>$content, 'date'=>$date];
    $post= new Post($data);
    $postManager = new PostManager;
    $postManager->updatePost($post);
    header("/index.php?controller=connection");

}

function deletePost()
{
    if($this->checkSession())
    {
        var_dump($this->request);
        $id =$this->request->Parameter('id');
        $title = $this->request->Parameter('title');
        $view = new View;
        $view->render('DeletePostView', ['id'=>$id, 'title'=>$title]);
    }
    else
    {
        echo 'pas de seesion';
        var_dump($_SESSION);
    }
}

function confirmDelete()
{
    if($this->checkSession())
    {
        $id=$this->request->Parameter('id');
        $postManager = new PostManager;
        $commentManager = new CommentManager;
        $postManager->deletePost($id);
        $commentManager->deleteComment($id);
        $this->adminIndex();

    }
    else
    {
        echo 'pas de seesion';
        var_dump($_SESSION);
    }
}

function adminIndex()
{
    var_dump($this);
    $controller = new ConnectionController;
    $controller->indexAdmin();
}

}


