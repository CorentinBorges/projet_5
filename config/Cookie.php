<?php


namespace App\config;


class Cookie
{
    public function set($name,$value)
    {
        setcookie($name, $value, time() + 365 * 24 * 3600, null, null, false, true);
    }

    public function get($name)
    {
        if (isset($_COOKIE[$name])) {
            return stripslashes($_COOKIE[$name]);
        }
        return null;
    }

    public function remove($name)
    {
        setcookie($name, '', time() - 4200, null, null, false, true);
    }

}