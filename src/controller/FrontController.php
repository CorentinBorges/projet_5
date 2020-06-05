<?php

namespace App\src\controller;

use App\config\Parameter;
use App\config\Mail;

class FrontController extends MainController
{

    public function home(Parameter $post)
    {
        if($this->post->get('submitMail')){
            $errors=$this->validation->Validate($post, 'mail');
            $errorFields = $this->validation->getErrorField($post,'mail');
            if ($errors) {
                $this->session->set('errors',$errors);
                foreach ($errorFields as $errorField) {
                    $this->session->set($errorField,'text-danger');
                }
                $this->session->set('name',$post->get('name'));
                $this->session->set('firstName',$post->get('firstName'));
                $this->session->set('obj',$post->get('obj'));
                $this->session->set('mail',$post->get('mail'));
                $this->session->set('message',$post->get('message'));
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
                $this->session->set('confirm','Votre mail à bien été envoyé');
            }

        }
        $this->getTwig('home.html.twig');
    }

    public function CV()
    {
        $this->getTwig('CV.html.twig');
    }

    public function posts()
    {
        $list = $this->articleDAO->getArticles();
        $this->getTwig('posts.html.twig',['list'=>$list]);
    }

    public function post($id)
    {
        $post=$this->articleDAO->getArticle($id);
        if ($this->articleDAO->articleExist($id)) {
            if ($this->post->get('submitComment')) {
                $errors = $this->validation->Validate($this->post, 'comment');
                if($errors){
                    $this->session->set('errors',$errors);
                }
                else
                {
                    $this->commentDAO->setComment($this->session->get('admin'),$id,$this->session->get('id'),$this->post->get('comment'));
                    if (!$this->session->get('admin')) {
                        $this->session->set('commentSent','Votre commentaire à été envoyé, il est en attente de validation');
                    }
                }
            }
            $comments = $this->commentDAO->getComment($id);
            $this->getTwig('post.html.twig',['comments'=>$comments,'post'=>$post]);
        }
        else {
           $this->response->redirect('../public/index.php?route=404');
        }


    }

    public function signIn(Parameter $post)
    {
        $errors = null;

        if ($post->get('submitLog')) {
            $errors=$this->validation->Validate($post,'user');
            $errorTypes=$this->validation->getErrorField($post,'user');

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
                    $this->session->set($value,'text-danger');
                }
            }
            $this->session->set('name',$post->get('name'));
            $this->session->set('firstName',$post->get('firstName'));
            $this->session->set('mail',$post->get('mail'));
            $this->session->set('alias',$post->get('pseudo'));
            $this->session->set('pass',$post->get('pass'));
            $this->session->set('confirmPass',$post->get('confirmPass'));
            if (empty($errors)) {
                $this->userDAO->register($post);
                $this->response->redirect('../public/index.php?route=validSignIn');
            }
        }

        $this->session->set('errors',$errors);
        $this->getTwig('signIn.html.twig');
    }

    public function validSignIn()
    {
        $this->getTwig('validSignIn.html.twig');
    }

    public function login(Parameter $post)
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
                $this->response->redirect('../public/index.php');
            }
            elseif ($checkUser && $checkUser['valid'] === 0) {
                $this->session->set('error', "Votre compte n'a pas encore été validé");
            }
            else {
                $this->session->set('error',"Le nom d'utilisateur ou le mot de passe sont incorrects");
                $this->session->set('alias',$post->get('pseudo'));
                $this->session->set('pass',$post->get('pass'));
            }
        }
        $this->getTwig('login.html.twig');
    }



}