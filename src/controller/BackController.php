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

    public function posts(Parameter $post,Parameter $get)
    {
        if ($post->get('delete')) {
            $this->commentDAO->delComments($get->get('postId'));

            $this->articleDAO->deleteArticle($get->get('postId'));
            $this->response->redirect('/projet_5/public/index.php?route=adminPosts');
        }
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
        $this->view->addVar('addPost','addPost');
        $this->view->render('postForm.html.twig');
    }

    public function editPost(Parameter $post,Parameter $get)
    {
        if ($post->get('editPost')) {
            $errors = $this->validation->Validate($post, 'article');
            if ($errors) {
                $this->view->addVar('errors',$errors);
            }
            else {
                $this->articleDAO->updateArticle($post,$get);
                $this->response->redirect('/projet_5/public/index.php?route=adminPosts');
            }
        }
        $article=$this->articleDAO->getArticle($get->get('postId'));
        $this->view->addVar('title',$article->getTitle());
        $this->view->addVar('chapo',$article->getChapo());
        $this->view->addVar('content',$article->getContent());
        $this->view->addVar('id',$article->getId());
        $this->view->addVar('editPost','editPost');
        $this->view->render('postForm.html.twig');
    }

    public function comments(Parameter $post)
    {
        if ($post->get('validComments')) {

            foreach ($post->all() as $postId => $comId) {
                if (preg_match('#^com-([0-9]+)$#',$postId,$match)) {
                    $this->commentDAO->validOne($match[1]);
                }
            }
        }
        $comments=$this->commentDAO->getNonValid();
        $this->view->addVar('comments',$comments);
        $this->view->render('comments.html.twig');
    }


}