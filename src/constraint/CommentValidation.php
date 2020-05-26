<?php


namespace App\src\constraint;


class CommentValidation extends Validation
{
    public function check($content)
    {
        if ($this->constraint->notBlanck($content)) {
            $this->addError($this->constraint->notBlanck($content, 'commentaire'));
        }
        if ($this->constraint->maxLength($content,250)) {
            $this->addError($this->constraint->maxLength($content,'commentaire'));
        }
        return $this->errors;
    }
}