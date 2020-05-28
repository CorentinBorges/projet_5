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
        $get = $this->request->getGet();
        $post = $this->request->getPost();

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
                    $this->frontController->post($get->get('postId'));
                  }
                elseif ($route === 'login') {
                    $this->frontController->login($post);
                }
                elseif ($route === 'signIn') {
                    $this->frontController->signIn($post);
                }
                elseif ($route === 'validSignIn') {
                    $this->frontController->validSignIn();
                }
                elseif ($route === 'disconnect') {
                    $this->backController->disconnect();
                }
                elseif ($route === 'adminHome') {
                    if ($session->get('admin')) {
                        $this->backController->adminHome();
                    }
                    else {
                        $this->errorControlller->errorNotAdmin();
                    }
                }
                elseif ($route === 'adminPosts') {
                    if ($session->get('admin')) {
                        $this->backController->posts($post,$get);
                    }
                    else {
                        $this->errorControlller->errorNotAdmin();
                    }
                }
                elseif ($route === 'addPost') {
                    if ($session->get('admin')) {
                        $this->backController->addPost($post);
                    }
                    else {
                        $this->errorControlller->errorNotAdmin();
                    }
                }

                elseif ($route === 'editPost') {
                    if ($session->get('admin')) {
                        $this->backController->editPost($post,$get);
                    }
                    else {
                        $this->errorControlller->errorNotAdmin();
                    }
                }
                elseif ($route === 'noValidComments') {
                    if ($session->get('admin')) {
                        $this->backController->notValidComments($post);
                    }
                    else {
                        $this->errorControlller->errorNotAdmin();
                    }
                }
                elseif ($route === 'validCom') {
                    if ($session->get('admin')) {
                        $this->backController->ValidComments($post);
                    }
                    else {
                        $this->errorControlller->errorNotAdmin();
                    }
                }
                elseif ($route === 'users') {
                    if ($session->get('admin')) {
                        $this->backController->users($post);
                    } else {
                        $this->errorControlller->errorNotAdmin();
                    }
                }
                elseif ($route === 'validUsers') {
                    if ($session->get('admin')) {
                        $this->backController->validUsers($post);
                    } else {
                        $this->errorControlller->errorNotAdmin();
                    }
                }

                else
                {
                    $this->errorControlller->errorNotFound();
                }
            }
            else {

                $this->frontController->home($post);
            }
//        }
        /*catch (\Exception $e) {

            $this->errorControlller->errorServer();
        }*/
    }

}