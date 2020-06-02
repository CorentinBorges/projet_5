<?php


namespace App\src\constraint;

class Validation
{
    protected $errors;
    protected $errorField;
    protected $constraint;

    public function __construct()
    {
        $this->constraint = new Constraint();
    }


    protected function addError($error)
    {
        $this->errors[]=$error;
    }

    protected function addErrorField($type)
    {
        $this->errorField[]=$type;
    }

    public function Validate($data,$name)
    {
        if ($name === 'user') {
            $userValidation = new UserValidation();
            $errors = $userValidation ->check($data);
            return $errors;
        }

        if($name === 'comment'){
            $commentValidation = new CommentValidation();
            $errors=$commentValidation->check($data);
            return $errors;
        }

        if ($name === 'mail') {
            $mailValidation = new MailValidation();
            $errors = $mailValidation->check($data);
            return $errors;
        }

        if ($name === 'article') {
            $postValidation = new ArticleValidation();
            $errors = $postValidation->check($data);
            return $errors;
        }
    }

    public function errorField()
    {
        if($this->errorField)
        {
            return $this->errorField;
        }
    }

    public function getErrorField(\App\config\Parameter $datas,$name)
    {
        if ($name==='user') {
            $userValidation = new UserValidation();
            $userValidation->check($datas);
            return $userValidation->errorField();
        }

        if ($name === 'mail') {
            $mailValidation = new MailValidation();
            $mailValidation->check($datas);
            return $mailValidation->errorField;
        }
    }
}