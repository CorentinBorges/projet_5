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
        $cookie = $this->request->getCookie();
        $session = $this->request->getSession();
        $route = $this->request->getGet()->get('route');

        if ($cookie->get('pseudo')) {
            $session->set('pseudo',$cookie->get('pseudo'));
            $session->set('id',$cookie->get('id'));
            if ($cookie->get('admin')) {
                $session->set('admin','admin');
            }
        }
        if ($this->request->getSession()->get('pseudo')) {
            $this->frontController->connect();
        }
//TODO: active try/catch
//        try {

            if (isset($route)) {

                if ($route === 'CV'){
                    $this->frontController->CV();
                }
                elseif ($route === 'posts') {
                    $this->frontController->posts();
                }
                elseif ($route ==='post'){
                    $this->frontController->post($this->request->getGet()->get('postId'));
                  }
                elseif ($route === 'login') {
                    $this->frontController->login($this->request->getPost());
                }
                elseif ($route === 'signIn') {
                    $this->frontController->signIn($this->request->getPost());
                }
                elseif ($route === 'validSignIn') {
                    $this->frontController->validSignIn();
                }
                elseif ($route === 'disconnect') {
                    $this->backController->disconnect();
                }
                else
                {
                    $this->errorControlller->errorNotFound();
                }
            }
            else {

                $this->frontController->home($this->request->getPost());
            }
//        }
        /*catch (\Exception $e) {

            $this->errorControlller->errorServer();
        }*/
    }

}