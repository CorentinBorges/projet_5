<?php


namespace App\config;


use \App\src\controller\FrontController;
use \App\src\controller\ErrorController;
use App\src\controller\BackController;
use App\config\Request;


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
        try {
            if (isset($_GET['route'])) {
                if ($_GET['route'] === 'posts') {
                    $this->frontController->posts();
                }
                elseif ($_GET['route']==='post'){
                    $this->frontController->post($this->request->getGet()->get('postId'));
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