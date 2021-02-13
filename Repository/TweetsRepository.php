<?php 
require_once ('Db.php');

class TweetsRepository extends Db {

  public function postTweet($id_user, $tweet)
  {
    $sql = "INSERT INTO tweet (ID_user, text, date) VALUES (:ID_user, :tweet, NOW())"; 
    $query = $this->connect()->prepare($sql);
    $query->execute([
      "ID_user" => $id_user,
      "tweet" => $tweet,
    ]);
  }

}