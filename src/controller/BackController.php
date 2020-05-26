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

}