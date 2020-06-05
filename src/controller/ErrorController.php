<?php


namespace App\src\controller;


class ErrorController extends MainController
{
    public function errorNotFound()
    {
        $this->getTwig('errorNotFound.html.twig');
    }

    public function errorServer()
    {
        $this->getTwig('errorServer.html.twig');
    }

    public function errorNotAdmin()
    {
        $this->getTwig('notAdmin.html.twig');
    }
}