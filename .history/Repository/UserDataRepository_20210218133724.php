<?php
require ('Db.php');
class UserDataRepository extends Db
{ 
    public function newUser(string $lastname, string $firstname, string $username, string $pseudo, $dob, string $password, string $email, string $bio, string $city, string $link, string $deleted)
    {
        $sql = "INSERT INTO user (lastname, firstname, username, pseudo, dob, email, password, bio, city, link, deleted) 
                 VALUES (:lastname, :firstname, :username, :pseudo, :dob, :password, :email, :bio, :city, :link, :deleted)";
        $query = $this->connect()
            ->prepare($sql);
        $query->execute([
            "lastname" => $lastname, 
            "firstname" => $firstname, 
            "username" => $username, 
            "pseudo" => $pseudo, 
            "dob" => $dob, 
            "email" => $email, 
            "password" => $password,
            "bio" => $bio,
            "city" => $city,
            "link" => $link,
            "deleted" => $deleted
            
        ]);
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
        return $query->fetch(PDO::FETCH_ASSOC);
    }


    public function userLogin(string $email, string $password) :array
    {
        $sql = "SELECT * FROM user WHERE email = :email AND password = :password";
        $query = $this->connect()->prepare($sql);
        $query->execute([
            "email" => $email,
            "password" => $password
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function sessionStartLogIn(string $id)
    {
        $sql = "SELECT ID_user FROM user WHERE ID_user = :id";
        $query = $this->connect()->prepare($sql);
        $query->execute([
            "id" => $id
        ]);
        $result = $query->fetch();
        $_SESSION['id'] = $result['ID_user'];
    }

    public function getAllFromUserByEmail(string $email)
    {
        $sql = "SELECT * FROM user WHERE email = :email";
        $query = $this->connect()->prepare($sql);
        $query->execute([
            "email" => $email
        ]);

        return $query->fetch();
    }


    public function updateProfil($id_user)
    {
        $sql = "UPDATE user
        
        SET 
        username = :username, 
        pseudo = :pseudo, 
        bio = :bio, 
        city= :city, 
        link= :link, 
        email= :email, 
        password= :password, 
        
        WHERE ID_user = :id_user";
        $query = $this->connect()->prepare($sql);
        $query->execute([
            "id_user" => $id_user
        ]);
    }

}