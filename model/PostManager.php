<?php

namespace Pierre\P4\Model;
use Pierre\P4\framework\Manager;

class PostManager extends Manager
{
    public function createPost($title, $content, $date)
    {
        $req = $this->_db->prepare('INSERT TO posts(title, content, date) VALUES(:title, :content, :date) ');
        $req->execute(array (
            ':title'=>$title,
            ':content'=>$content,
            ':date'=>$date));
        
    }

    public function readPost($id)//verifier le parametre avant de lancer la requete ?!
    {
        $req = $this->_db->prepare('SELECT * FROM posts WHERE id=?'); //* pose pb ou pas ?
        $req->execute(array($id));
        while($row = $req->fetch())
        {
            $post = new Post($row);
        }
        return $post;
    }

    public function readPosts() //affiche les 10 derniers billets
    {
        $req = $this->_db->prepare('SELECT * FROM posts ORDER BY date DESC LIMIT 0,10'); 
        $req->execute();
        while($row = $req->fetch())
        {
            $post = new Post($row);
            $posts[] = $post;
        }

        return $posts;
    }

    public function updatePost(Post $post)
    {

    }

    public function deletePost(Post $post)
    {

    }

    public function count()
    {

    }

}

