<?php

namespace Pierre\P4\Model;
use Pierre\P4\Framework\Manager;

class PostManager extends Manager
{
    public function createPost(Post $post)
    {
$req = $this->_db->prepare('INSERT INTO posts(title, content, date) VALUES(:title, :content, :date) ');
        $req->execute(array (
            ':title'=>$post->title(),
            ':content'=>$post->content(),
            ':date'=>$post->date()));
        
    }

    public function readPost($id)
    {
        $req = $this->_db->prepare('SELECT * FROM posts WHERE id=?');
        $req->execute(array($id));
        while($row = $req->fetch())
        {
            $post = new Post($row);
        }
        return $post;
    }

    public function readPosts()
    {
        $req = $this->_db->prepare('SELECT * FROM posts ORDER BY date DESC LIMIT 0,10'); 
        $req->execute();
        while($row = $req->fetch())
        {
            $post = new Post($row);
            $posts[] = $post;
        }

        if(empty($posts) != TRUE)
        {
        return $posts;   
        }

    }

    public function updatePost(Post $post)
    {
        $req = $this->_db->prepare('UPDATE posts SET title=:title, content=:content WHERE id=:id'); 
        $req->execute(array(':title'=>$post->title(),
                            ':content'=>$post->content(),
                            ':id'=>$post->id()));

        

    }

    public function deletePost($id)
    {
        $req = $this->_db->prepare('DELETE FROM posts WHERE id=:id');
        $req->execute(array(':id'=>$id));
    }

}

