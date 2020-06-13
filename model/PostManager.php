<?php

namespace Pierre\P4\Model;
use Pierre\P4\framework\Manager;

class PostManager extends Manager
{
    public function createPost(Post $post)// CREER AVEC PARAMETRE SEPARE OU DEPUIS OBJET POST ?
    {
        var_dump($post);
        $req = $this->_db->prepare('INSERT INTO posts(title, content, date) VALUES(:title, :content, :date) ');
        $req->execute(array (
            ':title'=>$post->title(),
            ':content'=>$post->content(),
            ':date'=>$post->date()));
        
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

