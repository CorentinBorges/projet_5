<?php

namespace App\src\DAO;
use App\config\Parameter;
use App\src\model\Comment;

class CommentDAO extends DAO
{
    public function buildObject($datas)
    {
        $comment = new Comment();
        $comment->setId($datas['id']);
        $comment->setContent($datas['content']);
        $comment->setDate($datas['date']);
        $comment->setAuthor($datas['author']);
        $comment->setPostId($datas['post_id']);
        $comment->setValid($datas['valid']);
        return $comment;
    }
    public function getComment($postId)
    {
        $req = "SELECT comment.id,user_id,post_id,content,date,comment.valid,users.pseudo AS author FROM comment
                JOIN users ON user_id=users.id 
                WHERE post_id= ? AND comment.valid= ? ORDER BY id DESC";
        $result=$this->createQuery($req, [$postId,true])->fetchAll();
        $comments = [];
        if ($result) {
            foreach ($result as $comment){
                $comment['date'] = $this->dateFormat($comment['date']);
                $comments[]=$this->buildObject($comment);
            }
        }

        return $comments;
    }

    public function setComment($admin,$postId,$userId,$content)
    {
        $req = 'INSERT INTO comment(user_id,post_id,content,date,valid) VALUES(?,?,?,DATE(NOW()),?)';
        $isAdmin = $admin ? 1 : 0;
        $this->createQuery($req, [$userId, $postId, $content, $isAdmin]);
    }

    public function getValid()
    {
        $req = 'SELECT comment.id,user_id,post_id,content,date,comment.valid,users.pseudo AS author FROM comment
                JOIN users ON user_id=users.id 
                WHERE comment.valid= ? ORDER BY comment.id DESC';
        $result = $this->createQuery($req, [1])->fetchAll();
        $comments = [];
        foreach ($result as $comment) {
            $comment['date'] = $this->dateFormat($comment['date']);
            $comments[] = $this->buildObject($comment);
        }
        return $comments;
    }

    public function getNonValid()
    {
        $req = 'SELECT comment.id,user_id,post_id,content,date,comment.valid,users.pseudo AS author FROM comment
                JOIN users ON user_id=users.id 
                WHERE comment.valid= ? ORDER BY comment.id DESC';
        $result = $this->createQuery($req, [0])->fetchAll();
        $comments = [];
        foreach ($result as $comment) {
            $comment['date'] = $this->dateFormat($comment['date']);
            $comments[] = $this->buildObject($comment);
        }
        return $comments;
    }

    public function nonValidCount()
    {
        $req = 'SELECT COUNT(id) FROM comment WHERE valid=?';
        $result = $this->createQuery($req, [0]);
        return $result->fetchColumn();
    }

    public function delComments($postId)
    {
        $req = "DELETE FROM comment WHERE post_id=?";
        $this->createQuery($req, [$postId]);
    }

    public function delOne($id)
    {
        $req = "DELETE FROM comment WHERE id=?";
        $this->createQuery($req, [$id]);
    }

    public function validOne($id)
    {
        $req="UPDATE comment SET valid= ? WHERE id= ?";
        $this->createQuery($req, [1, $id]);
    }
}