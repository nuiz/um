<?php

namespace Main\Controller;

class IndexController extends BaseController {
	public function index(){
		$this->slim->redirect($this->slim->urlFor("employer"));
		$this->slim->render("template.php");
	}
}