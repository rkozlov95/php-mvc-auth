<?php

namespace core;

require_once 'config/credentials.php';
use \PDO;

class Database
{
    private $host = DB_HOST;
    private $user = DB_USERNAME;
    private $password = DB_PASSWORD;
    private $name = DB_NAME;

    private $pdo;
    private $error;

    private $statement;

    public function __construct()
    {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->name;
        $options = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
            $this->pdo = new PDO($dsn, $this->user, $this->password, $options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
        }
    }

    public function prepareQuery($query)
    {
        $this->statement = $this->pdo->prepare($query);
    }

    public function executeStatement()
    {
        try {
            return $this->statement->execute();
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
        }
    }

    public function selectAll($table)
    {
        $this->prepareQuery("select * from {$table}");

        $this->executeStatement();

        return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
