<?php
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
        $req = $this->_db->query('SELECT * FROM post ORDER BY date DESC LIMIT 0,10');
        return $req;
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

