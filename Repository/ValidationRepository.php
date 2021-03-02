<?php
require_once ('Db.php');

class ValidationRepository extends Db {

  public function checkPseudo($pseudo)
  {
    $sql = "SELECT pseudo FROM user WHERE pseudo = :pseudo";
    $query = $this->connect()->prepare($sql);
    $query->execute([
      "pseudo" => $pseudo
    ]);
    return $query->fetchAll();
  }

  public function checkEmail($email)
  {
    $sql = "SELECT email FROM user WHERE email = :email";
    $query = $this->connect()->prepare($sql);
    $query->execute([
      "email" =>  $email
    ]);
    return $query->fetchALL();
  }

  public function checkUsername($username)
  {
    $sql = "SELECT username FROM user WHERE username = :username";
    $query = $this->connect()->prepare($sql);
    $query->execute([
      "username" =>  $username
    ]);
    return $query->fetchALL();
  }
}