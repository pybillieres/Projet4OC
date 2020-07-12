<?php

namespace Pierre\P4\Controller;

use Pierre\P4\Model\CommentManager;
use Pierre\P4\Framework\Controller;
use Pierre\P4\Model\Comment;
use Pierre\P4\model\View;


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
        $author = $this->request->parameter('author');
        $content = $this->request->parameter('content');
        $date = date("Y-m-d H:i");
        $idPost = $this->request->Parameter('idPost');
        $data = ['author' => $author, 'content' => $content, 'date' => $date, 'idPost' => $idPost];
        $comment = new Comment($data);
        $manager = new CommentManager;
        $manager->createComment($comment);
        var_dump($idPost);
        $this->redirect('post', 'post', $idPost);
    }

    function reportComment()
    {
        $id = $this->request->Parameter('id');
        $commentManager = new CommentManager;
        $comment = $commentManager->readCommentById($id);
        $comment->setReported(1);
        $commentManager->updateComment($comment);
        $view = new View;
        $view->render('ReportCommentView', ['comment' => $comment]);
    }

    function moderateComments()
    {
        if ($this->checkSession()) {
            $commentManager = new CommentManager;
            $comments = $commentManager->readReportedComments();
            $view = new View;
            $view->render('ModerateView', ['comments' => $comments]);
        } else {
            $this->redirect('connection');
        }
    }

    function validComment()
    {
        if ($this->checkSession()) {
            $id = $this->request->Parameter('id');
            $commentManager = new CommentManager;
            $comment = $commentManager->readCommentById($id);
            $comment->setReported(0);
            $commentManager->updateComment($comment);
            $this->redirect('comment', 'moderateComments');
        } else {
            $this->redirect('connection');
        }
    }

    function moderateComment()
    {
        if ($this->checkSession()) {
            $id = $this->request->Parameter('id');
            $commentManager = new CommentManager;
            $commentManager->deleteComment($id);
            $this->redirect('comment', 'moderateComments');
        } else {
            $this->redirect('connection');
        }
    }
}
