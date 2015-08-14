<?php

namespace Main\Controller;

class EmployeeController extends BaseController {
	public function index(){
		$this->slim->render("employee/list.php");
	}
}