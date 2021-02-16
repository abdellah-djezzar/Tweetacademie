<?php
class Db
{
    private string $host = "localhost";
    private string $user = "abdellah";
    private string $pwd = "abdellah";
    private string $dbName = "my_twitter";

    protected function connect()
    {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        $pdo = new PDO($dsn, $this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}

