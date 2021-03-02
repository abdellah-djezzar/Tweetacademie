<?php
require ('Db.php');
class UserDataRepository extends Db
{ 
    public function newUser(string $lastname, string $firstname, string $username, string $pseudo, $dob, string $password, string $email, string $bio, string $city, string $link, string $deletedd)
    {
    $sql = "INSERT INTO user (lastname, firstname, username, pseudo, dob, email,password, bio, city, link, deletedd) 
            VALUES(:lastname,:firstname,:username,:pseudo,:dob,:password,:email,:bio,:city,:link,:deletedd)";

        $query = $this->connect()->prepare($sql);
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
            "deletedd" => $deletedd    
        ]);

        return $query;
    }

    public function sessionStart()
    {
        $sql = "SELECT ID FROM user 
                ORDER BY ID 
                DESC LIMIT 1";

        $query = $this->connect()->prepare($sql);
        $query->execute();
        $result = $query->fetch();
        $_SESSION['id'] = $result['ID'];
    }

    public function getUserById($id_user): array
    {
        $sql = "SELECT * FROM user 
                WHERE id = :id_user AND deleted = 0";

        $query = $this->connect()->prepare($sql);
        $query->execute([
            "id_user" => $id_user
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function getAllUser($pseudo)
    {
        $sql = "SELECT * FROM user WHERE pseudo = :pseudo AND deleted = 0";
        $query = $this->connect()->prepare($sql);
        $query->execute([
            "pseudo" => $pseudo
        ]);

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }


    public function userLogin(string $email, string $password) :array
    {
        $sql = "SELECT * FROM user 
                WHERE email = :email 
                AND 
                password = :password AND AND deleted = 0";

        $query = $this->connect()->prepare($sql);
        $query->execute([
            "email" => $email,
            "password" => $password
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function sessionStartLogIn(string $id)
    {
        $sql = "SELECT ID FROM user 
                WHERE ID = :id AND deleted = 0";

        $query = $this->connect()->prepare($sql);
        $query->execute(["id" => $id]);
        $result = $query->fetch();
        $_SESSION['id'] = $result['ID'];
    }

    public function getAllFromUserByEmail(string $email)
    {
        $sql = "SELECT * FROM user 
                WHERE email = :email AND deleted = 0";

        $query = $this->connect()->prepare($sql);
        $query->execute([
            "email" => $email
        ]);

        return $query->fetch();
    }


    public function updateProfil(string $username, string $pseudo, string $bio, string $city, string $link, string $id_user)
    {
        $sql = "UPDATE user   
                SET 
                username = :username, 
                pseudo = :pseudo, 
                bio = :bio, 
                city= :city, 
                link= :link
                WHERE ID = :id_user";
        
        $query = $this->connect()->prepare($sql);
        $query->execute([
            "username" => $username,
            "pseudo" => $pseudo,
            "bio" => $bio,
            "city" => $city,
            "link" => $link,
            "id_user" => $id_user
        ]);
    }

    public function disableAccount(int $id_user){
        $sql = "UPDATE user SET deleted = 1 WHERE ID = :id_user";
        $query = $this->connect()->prepare($sql);
        $query->execute([
              "id_user" => $id_user
        ]);
    }

    public function getMemberByPseudo($pseudo){
        $sql = "SELECT pseudo, ID FROM user WHERE pseudo = :pseudo";
        $query = $this->connect()->prepare($sql);
        $query->execute([
            "pseudo" => $pseudo
        ]);
        return $query->fetch();
    }
}