<?php


namespace App\src\controller;


class BackController extends MainController
{
    public function disconnect()
    {
        $this->session->remove('pseudo');
        if ($this->session->get('admin')) {
            $this->session->remove('admin');
        }
        $this->session->stop();
        $this->cookie->remove('pseudo');
        $this->response->redirect('/projet_5/public/');
    }

}