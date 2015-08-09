<?php

namespace Main\Controller;

class EmployeeController extends BaseController {
	public function index(){
		$this->slim->render("template.php");
	}
}