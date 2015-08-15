<?php
namespace Main\Form;

use RedBeanPHP\R;

class UserForm extends Form {
	public $attr = [
		'username'=> '',
		'password'=> '',
		'email'=> '',
		'first_name'=> '',
		'last_name'=> '',
		'tel_number'=> '',
		'branch'=> ''
	];

	public function validate(){
		$this->errors = [];
		$this->error = false;
		$this->isValid = true;

		if(empty($this->attr['username'])){
			$this->pushError("username is empty");
		}
		if(empty($this->attr['password'])){
			$this->pushError("password is empty");
		}
		return !$this->error;
	}

	public function save(){
		if(!$this->emptyAttr('id')){
			$user = R::findOne('user', 'id=?', [$this->getAttr('id')]);
		}
		else {
			$user = R::dispense('user');
			$user->level = 2;
		}
		$user->username = $this->getAttr('username');
		$user->password = $this->getAttr('password');
		$user->email = $this->getAttr('email', '');
		$user->first_name = $this->getAttr('first_name', '');
		$user->last_name = $this->getAttr('last_name', '');
		$user->tel_number = $this->getAttr('tel_number', '');
		$user->branch = $this->getAttr('branch', '');
		return R::store($user);
	}
}
