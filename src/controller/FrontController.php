<?php

namespace App\src\controller;

use App\src\DAO\ArticleDAO;
use App\src\DAO\CommentDAO;

class FrontController extends MainController
{
    private $articleDAO;
    private $commentDAO;

    public function __construct()
    {
        parent::__construct();
        $this->articleDAO = new ArticleDAO();
        $this->commentDAO = new CommentDAO();
    }

    public function posts()
    {
        $list = $this->articleDAO->getArticles();
        $this->view->render('posts.html.twig', array('list' => $list));
    }

    public function home()
    {
        $this->view->render('home.html.twig');
    }

    public function post($id)
    {
        $post=$this->articleDAO->getArticle($id);
        $comments = $this->commentDAO->getComment($id);
        $this->view->render('post.html.twig', array('post'=>$post,'comments'=>$comments));
    }
}