<?php


namespace App\src\controller;


class ErrorController extends MainController
{
    public function errorNotFound()
    {
        $this->view->render('errorNotFound.html.twig');
    }

    public function errorServer()
    {
        $this->view->render('errorServer.html.twig');
    }

    public function errorNotAdmin()
    {
        $this->view->render('notAdmin.html.twig');
    }
}