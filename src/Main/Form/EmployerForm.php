<?php

namespace Main\Form;

class EmployerForm extends Form {
	public $attr = [
		'first_name'=> '',
		'last_name'=> '',
		'visa_expiry'=> ''
	];

	public function validate(){
		$this->errors = [];
		$this->error = false;
		$this->isValid = true;
		if(empty($this->attr['first_name'])){
			$this->pushError("First Name is empty");
		}

		if(empty($this->attr['last_name'])){
			$this->pushError("Last Name is empty");
		}

		if(empty($this->attr['visa_expiry'])){
			$this->pushError("Last Name is empty");
		}

		if($this->isDateFormat($this->attr['visa_expiry'])){
			$this->pushError("Visa expiry not date format yyyy-mm-dd");
		}

		return !$this->error;
	}
}