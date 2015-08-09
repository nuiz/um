<?php

namespace Main\Form;

abstract Form {
	protected $isValid = false, $fields = [], $attr = [], $errors = [], $error = false;
	public function __construct($attr){
		$this->attr = $attr;
	}
	public function validate(){
		$this->isValid = true;
	}
	public function getIsValid(){
		return $this->isValid;
	}
	public function getAttrs(){
		return $this->attr;
	}
	
	protected pushError($error){
		$this->isValid = false;
		$this->error = $error;
		$this->errors[] = $error;
	}

	protected _isDateFormat($date){
		if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$date))
	    {
	    	return true;
	    }else{
	        return false;
	    }
	}
}