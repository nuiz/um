<?php
namespace Main\Auth;

use Slim\Slim;
use RedBeanPHP\R;

class Auth {
	private $error = false, $userlogin = null;
	public function __construct(){
		$this->makesureSessionStart();
	}
	public function getUserSession(){
		if(empty($_SESSION['userlogin'])){
			return false;
		}
		if(is_null($this->userlogin)){
			$this->userlogin = unserialize($_SESSION['userlogin']);
		}
		return $this->userlogin;
	}
	public function auth($username, $password){
		$user = R::findOne('user', 'username = ?', [$username]);
		if(is_null($user)){
			$this->error = "username not found";
			unset($_SESSION['userlogin']);
			return false;
		}
		if($user->password != $password){
			$this->error = "wrong password";
			unset($_SESSION['userlogin']);
			return false;
		}
		$this->userlogin = $user;
		$_SESSION['userlogin'] = serialize($user);
		return $this->userlogin;
	}
	public function makesureSessionStart(){
		if (session_status() == PHP_SESSION_NONE) {
		    session_start();
		}
	}
	public function getError(){
		return $this->error;
	}
}