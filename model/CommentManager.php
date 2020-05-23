<?php

namespace Pierre\P4\Model;
use Pierre\P4\framework\Manager;
use Pierre\P4\Model\Comment;

class CommentManager extends Manager
 {
    function readCommentsById($id)
    {
        $req = $this->_db->prepare('SELECT * FROM comments WHERE idPost=?');
        $req->execute(array($id));
        while($row = $req->fetch())
        {
            $comment = new Comment($row);
            $comments[] = $comment;
        }
        if(isset($comments)){
            return $comments;     
        }
    }
    
    public function createComment()
    {

    }

    public function updateComment()
    {

    }

    public function deleteComment()
    {

    }
 }