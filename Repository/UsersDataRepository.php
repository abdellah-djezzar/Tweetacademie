<?php
require ('Db.php');
class UsersData extends Db
{ 
    public function newUser(string $lastname, string $firstname, string $username, string $pseudo, $dob, string $password, string $email): object
    {
        $sql = "INSERT INTO user (lastname, firstname, username, pseudo, dob, email, password) 
                 VALUES (:lastname, :firstname, :username, :pseudo, :dob, :password, :email)";
        $query = $this->connect()
            ->prepare($sql);
        $query->execute(["lastname" => $lastname, "firstname" => $firstname, "username" => $username, "pseudo" => $pseudo, "dob" => $dob, "email" => $email, "password" => $password]);
        return $query;
    }

    public function sessionStart()
    {
        $sql = "SELECT ID_user FROM user ORDER BY ID_user DESC LIMIT 1";
        $query = $this->connect()->prepare($sql);
        $query->execute();
        $result = $query->fetch();
        $_SESSION['id'] = $result['ID_user'];
    }

    public function getUserById($id_user): array
    {
        $sql = "SELECT * FROM user WHERE id_user = :id_user";
        $query = $this->connect()->prepare($sql);
        $query->execute([
            "id_user" => $id_user
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }


    public function userLogin(string $email, string $password)
    {
        $sql = "SELECT * FROM user WHERE email = :email AND password = :password";
        $query = $this->connect()->prepare($sql);
        $query->execute([
            "email" => $email,
            "password" => $password
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function sessionStartLogIn($id)
    {
        $sql = "SELECT ID_user FROM user WHERE ID_user = :id";
        $query = $this->connect()->prepare($sql);
        $query->execute([
            "id" => $id
        ]);
        $result = $query->fetch();
        $_SESSION['id'] = $result['ID_user'];
        var_dump($_SESSION['id']);
    }

    public function getAllFromUserByEmail($email)
    {
        $sql = "SELECT * FROM user WHERE email = :email";
        $query = $this->connect()->prepare($sql);
        $query->execute([
            "email" => $email
        ]);

        return $query->fetch();
    }

}