<?php


namespace App\src\constraint;


class Constraint
{
    public function notBlanck($value,$name=null)
    {
        if (empty($value)) {
            return "Le champ " . $name . " est vide";
        }
    }

    public function maxLength($value,$max,$name=null)
    {
        if(strlen($value)>$max){
            return "Le champ " . $name . " ne doit pas contenir plus de " . $max . " caractères";
        }
    }

    public function minLenght($value,$min,$name=null)
    {
        if (strlen($value) < $min) {
            return "Le champs " .$name. " doit contenir au moins " .$min." caractères";
        }
    }

    public function hasSpecialChar($value,$name=null)
    {
        if (!preg_match('#\?+|!+|\.+|:+|;+|,+$#',$value)) {
            return "Le champs " . $name . " doit contenir au moins un signe de ponctuation";
        }
    }

    public function hasNum($value,$name=null)
    {
        if (!preg_match('#^(?=.*[0-9])#', $value)) {
            return 'Le champ ' . $name . "  doit comporter au moins un chiffre";
        }
    }

    public function hasLowerCase($value,$name=null)
    {
        if (!preg_match("#^(?=.*[a-z])#", $value)) {
            return 'Le champ '. $name ." doit comporter au moins une lettre minuscule";
        }
    }

    public function hasUpperCase($value,$name=null)
    {
        if (!preg_match('#^(?=.*[A-Z])#', $value)) {
            return 'Le champ '. $name ." doit comporter au moins une lettre majuscule";
        }
    }

    public function noNum($value, $name=null)
    {
        if (preg_match('#[0-9]#', $value)) {
            return 'Le champ ' . $name . ' ne doit comporter que des lettres';
        }
    }

}