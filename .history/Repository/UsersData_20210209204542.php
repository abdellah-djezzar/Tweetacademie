<?php
require ('Db.php');
class UsersData extends Db
{ 
    public function newUser(string $nom_user, string $prenom_user, string $password, string $email) : object
    {
        $sql = "INSERT INTO user (nom_user, prenom_user, email, password) 
                 VALUES (:nom_user, :prenom_user, :email, :password)";
        $query = $this->connect()
            ->prepare($sql);
        $query->execute(["nom_user" => $nom_user, "prenom_user" => $prenom_user, "email" => $email, "password" => $password, ]);
        return $query;
    }

    // on selectionne "id_user", on prépare une requette (pour éviter les injections sql), on l'execute et enfin le resultat de cette requette est associé à $_session['id']
    public function sessionStart()
    {
        $sql = "SELECT id_user FROM user ORDER BY id_user DESC LIMIT 1";
        $query = $this->connect()->prepare($sql);
        $query->execute();
        $result = $query->fetch();
        $_SESSION['id'] = $result['id_user'];
    }


    public function getUserById()
    {
        $sql = "SELECT id_user FROM user WHERE id_user = 1";
        $query = $this->connect()->prepare($sql);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

}