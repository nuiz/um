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

		$this->slim->get('/login', 'Main\Controller\LoginController:index')->name('login');
		$this->slim->post('/login', 'Main\Controller\LoginController:post')->name('post_login');
		$this->slim->get('/logout', 'Main\Controller\LogoutController:index');

		$this->slim->get('/user', 'Main\Controller\UserController:index');
		$this->slim->get('/user/add', 'Main\Controller\UserController:add');
		$this->slim->post('/user/add', 'Main\Controller\UserController:post_add');
		$this->slim->get('/user/edit/:id', 'Main\Controller\UserController:edit');
		$this->slim->post('/user/edit/:id', 'Main\Controller\UserController:post_edit');
		$this->slim->get('/user/delete/:id', 'Main\Controller\UserController:delete');
		
		$this->slim->get('/employer', 'Main\Controller\EmployerController:index');
		$this->slim->get('/employee', 'Main\Controller\EmployeeController:index');
		$this->slim->get('/blacklist', 'Main\Controller\EmployerController:index');
		$this->slim->get('/visa', 'Main\Controller\EmployeeController:index');
	}
}