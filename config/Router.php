<?php


namespace App\config;


use \App\src\controller\FrontController;
use \App\src\controller\ErrorController;
use App\src\controller\BackController;


class Router
{

    private $frontController;
    private $backController;
    private $errorControlller;
    private $request;

    public function __construct()
    {
        $this->backController = new BackController();
        $this->errorControlller = new ErrorController();
        $this->frontController =new FrontController();
        $this->request = new Request();
    }


    public function run()
    {
        $route = $this->request->getGet()->get('route');
        try {
            if (isset($route)) {
                if ($route === 'posts') {
                    $this->frontController->posts();
                }
                elseif ($route ==='post'){
                    $this->frontController->post($this->request->getGet()->get('postId'));
                  }
                elseif ($route === 'login') {
                    $this->frontController->login();
                }
                elseif ($route === 'signIn') {
                    $this->frontController->signIn($this->request->getPost());
                }
                elseif ($route === 'validSignIn') {
                    $this->frontController->validSignIn();
                }
                else
                {
                    $this->errorControlller->errorNotFound();
                }
            }
            else {

                $this->frontController->home();
            }
        }
        catch (\Exception $e) {

            $this->errorControlller->errorServer();
        }
    }

}