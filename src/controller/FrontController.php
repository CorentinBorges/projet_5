<?php

namespace App\src\controller;

use App\src\DAO\ArticleDAO;
use App\src\DAO\CommentDAO;
use App\config\Mail;

class FrontController extends MainController
{

    public function home(\App\config\Parameter $post)
    {
        if($this->post->get('submitMail')){
            $errors=$this->validation->Validate($post, 'mail');
            $errorTypes = $this->validation->getErrorType($post,'mail');
            if ($errors) {
                $this->view->addVar('errors',$errors);
                foreach ($errorTypes as $errorType) {
                    $this->view->addVar($errorType,'text-danger');
                }
                $this->view->addVar('name',$post->get('name'));
                $this->view->addVar('firstName',$post->get('firstName'));
                $this->view->addVar('obj',$post->get('obj'));
                $this->view->addVar('mail',$post->get('mail'));
                $this->view->addVar('message',$post->get('message'));
            }
            else{
                $transport = (new \Swift_SmtpTransport(mail::HOST_NAME, MAIL::PORT))
                    ->setUsername(mail::USERNAME)
                    ->setPassword(mail::PASSWORD)
                    ->setEncryption(mail::EMAIL_ENCRYPTION)
                ;
                $mailer = new \Swift_Mailer($transport);
                $message=(new \Swift_Message($post->get('obj')))
                    ->setFrom([$post->get('mail') => $post->get('firstName')." ".$post->get('name')])
                    ->setTo([mail::ADMIN_MAIL => mail::ADMIN_NAME])
                    ->setBody($post->get('message'),'text/html');
                $mailer->send($message);
                $this->view->addVar('confirm','confirm');
            }

        }
        $this->view->render('home.html.twig');
    }

    public function CV()
    {
        $this->view->render('CV.html.twig');
    }

    public function posts()
    {
        $list = $this->articleDAO->getArticles();
        $this->view->addVar('list',$list);
        $this->view->render('posts.html.twig');
    }

    public function post($id)
    {
        $post=$this->articleDAO->getArticle($id);
        if ($this->articleDAO->articleExist($id)) {
            if ($this->post->get('submitComment')) {
                $errors = $this->validation->Validate($this->post, 'comment');
                if($errors){
                    $this->view->addVar('errors',$errors);
                }
                else
                {
                    $this->commentDAO->setComment($this->session->get('admin'),$id,$this->session->get('id'),$this->post->get('comment'));
                    $this->view->addVar($this->post->get('submitComment'),'submit');
                    if (!$this->session->get('admin')) {
                        $this->view->addVar('commentSent','commentSent');
                    }

                }

            }
            $comments = $this->commentDAO->getComment($id);
            $this->view->addVar('comments',$comments);
            $this->view->addVar('post',$post);
            $this->view->render('post.html.twig');
        }
        else {
           $this->response->redirect('/projet_5/public/index.php?route=404');
        }


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
            $this->view->addVar('alias',$post->get('pseudo'));
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

    public function login(\App\config\Parameter $post)
    {
        if($post->get('submit'))
        {
            $checkUser=$this->userDAO->login($post);
            if ($checkUser && $checkUser['valid']===1 && $checkUser['pass']) {
                $this->session->set('pseudo',$post->get('pseudo'));
                $this->session->set('id',$checkUser['id']);
                if ($checkUser['admin']) {
                    $this->session->set('admin','admin');
                }
                if ($post->get('cookie')) {
                    $this->cookie->set('pseudo',$post->get('pseudo'));
                    $this->cookie->set('id',$checkUser['id']);
                    if ($checkUser['admin']) {
                        $this->cookie->set('admin','admin');
                    }
                }
                $this->response->redirect('/projet_5/public/index.php');
            }
            elseif ($checkUser && $checkUser['valid'] === 0) {
                $this->view->addVar('error', "Votre compte n'a pas encore été validé");
            }
            else {
                $this->view->addVar('error',"Le nom d'utilisateur ou le mot de passe sont incorrects");
                $this->view->addVar('alias',$post->get('pseudo'));
                $this->view->addVar('pass',$post->get('pass'));
            }
        }
        $this->view->render('login.html.twig');
    }


    public function connect()
    {
        if ($this->session->get('pseudo')) {
            $this->view->addVar('pseudo',$this->session->get('pseudo'));
        }
        if ($this->session->get('admin')) {
            $this->view->addVar('admin','admin');
        }
    }



}