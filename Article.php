<?php


class Article extends Database
{
    public function getArticles()
    {
        $req=("SELECT id,title,chapo,content,date_creation,date_modif,author FROM post");
        $result=$this->createQuery($req);
        return $result;
    }

    public function getArticle($articleId)
    {

    }


}