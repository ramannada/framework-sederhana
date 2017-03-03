<?php
namespace App\Controllers;

class HomeController extends AbstractController
{
    public function index()
    {
        return $this->view->render('/home/home');
    }
}
?>
