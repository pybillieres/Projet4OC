<?php

namespace Pierre\P4\Model;
use Pierre\P4\Framework\Manager;

class UserManager extends Manager
{

            public function createUser($login, $password)
            {
                $password = md5($password);
                $req = $this->_db->prepare('INSERT TO users (login, password) VALUE (:login, :password)');
                $req->execute(array(
                    ':login'=>$login,
                    ':password'=>$password
                ));
            }

            public function modifyPassword(User $user)
            {
                $req = $this->_db->prepare('UPDATE users SET password=:password WHERE id=:id'); 
                $req->execute(array(':password'=>$user->password(),
                                    ':id'=>$user->id()));
        
                
            }

            public function getUserByLogin($login)
            {
                $req = $this->_db->prepare('SELECT * FROM users WHERE login=?');
                $req->execute(array($login));
                $row = $req->fetch();
                if(is_bool($row) !== true)
                {
                $user = new User($row);
                return $user;   
                }
                

                
            }

            public function getUserById($id)
            {
                $req = $this->_db->prepare('SELECT * FROM users WHERE id=?');
                $req->execute(array($id));
                $row = $req->fetch();
                $user = new User($row);
                return $user;
            }

            public function deleteUser($id)
            {
                $req = $this->_db->prepare('DELETE * FROM users WHERE id=?');
                $req->execute(array($id));
            }
    
}