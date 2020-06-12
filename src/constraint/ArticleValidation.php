<?php


namespace App\src\constraint;

use App\config\Parameter;

class ArticleValidation extends Validation
{
    public function check(Parameter $post)
    {
        foreach ($post->all() as $name => $data) {
            $this->checkField($name, $data);
        }
        return $this->errors;
    }

    public function checkField($name,$data)
    {
        if ($name === 'title') {
            $this->checkTitle($data);
        }

        if ($name === 'chapo') {
            $this->checkChapo($data);
        }

        if ($name === 'content') {
            $this->checkContent($data);
        }

    }

    public function checkTitle($data)
    {
        if ($this->constraint->notBlanck($data)) {
            $this->addError($this->constraint->notBlanck($data,'Titre'));
        }
        if ($this->constraint->maxLength($data,150)) {
            $this->addError($this->constraint->maxLength($data,150,'Titre'));
        }
    }

    public function checkChapo($data)
    {
        if ($this->constraint->notBlanck($data)) {
            $this->addError($this->constraint->notBlanck($data,'Chapo'));
        }
        if ($this->constraint->maxLength($data,150)) {
            $this->addError($this->constraint->maxLength($data,150,'Titre'));
        }
    }

    public function checkContent($data)
    {
        if ($this->constraint->notBlanck($data)) {
            $this->addError($this->constraint->notBlanck($data,'Article'));
        }
        if ($this->constraint->maxLength($data,30000)) {
            $this->addError($this->constraint->maxLength($data,30000,'Titre'));
        }
    }
}