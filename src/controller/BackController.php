<?php


namespace App\src\controller;
use App\config\Parameter;

class BackController extends MainController
{

    public function disconnect()
    {
        if ($this->session->get('admin')) {
            $this->cookie->remove('admin');
        }
        $this->session->stop();
        $this->cookie->remove('pseudo');
        $this->cookie->remove('id');
        $this->response->redirect('/projet_5/public/');
    }

    public function adminHome()
    {
        $nbComNoValid=$this->commentDAO->nonValidCount();
        $nbUserNoValid = $this->userDAO->nonValidCount();
        $this->view->addVar('countCom',$nbComNoValid);
        $this->view->addVar('countLog',$nbUserNoValid);
        $this->view->render('adminHome.html.twig');
    }

    public function posts()
    {
        $posts = $this->articleDAO->getArticles();
        $this->view->addVar('list',$posts);
        $this->view->render('adminPosts.html.twig');
    }

    public function addPost(Parameter $post)
    {
        if ($post->get('submitPost')) {
            $errors = $this->validation->Validate($post, 'article');
            if ($errors) {
                $this->view->addVar('errors',$errors);
            }
            else {
                $this->articleDAO->addArticle($post, $this->session);
                $this->response->redirect('/projet_5/public/index.php?route=adminPosts');
            }
        }
        $this->view->render('addPost.html.twig');
    }

}