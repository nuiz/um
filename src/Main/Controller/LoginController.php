<?php
namespace Main\Controller;

use Main\Form\LoginForm;

class LoginController extends BaseController {
	public function index(){
		$this->slim->render("login.php");
	}

	public function post(){
		$attr = $this->slim->request->post();
		$loginForm = new LoginForm($attr);
		if($loginForm->validate()){
			$user = $loginForm->getUser();
			if($user['level']==1){
				$this->slim->redirect($this->slim->request()->getRootUri().'/user');
			}
			else {
				$this->slim->redirect($this->slim->request()->getRootUri().'/employer');
			}
		}
		else {
			$this->slim->render("login.php", ['loginForm'=> $loginForm]);
		}
	}
}