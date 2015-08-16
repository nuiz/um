<?php
namespace Main\Form;

use RedBeanPHP\R;

class EmployerForm extends Form
{
  public $attr = [
    'first_name'=> '',
    'last_name'=> '',
    'tel_number'=> ''
  ];

  public function validate()
  {
    $this->errors = [];
    $this->error = false;
    $this->isValid = true;
    $emptyFirstname = empty($this->attr['first_name']);
    if ($emptyFirstname) {
      $this->pushError("First Name is empty");
    }

    if (empty($this->attr['last_name'])) {
      $this->pushError("Last Name is empty");
    }

    return !$this->error;
  }

  public function save($userId)
  {
    if(!$this->emptyAttr('id')){
      $item = R::findOne('employer', 'id=?', [$this->getAttr('id')]);
    }
    else {
      $item = R::dispense('employer');
      $item->blacklist = 0;
      $item->user_id = $userId;
    }
    $item->first_name = $this->getAttr('first_name', '');
		$item->last_name = $this->getAttr('last_name', '');
		$item->tel_number = $this->getAttr('tel_number', '');
    $item->update_time = date("Y-m-d H:i:s");
    return R::store($item);
  }
}
