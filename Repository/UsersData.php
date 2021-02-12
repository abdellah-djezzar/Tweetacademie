<?php
require ('Db.php');
class UsersData extends Db
{ 
    public function newUser(string $lastname, string $firstname, string $username, $dob, string $password, string $email): object
    {
        $sql = "INSERT INTO users (lastname, firstname, username, dob, email, password) 
                 VALUES (:lastname, :firstname, :username, :dob, :password, :email)";
        $query = $this->connect()
            ->prepare($sql);
        $query->execute(["lastname" => $lastname, "firstname" => $firstname, "username" => $username, "dob" => $dob, "email" => $email, "password" => $password]);
        return $query;
    }

    public function sessionStart()
    {
        $sql = "SELECT id FROM users ORDER BY id DESC LIMIT 1";
        $query = $this->connect()->prepare($sql);
        $query->execute();
        $result = $query->fetch();
        $_SESSION['id'] = $result['id'];
    }

    public function getUserById($id): array
    {
        $sql = "SELECT * FROM users WHERE id = :id";
        $query = $this->connect()->prepare($sql);
        $query->execute([
            "id" => $id
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }


    public function userLogin(string $email, string $password)
    {
        $sql = "SELECT * FROM users WHERE email = :email AND password = :password";
        $query = $this->connect()->prepare($sql);
        $query->execute([
            "email" => $email,
            "password" => $password
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function sessionStartLogIn($id)
    {
        $sql = "SELECT id FROM users WHERE id = $id";
        $query = $this->connect()->prepare($sql);
        $query->execute([
            "id" => $id
        ]);
        $result = $query->fetch();
        $_SESSION['id'] = $result['id'];
        var_dump($_SESSION['id']);
    }

    public function getAllFromUserByEmail($email)
    {
        $sql = "SELECT * FROM users WHERE email = :email";
        $query = $this->connect()->prepare($sql);
        $query->execute([
            "email" => $email
        ]);

        return $query->fetch();
    }

}