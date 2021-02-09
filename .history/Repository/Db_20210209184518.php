<?php
class Db
{
    private string $host = "localhost";
    private string $user = "admin";
    private string $pwd = "jeremydubar";
    private string $dbName = "test";

    protected function connect(): string
    {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        $pdo = new PDO($dsn, $this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}

