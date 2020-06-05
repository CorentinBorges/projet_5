<?php


namespace App\src\controller;
use App\config\Request;
use App\src\DAO\ArticleDAO;
use App\src\DAO\CommentDAO;
use App\src\DAO\UserDAO;
use App\src\constraint\Validation;
use App\config\Response;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

abstract class MainController
{
    protected $articleDAO;
    protected $commentDAO;
    protected $userDAO;
    private $request;
    protected $get;
    protected $post;
    protected $validation;
    protected $session;
    protected $cookie;
    protected $response;
    protected  $twig;

    public function __construct()
    {
        $this->articleDAO = new ArticleDAO();
        $this->commentDAO = new CommentDAO();
        $this->userDAO = new UserDAO();
        $this->request = new Request();
        $this->validation = new Validation();
        $this->get = $this->request->getGet();
        $this->post = $this->request->getPost();
        $this->session = $this->request->getSession();
        $this->cookie = $this->request->getCookie();
        $this->response = new Response();
    }

    protected function getTwig($page,$vars=[])
    {
        $loader = new FilesystemLoader(__DIR__.'/../../templates');
        $this->twig = new Environment($loader, array('cache' => false));/*TODO: change cache true*/
        $this->twig->addGlobal('session',$this->session);
        echo $this->twig->render($page,$vars);
    }


}