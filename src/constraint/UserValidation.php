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
        if ($name === 'name') {
            $this->checkName($value);
        }

        if ($name === 'firstName') {
            $this->checkFirstName($value);
        }

        if($name === 'pseudo')
        {
            $this->checkPseudo($value);
        }

        if ($name === 'mail') {
            $this->checkMail($value);
        }

        if ($name === 'pass') {
            $this->checkPassword($value);
        }

    }

    public function checkName($value)
    {
        $fieldName = 'nom';
        if ($this->constraint->notBlanck($value)) {
            $this->addError($this->constraint->notBlanck($value,$fieldName));
            $this->addErrorField('invalidName');
        }

        if ($this->constraint->maxLength($value, 40)) {
            $this->addError($this->constraint->maxLength($value, 40,$fieldName));
            $this->addErrorField('invalidName');
        }

        if ($this->constraint->noNum($value)) {
            $this->addError($this->constraint->noNum($value,$fieldName));
            $this->addErrorField('invalidName');
        }
    }

    public function checkFirstName($value)
    {
        $fieldName = 'Prénom';
        if ($this->constraint->notBlanck($value)) {
            $this->addError($this->constraint->notBlanck($value,$fieldName));
            $this->addErrorField('invalidFirstName');
        }

        if ($this->constraint->maxLength($value, 20)) {
            $this->addError($this->constraint->maxLength($value, 20,$fieldName));
            $this->addErrorField('invalidFirstName');
        }

        if ($this->constraint->noNum($value)) {
            $this->addError($this->constraint->noNum($value,$fieldName));
            $this->addErrorField('invalidFirstName');
        }
    }

    public function checkPseudo($value)
    {
        $fieldName = "Nom d'utilisateur";
        if ($this->constraint->notBlanck($value)) {
            $this->addError($this->constraint->notBlanck($value,$fieldName));
            $this->addErrorField('invalidPseudo');
        }

        if ($this->constraint->maxLength($value, 20)) {
            $this->addError($this->constraint->maxLength($value, 20,$fieldName));
            $this->addErrorField('invalidPseudo');
        }
    }

    public function checkMail($value)
    {
        if ($this->constraint->notBlanck($value)) {
            $this->addError($this->constraint->notBlanck($value,'Mail'));
            $this->addErrorField('invalidMail');
        }
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $this->addError('Le mail '. $value .' est invlalide');
            $this->addErrorField('invalidMail');
        }
    }

    public function checkPassword($value)
    {
        $fieldName = 'Mot de passe';
        $constraint = $this->constraint;

        if ($constraint->minLenght($value, 8)) {
            $this->addError($this->constraint->minLenght($value, 8,$fieldName));
            $this->addErrorField('invalidPass');
        }
        if ($constraint->maxLength($value, 20)) {
            $this->addError($constraint->maxLength($value, 20,$fieldName));
            $this->addErrorField('invalidPass');
        }

        if ($constraint->hasLowerCase($value)) {
            $this->addError($constraint->hasLowerCase($value,$fieldName));
            $this->addErrorField('invalidPass');
        }

        if ($constraint->hasSpecialChar($value)) {
            $this->addError($constraint->hasSpecialChar($value,$fieldName));
            $this->addErrorField('invalidPass');
        }

        if ($constraint->hasUpperCase($value)) {
            $this->addError($constraint->hasUpperCase($value,$fieldName));
            $this->addErrorField('invalidPass');
        }

        if ($constraint->hasNum($value)) {
            $this->addError($constraint->hasNum($value,$fieldName));
            $this->addErrorField('invalidPass');
        }

        if ($constraint->notBlanck($value)) {
            $this->addError($constraint->notBlanck($value,$fieldName));
            $this->addErrorField('invalidPass');
        }
    }


}