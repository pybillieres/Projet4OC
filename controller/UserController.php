<?php

namespace Pierre\P4\Controller;

use Pierre\P4\Framework\Controller;
use Pierre\P4\Model\UserManager;
use Pierre\P4\Model\View;

class UserController extends Controller
{
    function index()
    {

    }
    function changePassword()
    {
        if($this->checkSession())
        {
            $view = new View;
            $view->render('ChangePasswordView');
        }
    }
    function confirmPassword()
    {
        if($this->checkSession())
        {

            $newPassword = $this->request->Parameter('password');
            $newPasswordConfirm= $this->request->Parameter('passwordConfirm');
            if($newPassword == $newPasswordConfirm)
            {
                $userId=$this->request->getSession()->getAttribut('userId');
                $userManager = new UserManager;
                $user = $userManager->getUserById($userId);
                $user->setPassword(md5($newPassword));
                $userManager->modifyPassword($user);
                $this->redirect('connection');

            }
            else
            {
                $this->errorMsg('Les deux mots de passe sont différents');
            }
        }
    }
}