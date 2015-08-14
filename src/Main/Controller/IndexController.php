<?php

namespace Main\Controller;

class IndexController extends BaseController {
	public function index(){
		$this->slim->redirect($this->slim->request()->getRootUri().'/employer');
		$this->slim->render("template.php");
	}
}