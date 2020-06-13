<?php

namespace Pierre\P4\Framework;
use Pierre\P4\Framework\Request;
use Pierre\P4\model\View;

abstract class Controller
{
 // Action à réaliser
 private $action;
 // Requête entrante
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
   var_dump("toto");
  return $this->request->getSession()->existAttribut("userId");
 }

 public abstract function index();

}
