<?php

namespace App\src\DAO;

use App\src\model\Article;
use App\config\Parameter;
use App\config\Session;

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
        $result=$this->createQuery($req)->fetchAll();
        $posts = [];

        foreach ($result as $article)
        {
            $posts[]=$this->buildObject($article);
        }

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

    public function articleExist($articleId)
    {
        $req = "SELECT COUNT(*) FROM post WHERE id=?";
        $result = $this->createQuery($req, [$articleId]);
        $count = $result->fetchColumn();
        if ($count) {
            return true;
        }
        return null;
    }

    public function addArticle(Parameter $post,Session $Session)
    {
        $req = "INSERT INTO post(title,chapo,content,date_creation,author) VALUES (?,?,?,DATE(NOW()),?)";
        $this->createQuery($req,[$post->get('title'), $post->get('chapo'), $post->get('content'), $Session->get('pseudo')]);
    }

    public function updateArticle(Parameter $post,Parameter $get)
    {
        $req = "UPDATE post SET title= ?, chapo= ?, content=?, date_modif=DATE(NOW()) WHERE id= ?";
        $this->createQuery($req, [$post->get('title'), $post->get('chapo'), $post->get('content'),$get->get('postId')]);
    }

    public function deleteArticle($id)
    {
        $req = "DELETE FROM post WHERE id=?";
        $this->createQuery($req, [$id]);
    }
}