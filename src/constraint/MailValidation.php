<?php


namespace App\src\constraint;
use App\src\constraint\Constraint;

class MailValidation extends Validation
{
    public function check(\App\config\Parameter $post)
    {
        foreach ($post->all() as $name=>$data) {
            $this->checkField($name, $data);
        }
        return $this->errors;
    }

    public function checkField($name,$data)
    {
        if ($name === 'name') {
            $this->checkName($data);
        }
        if ($name === 'firstName') {
            $this->checkFirstName($data);
        }
        if ($name === 'obj') {
            $this->checkObj($data);
        }
        if ($name === 'mail') {
            $this->checkMail($data);
        }
        if ($name == 'message') {
            $this->checkMessage($data);
        }
    }

    public function checkName($data)
    {
        $fieldName = 'Nom';
        if ($this->constraint->notBlanck($data)) {
            $this->addError($this->constraint->notBlanck($data,$fieldName));
            $this->addErrorType('invalidName');
        }

        if ($this->constraint->maxLength($data, 40)) {
            $this->addError($this->constraint->maxLength($data, 40,$fieldName));
            $this->addErrorType('invalidName');
        }
        if ($this->constraint->noNum($data)) {
            $this->addError($this->constraint->noNum($data,$fieldName));
            $this->addErrorType('invalidName');
        }
    }

    public function checkFirstName($data)
    {
        $fieldName = 'Prénom';
        if ($this->constraint->notBlanck($data)) {
            $this->addError($this->constraint->notBlanck($data,$fieldName));
            $this->addErrorType('invalidFirstName');
        }

        if ($this->constraint->maxLength($data, 20)) {
            $this->addError($this->constraint->maxLength($data, 20,$fieldName));
            $this->addErrorType('invalidFirstName');
        }
        if ($this->constraint->noNum($data)) {
            $this->addError($this->constraint->noNum($data,$fieldName));
            $this->addErrorType('invalidFirstName');
        }
    }

    public function checkObj($data)
    {
        $fieldName = 'Objet';
        if ($this->constraint->notBlanck($data)) {
            $this->addError($this->constraint->notBlanck($data,$fieldName));
            $this->addErrorType('invalidObj');
        }

        if ($this->constraint->maxLength($data, 20)) {
            $this->addError($this->constraint->maxLength($data, 20,$fieldName));
            $this->addErrorType('invalidObj');
        }
    }

    public function checkMail($data)
    {
        if ($this->constraint->notBlanck($data)) {
            $this->addError($this->constraint->notBlanck($data,'Mail'));
            $this->addErrorType('invalidMail');
        }
        if (!filter_var($data, FILTER_VALIDATE_EMAIL)) {
            $this->addError('Le mail '. $data .' est invlalide');
            $this->addErrorType('invalidMail');
        }
    }

    public function checkMessage($data)
    {
        $fieldName = 'message';
        if ($this->constraint->notBlanck($data)) {
            $this->addError($this->constraint->notBlanck($data,$fieldName));
            $this->addErrorType('invalidMessage');
        }

        if ($this->constraint->maxLength($data, 250)) {
            $this->addError($this->constraint->maxLength($data, 250,$fieldName));
            $this->addErrorType('invalidMessage');
        }

    }
}