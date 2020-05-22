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

    public function show($data)
    {
        if (isset($_SESSION[$data])) {
            $key = $this->get($data);
            $this->remove($data);
            return $key;
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