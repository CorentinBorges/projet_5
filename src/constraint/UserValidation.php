<?php


namespace App\src\constraint;
use App\config\Parameter;

class UserValidation extends Validation
{

    public function check(Parameter $post)
    {
        foreach ($post->all() as $key => $value) {
            $this->checkField($key, $value);
        }


        return $this->errors;
    }

    public function checkField($name,$value)
    {
        if ($name === 'mail') {
            $this->checkMail($value);
        }

        if ($name === 'pass') {
            $this->checkPassword($value);
        }

        if ($name === 'name') {
            $this->checkName($value);
        }

        if ($name === 'firstName') {
            $this->checkFirstName($value);
        }

    }

    public function checkMail($value)
    {
        if ($this->constraint->notBlanck($value)) {
            $this->addError($this->constraint->notBlanck($value,'Mail'));
            $this->addErrorType('invalidMail');
        }
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $this->addError('Le mail '. $value .' est invlalide');
            $this->addErrorType('invalidMail');
        }
    }

    public function checkPassword($value)
    {
        $fieldName = 'Mot de passe';
        $constraint = $this->constraint;

        if ($constraint->minLenght($value, 8)) {
            $this->addError($this->constraint->minLenght($value, 8,$fieldName));
            $this->addErrorType('invalidPass');
        }
        if ($constraint->maxLength($value, 20)) {
            $this->addError($constraint->maxLength($value, 20,$fieldName));
            $this->addErrorType('invalidPass');
        }

        if ($constraint->noLowerCase($value)) {
            $this->addError($constraint->noLowerCase($value,$fieldName));
            $this->addErrorType('invalidPass');
        }

        if ($constraint->noUpperCase($value)) {
            $this->addError($constraint->noUpperCase($value,$fieldName));
            $this->addErrorType('invalidPass');
        }

        if ($constraint->hasNum($value)) {
            $this->addError($constraint->hasNum($value,$fieldName));
            $this->addErrorType('invalidPass');
        }

        if ($constraint->notBlanck($value)) {
            $this->addError($constraint->notBlanck($value,$fieldName));
            $this->addErrorType('invalidPass');
        }
    }

    public function checkName($value)
    {
        $fieldName = 'nom';
        if ($this->constraint->notBlanck($value)) {
            $this->addError($this->constraint->notBlanck($value,$fieldName));
            $this->addErrorType('invalidName');
        }

        if ($this->constraint->maxLength($value, 40)) {
            $this->addError($this->constraint->maxLength($value, 40,$fieldName));
            $this->addErrorType('invalidName');
        }

        if ($this->constraint->noNum($value)) {
            $this->addError($this->constraint->noNum($value,$fieldName));
            $this->addErrorType('invalidName');
        }
    }

    public function checkFirstName($value)
    {
        $fieldName = 'Prénom';
        if ($this->constraint->notBlanck($value)) {
            $this->addError($this->constraint->notBlanck($value,$fieldName));
            $this->addErrorType('invalidFirstName');
        }

        if ($this->constraint->maxLength($value, 20)) {
            $this->addError($this->constraint->maxLength($value, 20,$fieldName));
            $this->addErrorType('invalidFirstName');
        }

        if ($this->constraint->noNum($value)) {
            $this->addError($this->constraint->noNum($value,$fieldName));
            $this->addErrorType('invalidFirstName');
        }
    }
}