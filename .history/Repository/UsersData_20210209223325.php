<?php
require ('Db.php');
class UsersData extends Db
{ 
    public function newUser(string $nom_user, string $prenom_user, string $password, string $email): object
    {
        $sql = "INSERT INTO user (nom_user, prenom_user, email, password) 
                 VALUES (:nom_user, :prenom_user, :email, :password)";
        $query = $this->connect()
            ->prepare($sql);
        $query->execute(["nom_user" => $nom_user, "prenom_user" => $prenom_user, "email" => $email, "password" => $password, ]);
        return $query;
    }

    // on selectionne "id_user", on prépare une requette (pour éviter les injections sql), on l'execute et enfin le resultat de cette requette est associé à $_session['id']. Le ORDER BY c'est juste une technique parce que en gros le dernier id_user inscrit dans la bdd est techniquement le dernier utilisateur inscrit sur le site. Donc de cette manière on répère bien le bon ID et ensuite on peut bosser avec dans la méthode "getUserById" suivante.
    public function sessionStart()
    {
        $sql = "SELECT id_user FROM user ORDER BY id_user DESC LIMIT 1";
        $query = $this->connect()->prepare($sql);
        $query->execute();
        $result = $query->fetch();
        $_SESSION['id'] = $result['id_user'];
    }


    public function getUserById(string $id): array
    {
        $sql = "SELECT * FROM user WHERE id_user = :id_user";
        $query = $this->connect()->prepare($sql);
        $query->execute([
            "id_user" => $id
        ]);
        var_dump($query);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}