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
		$this->slim->get('/employer/:id', 'Main\Controller\EmployerController:get')->conditions(['id'=> '\d+']);
		$this->slim->get('/employer/add', 'Main\Controller\EmployerController:add');
		$this->slim->post('/employer/add', 'Main\Controller\EmployerController:post_add');
		$this->slim->get('/employer/:employer_id/history/add', 'Main\Controller\EmployerController:add_history')->conditions(['employer_id'=> '\d+']);
		$this->slim->post('/employer/:employer_id/history/add', 'Main\Controller\EmployerController:post_add_history')->conditions(['employer_id'=> '\d+']);
		$this->slim->get('/employer/:employer_id/history/delete/:id', 'Main\Controller\EmployerController:delete_history')->conditions(['employer_id'=> '\d+', 'id'=> '\d+']);
		$this->slim->get('/employer/edit/:id', 'Main\Controller\EmployerController:edit');
		$this->slim->post('/employer/edit/:id', 'Main\Controller\EmployerController:post_edit');
		$this->slim->get('/employer/delete/:id', 'Main\Controller\EmployerController:delete');

		$this->slim->get('/employee', 'Main\Controller\EmployeeController:index');
		$this->slim->get('/employee/add', 'Main\Controller\EmployeeController:add');
		$this->slim->post('/employee/add', 'Main\Controller\EmployeeController:post_add');
		$this->slim->get('/employee/edit/:id', 'Main\Controller\EmployeeController:edit');
		$this->slim->post('/employee/edit/:id', 'Main\Controller\EmployeeController:post_edit');
		$this->slim->get('/employee/delete/:id', 'Main\Controller\EmployeeController:delete');

		$this->slim->get('/blacklist', 'Main\Controller\EmployerController:index');

		$this->slim->get('/visa', 'Main\Controller\VisaController:index');
	}
}
