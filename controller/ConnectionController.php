<?php
namespace Pierre\P4\Controller;

use Pierre\P4\Model\View;
use Pierre\P4\Framework\Controller;
use Pierre\P4\Model\UserManager;
use Pierre\P4\Model\PostManager;

class ConnectionController extends Controller
{
    function index()
    {
        if($this->checkSession())
        {
            $this->indexAdmin();
        }
        else
        {
            $this->connectionView();
        }
    }

    function connectionView()
    {
        $view = new View;
        $view->render('ConnectionView');
    }

    function login()
    {

        if($this->request->existParameter("login") && $this->request->existParameter("password"))
        {
            $login = $this->request->parameter('login');
            $password = md5($this->request->parameter('password'));
            $userManager = new UserManager;
            $user = $userManager->getUserByLogin($login);
            if($user !== null)
            {
                if($password === $user->password())
                {
                    $this->request->getSession()->setAttribut('userId', $user->id());//pourquoi acceder a la session via la requete et pas directement ?
                    $this->request->getSession()->setAttribut('login', $user->login());
                    $this->indexAdmin();
                }
                else
                {
                    $this->errorMsg('mot de passe ou login incorrect');
                }
            }
            else
            {
                $this->errorMsg('mot de passe ou login incorrect');
            }    
        }
            
        else
        {
            $this->errorMsg('Veuillez remplir les champs');
        }
    }

    function indexAdmin()
    {
        if($this->checkSession())
        {
            $postManager = new PostManager;
            $posts = $postManager->readPosts();
            $view = new View;
            $view->render('AdminIndexView', ['posts' =>$posts]);         
        }
        else
        {
            $this->connectionView();
        }
    }

    function logout()
    {
        $this->request->getSession()->destroySession();
        $this->connectionView();
    }


}