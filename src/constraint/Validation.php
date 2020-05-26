<?php


namespace App\src\constraint;

class Validation
{
    protected $errors;
    protected $errorType;
    protected $constraint;

    public function __construct()
    {
        $this->constraint = new Constraint();
    }


    protected function addError($error)
    {
        $this->errors[]=$error;
    }

    protected function addErrorType($type)
    {
        $this->errorType[]=$type;
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
    }

    public function errorType()
    {
        if($this->errorType)
        {
            return $this->errorType;
        }
    }

    public function getErrorType(\App\config\Parameter $datas,$name)
    {
        if ($name==='user') {
            $userValidation = new UserValidation();
            $userValidation->check($datas);
            return $userValidation->errorType();
        }

        if ($name === 'mail') {
            $mailValidation = new MailValidation();
            $mailValidation->check($datas);
            return $mailValidation->errorType;
        }
    }
}