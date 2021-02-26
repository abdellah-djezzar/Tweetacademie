<?php 
require_once ('Db.php');

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

  public function getMessage($adresse_id, $id_user)
  {
    $sql = "SELECT text from message WHERE adressee_id = :adresse_id AND ID_user = :id_user";
    $query = $this->connect()->prepare($sql);
    $query->execute([
      "adresse_id" => $adresse_id,
      "id_user" => $id_user
    ]);

    return $query->fetchALl(PDO::FETCH_ASSOC);
  }
}