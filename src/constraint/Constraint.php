<?php


namespace App\src\constraint;


class Constraint
{
    public function notBlanck($value,$name=null)
    {
        if (empty($value)) {
            return "Le champ " . $name . " est vide";
        }
        return null;
    }

    public function maxLength($value,$max,$name=null)
    {
        if(strlen($value)>$max){
            return "Le champ " . $name . " ne doit pas contenir plus de " . $max . " caractères";
        }
        return null;
    }

    public function minLenght($value,$min,$name=null)
    {
        if (strlen($value) < $min) {
            return "Le champs " .$name. " doit contenir au moins " .$min." caractères";
        }
        return null;
    }

    public function hasSpecialChar($value,$name=null)
    {
        if (!preg_match('#\?+|!+|\.+|:+|;+|,+$#',$value)) {
            return "Le champs " . $name . " doit contenir au moins un signe de ponctuation";
        }
        return null;
    }

    public function hasNum($value,$name=null)
    {
        if (!preg_match('#^(?=.*[0-9])#', $value)) {
            return 'Le champ ' . $name . "  doit comporter au moins un chiffre";
        }
        return null;
    }

    public function hasLowerCase($value,$name=null)
    {
        if (!preg_match("#^(?=.*[a-z])#", $value)) {
            return 'Le champ '. $name ." doit comporter au moins une lettre minuscule";
        }
        return null;
    }

    public function hasUpperCase($value,$name=null)
    {
        if (!preg_match('#^(?=.*[A-Z])#', $value)) {
            return 'Le champ '. $name ." doit comporter au moins une lettre majuscule";
        }
        return null;
    }

    public function noNum($value, $name=null)
    {
        if (preg_match('#[0-9]#', $value)) {
            return 'Le champ ' . $name . ' ne doit comporter que des lettres';
        }
        return null;
    }

}