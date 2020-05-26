<?php


namespace App\src\constraint;


class CommentValidation extends Validation
{
    public function check(\App\config\Parameter $post)
    {
        if ($this->constraint->notBlanck($post->get('comment'))) {
            $this->addError($this->constraint->notBlanck($post->get('comment'), 'commentaire'));
        }
        if ($this->constraint->maxLength($post->get('comment'),250)) {
            $this->addError($this->constraint->maxLength($post->get('comment'),'commentaire'));
        }
        return $this->errors;
    }
}