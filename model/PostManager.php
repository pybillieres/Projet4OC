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
        var_dump($req);
        $req->execute(array($id));
        var_dump($req);
        while($row = $req->fetch())
        {
            $post = new Post($row);
            var_dump($post);
        }
        return $post;
    }

    public function readPosts() //affiche les 10 derniers billets
    {
        $req = $this->_db->prepare('SELECT * FROM posts ORDER BY date DESC LIMIT 0,10'); 
        var_dump($req);
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

