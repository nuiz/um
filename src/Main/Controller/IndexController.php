<?php
namespace Main\Controller;

use Main\Auth\Auth;

class IndexController extends BaseController
{
    public function index()
    {
      $auth = new Auth();
      $user = $auth->getUserSession();
      if($user->level == 1){
  		    $this->slim->redirect($this->slim->request()->getRootUri().'/user');
      }
      $this->slim->redirect($this->slim->request()->getRootUri().'/employer');
    }
}
