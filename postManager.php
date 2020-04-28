<?php
class PostManager
{
    private $_db;

    public function __construct()
    {
        $this->setDb();
    }

    public function setDb()
    {
        $db = new PDO('mysql:host=localhost;dbname=projet4;charset=utf8', 'root', '');//mettre ca ailleur (ou ?)en mettant le try/catch
        $this->_db = $db;
        
    }


    public function createPost($title, $content, $date) //utiliser tjr meme nom de variable genant pour lecture du code ?
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
        return $req;
    }

    public function readPosts()//combien de billet sur la page d'accueil ?
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

