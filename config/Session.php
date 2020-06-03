<?php


namespace App\config;


class Session
{
    private $session;

    public function __construct($session)
    {
        $this->session = $session;
    }

    public function get($data)
    {
        if (isset($_SESSION[$data])) {

            return $_SESSION[$data];
        }
    }

    public function set($data,$value)
    {
        $_SESSION[$data] = $value;
    }

    public function show($key)
    {
        if (isset($_SESSION[$key])) {
            $message = $this->get($key);
            $this->remove($key);
            return $message;
        }
    }

    public function remove($data)
    {
        unset($_SESSION[$data]);
    }

    public function stop()
    {
        session_destroy();
    }
}