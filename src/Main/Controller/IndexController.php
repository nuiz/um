<?php
namespace Main\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $this->slim->redirect($this->slim->request()->getRootUri().'/employer');
        $this->slim->render("template.php");
    }
}
