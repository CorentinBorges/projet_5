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
        $this->getTwig('adminHome.html.twig',['countCom'=>$nbComNoValid,'countLog'=>$nbUserNoValid]);
    }

    public function posts(Parameter $post,Parameter $get)
    {
        if ($post->get('delete')) {
            $this->commentDAO->delComments($get->get('postId'));
            $this->articleDAO->deleteArticle($get->get('postId'));
            $this->response->redirect('/projet_5/public/index.php?route=adminPosts');
        }
        $posts = $this->articleDAO->getArticles();
        $this->getTwig('adminPosts.html.twig',['list'=>$posts]);
    }

    public function addPost(Parameter $post)
    {
        if ($post->get('submitPost')) {
            $errors = $this->validation->Validate($post, 'article');
            if ($errors) {
                $this->session->set('errors',$errors);
            }
            else {
                $this->articleDAO->addArticle($post, $this->session);
                $this->response->redirect('/projet_5/public/index.php?route=adminPosts');
            }
        }
        $this->getTwig('postForm.html.twig',['addPost'=>'addPost']);
    }

    public function editPost(Parameter $post,Parameter $get)
    {
        if ($post->get('editPost')) {
            $errors = $this->validation->Validate($post, 'article');
            if ($errors) {
                $this->session->set('errors',$errors);
            }
            else {
                $this->articleDAO->updateArticle($post,$get);
                $this->response->redirect('/projet_5/public/index.php?route=adminPosts');
            }
        }
        $article=$this->articleDAO->getArticle($get->get('postId'));
        $this->session->set('title',$article->getTitle());
        $this->session->set('chapo',$article->getChapo());
        $this->session->set('content',$article->getContent());
        $this->session->set('id',$article->getId());
        $this->getTwig('postForm.html.twig',['editPost'=>'editPost']);
    }

    public function notValidComments(Parameter $post)
    {
        if ($post->get('validComments')) {

            foreach ($post->all() as $postId => $comId) {
                if (preg_match('#^com-([0-9]+)$#',$postId,$match)) {
                    $this->commentDAO->validOne($match[1]);
                }
            }
            $this->session->set('commentValid','Les commentaires ont été validés');
        }

        elseif ($post->get('delComments')) {
            foreach ($post->all() as $postId => $comId) {
                if (preg_match('#^com-([0-9]+)$#',$postId,$match)) {
                    $this->commentDAO->delOne($match[1]);
                }
            }
            $this->session->set('commentDel','Les commentaires ont été supprimés');
        }
        $comments=$this->commentDAO->getNonValid();
        $this->getTwig('noValidComments.html.twig',['comments'=>$comments]);
    }

    public function validComments(Parameter $post)
    {
        if ($post->get('delComments')) {
            foreach ($post->all() as $postId => $comId) {
                if (preg_match('#^com-([0-9]+)$#',$postId,$match)) {
                    $this->commentDAO->delOne($match[1]);
                }
            }
            $this->session->set('commentDel','Les commentaires ont été supprimés');
        }
        $comments = $this->commentDAO->getValid();
        $this->getTwig('validComments.html.twig',['comments'=>$comments]);
    }

    public function users(Parameter $post)
    {
        if ($post->get('validComments')) {

            foreach ($post->all() as $postId => $userId) {
                if (preg_match('#^com-([0-9]+)$#',$postId,$match)) {
                    $this->userDAO->validUser($match[1]);
                }
            }
            $this->session->set('userValid','Les utilisateurs ont étés validés');
        }
        elseif ($post->get('delUsers')) {
            foreach ($post->all() as $postId => $comId) {
                if (preg_match('#^com-([0-9]+)$#',$postId,$match)) {
                    $this->userDAO->delOne($match[1]);
                }
            }
            $this->session->set('userDel','Les utilisateurs ont été supprimés');
        }
        $users=$this->userDAO->getNotValid();
        $this->getTwig('users.html.twig',['users'=>$users]);
    }

    public function validUsers(Parameter $post)
    {
        if ($post->get('delUsers')) {
            foreach ($post->all() as $postId => $comId) {
                if (preg_match('#^com-([0-9]+)$#',$postId,$match)) {
                    $this->userDAO->delOne($match[1]);
                }
            }
            $this->session->set('userDel','Les utilisateurs ont été supprimés');
        }
        $users=$this->userDAO->getValid();
        $this->getTwig('validUsers.html.twig',['users'=>$users]);

    }


}