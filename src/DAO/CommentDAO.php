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
        if ($result) {
            $posts = [];
            foreach ($result as $post){
                    $post['date'] = new \DateTime($post['date']);
                $post['date']=date_format($post['date'],'j/m/Y');
                $posts[]=$post;
            }
        }

        return $posts;
    }

    public function setComment($admin,$postId,$userId,$content)
    {
        $req = 'INSERT INTO comment(user_id,post_id,content,date,valid) VALUES(?,?,?,DATE(NOW()),?)';
        $isAdmin = $admin ? 1 : 0;
        $this->createQuery($req, [$userId, $postId, $content, $isAdmin]);
    }
}