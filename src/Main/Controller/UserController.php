<?php
namespace Main\Controller;

use RedBeanPHP\R;
use Main\Form\UserForm;

class UserController extends BaseController {
	public function index(){
		$perPage = 10;

		$page = @$_GET['page']? $_GET['page']: 1;
		$start = ($page-1) * $perPage;
		$items = R::find('user', 'level=2 LIMIT ?,?', [$start, $perPage]);
		$count = R::count('user');
		$maxPage = floor($count/$perPage) + ($count%$perPage == 0 ? 0: 1);
		$this->slim->render("user/list.php", ['items'=> $items, 'page'=> $page, 'maxPage'=> $maxPage]);
	}

	public function add(){
		$this->slim->render("user/add.php", ['form'=> new UserForm()]);
	}

	public function post_add(){
		$attr = $this->slim->request->post();
		$form = new UserForm($attr);
		if($form->validate()){
			$form->save();
			$this->slim->redirect($this->slim->request()->getRootUri().'/user');
		}
		else {
			$this->slim->render("user/add.php", ['form'=> $form]);
		}
	}

	public function edit($id){
		$item = R::findOne('user', 'id=?', [$id]);
		$this->slim->render("user/add.php", ['form'=> new UserForm($item->export())]);
	}

	public function post_edit($id){
		$attr = $this->slim->request->post();
		$attr['id'] = $id;
		$form = new UserForm($attr);
		if($form->validate()){
			$form->save();
			$this->slim->redirect($this->slim->request()->getRootUri().'/user');
		}
		else {
			$this->slim->render("user/add.php", ['form'=> $form]);
		}
	}

	public function delete($id){
		$item = R::findOne('user', 'id=?', [$id]);
		R::trash($item);
		$this->slim->redirect($this->slim->request()->getRootUri().'/user');
	}
}
