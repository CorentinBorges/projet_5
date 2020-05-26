<?php


namespace App\src\controller;


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

}