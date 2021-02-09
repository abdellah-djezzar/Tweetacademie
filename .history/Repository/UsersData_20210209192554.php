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
        $sql = "SELECT id_user FROM user";
        $query = $this->connect()->prepare($sql);
        $query->execute();
        $result = $query->fetch();
        $_SESSION['id'] = $result['id_user'];
    }


    public function getUserById($id)
    {
        $sql = "SELECT id_user FROM where id_user = :id_user";
        $query = $this->connect()->prepare($sql);
        $query->execute(["id_user" = $id]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

}