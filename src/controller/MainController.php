<?php


namespace App\src\controller;
use \App\src\model\View;
use App\config\Request;
use App\src\DAO\ArticleDAO;
use App\src\DAO\CommentDAO;
use App\src\DAO\UserDAO;
use App\src\constraint\Validation;

abstract class MainController
{
    protected $view;
    protected $articleDAO;
    protected $commentDAO;
    protected $userDAO;
    private $request;
    protected $get;
    protected $post;
    protected $validation;
    protected $session;

    public function __construct()
    {
        $this->view = new View();
        $this->articleDAO = new ArticleDAO();
        $this->commentDAO = new CommentDAO();
        $this->userDAO = new UserDAO();
        $this->request = new Request();
        $this->validation = new Validation();
        $this->get = $this->request->getGet();
        $this->post = $this->request->getPost();
        $this->session = $this->request->getSession();
    }


}