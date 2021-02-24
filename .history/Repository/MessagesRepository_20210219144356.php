<?php 

require_once('Db.php');

class MessagesRepository extends Db {


  public function postMessage($adresse_id, $text, $id_user)
  {
    $sql = "INSERT INTO message (adressee_id, text, ID_user) VALUES (:adresse_id, :text, :ID_user)";
    $query = $this->connect()->prepare($sql);
    $query->execute([
      "adresse_id" => $adresse_id,
      "text" => $text,
      "ID_user" => $id_user
    ]);

  }
}