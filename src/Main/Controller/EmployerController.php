<?php

namespace Main\Controller;

class EmployerController extends BaseController {
	public function index(){
		$perPage = 10;

		$page = @$_GET['page']? $_GET['page']: 1;
		$start = ($page-1) * $perPage;
		$items = R::find('employer', 'LIMIT ?,?', [$start, $perPage]);
		$count = R::count('employer');
		$maxPage = floor($count/$perPage) + ($count%$perPage == 0 ? 0: 1);
		$this->slim->render("employer/list.php", ['items'=> $items, 'page'=> $page, 'maxPage'=> $maxPage]);
	}
}