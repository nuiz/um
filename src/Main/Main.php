<?php

namespace Main;
use Slim\Slim;

class Main {
	private $slim, $route;
	public function run(){
		global $slim;

		$view = new \Slim\Views\Smarty();
		$view->parserExtensions = [
		    'vendor/slim/views/SmartyPlugins'
		];

		$this->slim = $slim = new Slim([
			'view' => $view,
			'templates.path'=> 'views'
			]);

		$this->route = new Route($this->slim);
		$this->route->run();
		$this->slim->run();
	}
}