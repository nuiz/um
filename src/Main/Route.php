<?php

namespace Main;
use Slim\Slim;
use Main\Controller\TestController;

class Route {
	private $slim;
	public function __construct(Slim $slim){
		$this->slim = $slim;
	}
	public function run(){
		$this->slim->get('/', 'Main\Controller\IndexController:index');
		$this->slim->get('/employer', 'Main\Controller\EmployerController:index');
		$this->slim->get('/employee', 'Main\Controller\EmployeeController:index');
		$this->slim->get('/blacklist', 'Main\Controller\EmployerController:index');
		$this->slim->get('/visa', 'Main\Controller\EmployeeController:index');
	}
}