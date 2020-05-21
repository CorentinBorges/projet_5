<?php

namespace App\src\DAO;


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
        try {
            $this->connection = new \PDO(DB_HOST, DB_USER, DB_PASS);
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $this->connection;
        }
        catch (Exception $errorConnection) {

            die('Erreur de connexion:'.$errorConnection->getMessage());
        }
    }

    protected function createQuery($req,$parameters=null)
    {
        if (isset($parameters)) {
            $result=$this->checkConnexion()->prepare($req);
            $result->execute($parameters);
            return $result;
        }
        $query= $this->checkConnexion()->query($req);
        return $query;
    }





}