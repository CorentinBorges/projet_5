<?php


namespace App\src\controller;
use \App\src\model\View;

abstract class MainController
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }


}