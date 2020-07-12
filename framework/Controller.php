<?php

namespace Pierre\P4\Framework;
use Pierre\P4\Framework\Request;
use Pierre\P4\Model\View;

abstract class Controller
{
 private $action;
 protected $request;

 public function setRequest(Request $request) {
   $this->request = $request;
 }


 public function executeAction($action) {
   if (method_exists($this, $action)) {
     $this->action = $action;
     $this->{$this->action}();
   }
   else {
     $controllerClass = get_class($this);
     throw new \Exception("Action '$action' non définie dans la classe $controllerClass");
   }
 }

 public function checkSession()
 {
  return $this->request->getSession()->existAttribut("userId");
 }

 public abstract function index();

 public function errorMsg($errorMsg)
 {
  $view = new View;
  $view->render('ErrorView', ['errorMsg' => $errorMsg]); 
 }

 protected function redirect($controller, $action='', $id='')
 {
  $racineWeb = Configuration::get("racineWeb", "/");
  header('Location: ' . $racineWeb . $controller . '/' . $action . '/'.$id);
 }

}
