<?php

namespace App\src\DAO;
use \PDO;
use \Exception;

abstract class DAO
{
    private $connection;

    private function checkConnexion()
    {
        if ($this->connection === null) {
            return $this->getConnection();
        }
        return $this->connection;
    }

    private function getConnection()
    {

            $this->connection = new PDO(DB_HOST, DB_USER, DB_PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->connection;
    }

    protected function createQuery($req,$parameters=null)
    {
        if (isset($parameters)) {
            $result=$this->checkConnexion()->prepare($req);
            $result->execute($parameters);
            return $result;
        }
        return $this->checkConnexion()->query($req);
    }

}