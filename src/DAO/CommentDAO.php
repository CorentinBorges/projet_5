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

    public function nonValidCount()
    {
        $req = 'SELECT COUNT(id) FROM comment WHERE valid=?';
        $result = $this->createQuery($req, [0]);
        return $result->fetchColumn();
    }
}