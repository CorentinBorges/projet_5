<?php


class Database
{
    private $connection;

    const DB_HOST = 'mysql:host=localhost;dbname=blog;charset=utf8';
    const DB_USER = "root";
    const DB_PASS = "root";

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
            $this->connection = new PDO(self::DB_HOST, self::DB_USER, self::DB_PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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
        $result = $this->checkConnexion()->query($req);
        return $result;
    }





}