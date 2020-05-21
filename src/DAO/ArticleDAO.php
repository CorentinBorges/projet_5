<?php

namespace App\src\DAO;
use App\src\model\Article;

class ArticleDAO extends DAO
{
    public function buildObject($datas)
    {

        $article = new Article();
        $article->setId($datas['id']);
        $article->setContent($datas['content']);
        $article->setTitle($datas['title']);
        $article->setChapo($datas['chapo']);
        $article->setAuthor($datas['author']);
        $article->setDateCreation($datas['date_creation']);
        $article->setDateModif($datas['date_modif']);
        return $article;
    }
    public function getArticles()
    {
        $req="SELECT id,title,chapo,content,date_creation,date_modif,author FROM post ORDER BY id DESC";
        $result=$this->createQuery($req);
        $posts = [];

        foreach ($result as $article)
        {
            $posts[]=$this->buildObject($article);
        }
        $result->closeCursor();
        return $posts;
    }

    public function getArticle($articleId)
    {
        $req = "SELECT id,title,chapo,content,date_creation,date_modif,author FROM post WHERE id=?";
        $result=$this->createQuery($req,[$articleId]);
        $post = $result->fetch();
        $result->closeCursor();
        return $this->buildObject($post);

    }


}