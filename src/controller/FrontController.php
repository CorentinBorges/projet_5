<?php

namespace App\src\controller;

use App\src\DAO\ArticleDAO;
use App\src\DAO\CommentDAO;

class FrontController extends MainController
{

    public function posts()
    {
        $list = $this->articleDAO->getArticles();
        $this->view->addVar('list',$list);
        $this->view->render('posts.html.twig');
    }

    public function home()
    {
        $this->view->render('home.html.twig');
    }

    public function post($id)
    {
        $post=$this->articleDAO->getArticle($id);
        $comments = $this->commentDAO->getComment($id);
        $this->view->addVar('comments',$comments);
        $this->view->addVar('post',$post);
        $this->view->render('post.html.twig');
    }

    public function login()
    {
        $this->view->render('login.html.twig');
    }

    public function signIn(\App\config\Parameter $post)
    {
        $errors = null;

        if ($post->get('submitLog')) {
            $errors=$this->validation->Validate($post,'user');
            $errorTypes=$this->validation->getErrorType($post,'user');

            if($this->userDAO->pseudoExist($post)){
                $errors[] = $this->userDAO->pseudoExist($post);
                $errorTypes[] = 'invalidPseudo';
            }

            if ($this->userDAO->mailExist($post)) {
                $errors[] = $this->userDAO->mailExist($post);
                $errorTypes[] = 'invalidMail';
            }

            if (!preg_match('#^'.$post->get('pass').'$#', $post->get('confirmPass'))) {
                    $errors[]=" La confirmation du mot de passe est incorrecte";
                    $errorTypes[] = 'invalidConfirm';
            }

            if (!$post->get('CGU')) {
                $errors[]=" Vous devez accepter les conditions d'utilisation pour vous inscrire";
            }

            if (isset($errorTypes)) {

                foreach ($errorTypes as $value) {
                    $this->view->addVar($value,'text-danger');
                }
            }
            $this->view->addVar('name',$post->get('name'));
            $this->view->addVar('firstName',$post->get('firstName'));
            $this->view->addVar('mail',$post->get('mail'));
            $this->view->addVar('pseudo',$post->get('pseudo'));
            $this->view->addVar('pass',$post->get('pass'));
            $this->view->addVar('confirmPass',$post->get('confirmPass'));
            if (empty($errors)) {
                $this->userDAO->register($post);
                header('Location: /projet_5/public/index.php?route=validSignIn');
            }
        }

        $this->view->addVar('errors',$errors);
        $this->view->render('signIn.html.twig');
    }

    public function validSignIn()
    {
        $this->view->render('validSignIn.html.twig');
    }

}