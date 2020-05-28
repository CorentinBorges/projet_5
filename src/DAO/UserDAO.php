<?php


namespace App\src\DAO;

use App\src\DAO\DAO;
use App\src\model\User;
use App\config\Parameter;

class UserDAO extends DAO
{
    public function buildObject($datas)
    {
        $userObj = new User();
        $userObj->setId($datas['id']);
        $userObj->setName($datas['name']);
        $userObj->setFirstName($datas['first_name']);
        $userObj->setMail($datas['mail']);
        $userObj->setPseudo($datas['pseudo']);
        return $userObj;
    }
    public function register(Parameter $post)
    {
        $req = "INSERT INTO users(mail,password,name,first_name,pseudo,role_id) VALUES (?,?,?,?,?,?)";
        $this->createQuery($req, [  $post->get('mail'),
                                    password_hash($post->get('password'),PASSWORD_BCRYPT,['cost'=>12]),
                                    $post->get('name'),
                                    $post->get('firstName'),
                                    $post->get('pseudo'),
                                    2]);
    }


    public function getNotValid()
    {
        $req="SELECT id,name,first_name,pseudo,mail FROM users WHERE valid=?";
        $result=$this->createQuery($req,[0])->fetchAll();
        $users = [];
        foreach ($result as $user) {
            $users[]= $this->buildObject($user);
        }
        return $users;
    }

    public function pseudoExist(Parameter $post)
    {
        $req = "SELECT COUNT(*) FROM users WHERE pseudo=?";
        $result=$this->createQuery($req, [$post->get('pseudo')]);
        $count=$result->fetchColumn();
        if ($count) {
            return "Ce pseudo est déjà utilisé";
        }
    }

    public function mailExist(Parameter $post)
    {
        $req="SELECT COUNT(*) FROM users WHERE mail=?";
        $result=$this->createQuery($req,[$post->get('mail')]);
        $count=$result->fetchColumn();
        if ($count) {
            return "Cette adresse mail est déjà utilisé";
        }
    }

    public function login(Parameter $post)
    {
        $req = "SELECT id,password,role_id,valid FROM users WHERE pseudo=?";
        $result = $this->createQuery($req, [$post->get('pseudo')]);
        $datas=$result->fetch();
        if($datas){
            $checkPass = password_verify($post->get('pass'), $datas['password']);
            $admin = (int)$datas['role_id']===1;
            return ['pass'=>$checkPass, 'id'=>$datas['id'], 'admin'=>$admin,'valid'=>(int)$datas['valid']];
        }
    }

    public function delOne($id)
    {
        $req = "DELETE FROM users WHERE id=?";
        $this->createQuery($req, [$id]);
    }

    public function nonValidCount()
    {
        $req = 'SELECT COUNT(id) FROM users WHERE valid=?';
        $result = $this->createQuery($req, [0]);
        return $result->fetchColumn();
    }

    public function validUser($id)
    {
        $req = 'UPDATE users SET valid=? WHERE id=?';
        $this->createQuery($req, [1, $id]);
    }

    public function getValid()
    {
        $req="SELECT id,name,first_name,pseudo,mail FROM users WHERE valid=? and role_id=?";
        $result=$this->createQuery($req,[1,2])->fetchAll();
        $users = [];
        foreach ($result as $user) {
            $users[]= $this->buildObject($user);
        }
        return $users;
    }
}