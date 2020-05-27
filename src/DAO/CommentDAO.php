<?php

namespace App\src\DAO;
use App\config\Parameter;

class CommentDAO extends DAO
{

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
                $comments[]=$comment;
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