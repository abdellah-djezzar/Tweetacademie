<?php
require('Db.php');

class ValidationRepository extends Db {

  public function checkPseudo($pseudo)
  {
    $sql = "SELECT pseudo FROM user WHERE pseudo = :pseudo";
    $query = $this->connect()->prepare($sql);
    $query->execute([
      "pseudo" => $pseudo
    ]);
    return $query->fetch();
  }

  public function checkEmail( $email)
  {
    $sql = "SELECT pseudo FROM user WHERE email = :email";
    $query = $this->connect()->prepare($sql);
    $query->execute([
      "email" =>  $email
    ]);
    return $query->fetch();
  }

  public function checkUsername( $email)
  {
    $sql = "SELECT pseudo FROM user WHERE email =  email";
    $query = $this->connect()->prepare($sql);
    $query->execute([
      "pseudo" =>  $email
    ]);
    return $query->fetch();
  }
}