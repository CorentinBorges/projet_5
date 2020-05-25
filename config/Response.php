<?php


namespace App\config;


class Response
{
    public function redirect($path)
    {
        return header("Location: " . $path);
    }

}