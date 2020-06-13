<?php
namespace Pierre\P4\controller;
use Pierre\P4\Model\CommentManager;
use Pierre\P4\Framework\Controller;


class CommentController extends Controller
{
    function index()
    {

    }
    
    function listComment($postId)
    {
        $commentManager = new CommentManager;
        $listComments = $commentManager->readCommentsById($postId);
        return $listComments;
    }

    function createComment()
    {

    }

    function moderateComment()
    {
        if($this->checkSession())
        {
          
        }
        else
        {
            
        }
    }
}