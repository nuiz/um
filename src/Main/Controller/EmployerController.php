<?php

namespace Main\Controller;

use RedBeanPHP\R;
use Main\Form\EmployerForm;
use Main\Form\EmployerSearchForm;
use Main\Auth\Auth;

class EmployerController extends BaseController {

	public function index()
	{
		$perPage = 10;

		$searchForm = new EmployerSearchForm($_GET);
		$searchForm->search();

		$items = $searchForm->getItems();
		$page = $searchForm->getPage();
		$maxPage = $searchForm->getMaxPage();

		$this->slim->render("employer/list.php", ['items'=> $items, 'searchForm'=> $searchForm, 'page'=> $page, 'maxPage'=> $maxPage]);
	}

	public function add()
	{
		$this->slim->render("employer/add.php", ['form'=> new EmployerForm()]);
	}

	public function post_add()
	{
		$attr = $this->slim->request->post();
		$form = new EmployerForm($attr);
		$auth = new Auth();
		$userlogin = $auth->getUserSession();
		if($form->validate()) {
			$form->save($userlogin->id);
			$this->slim->redirect($this->slim->request()->getRootUri().'/employer');
		}
		else {
			$this->slim->render("employer/add.php", ['form'=> $form]);
		}
	}
}
