<?php

namespace Main\Controller;

class EmployerController extends BaseController {
	public function index(){
		$this->slim->render("employer/list.php");
	}
}