<?php 
require_once ('Db.php');

class MessagesRepository extends Db {


  public function postMessage(int $adresse_id, string $text, int $id_user)
  {
    $sql = "INSERT INTO message (adressee_id, text, ID_user) VALUES (:adresse_id, :text, :ID_user)";
    $query = $this->connect()->prepare($sql);
    $query->execute([
      "adresse_id" => $adresse_id,
      "text" => $text,
      "ID_user" => $id_user
    ]);
  }

  public function getMessage(int $adresse_id, int $id_user) :array
  {
    $sql = "SELECT text, pseudo, DATE_FORMAT('%d/%m/%Y') from message INNER JOIN user ON message.ID_user = user.ID WHERE adressee_id = :adresse_id AND ID_user = :id_user OR adressee_id = :id_user AND ID_user = :adresse_id ORDER BY message.ID DESC";
    $query = $this->connect()->prepare($sql);
    $query->execute([
      "adresse_id" => $adresse_id,
      "id_user" => $id_user
    ]);

    return $query->fetchALl(PDO::FETCH_ASSOC);
  }

  public function getConversation(int $id_user) :array
  {
    $sql = "SELECT DISTINCT(adressee_id), pseudo FROM message INNER JOIN user ON message.adressee_id = user.id WHERE ID_user = :id_user";
    $query = $this->connect()->prepare($sql);
    $query->execute([
      "id_user" => $id_user,
    ]);

    return $query->fetchAll();
  }

  //SELECT * FROM message  INNER JOIN user ON user.ID = message.ID_user WHERE ID_user IN (10, 9) AND adressee_id IN (10, 9)
}