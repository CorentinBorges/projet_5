<?php

namespace App\src\DAO;

class CommentDAO extends DAO
{
    public function getComment($postId)
    {
        $req = "SELECT id,user_id,post_id,content,date,valid FROM comment WHERE post_id= ?";
        return $this->createQuery($req, [$postId]);
    }
}