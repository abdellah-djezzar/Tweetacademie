<?php
require('Db.php');

class ValidationRepository extends Db {

  public function checkpseudo($pseudo)
  {
    $sql = "SELECT pseudo FROM user WHERE pseudo = :pseudo";
    $query = $this->connect()->prepare($sql);
    $query->execute([
      "pseudo" => $pseudo
    ]);
  }
}