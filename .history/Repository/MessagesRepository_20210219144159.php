<?php 

require_once('Db.php');

class MessagesRepository extends Db {


  public function postMessage($adresse_id, $text, $id_user)
  {
    $sql = "INSERT INTO message (adresse_id, text, ID_user) VALUES (:adreesse_id, :text, :ID_user)";
  }
}