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

  public function countTweet($id_user)
  {
    $sql = "SELECT COUNT(ID_tweet) as tweets FROM tweet WHERE ID_user = :id_user";
    $query = $this->connect()->prepare($sql);
    $query->execute([
      "id_user" => $id_user,
    ]);
    return $query->fetch();
  }

  public function followAMember()
  {
    //  INSERT INTO follow(id_following,ID_user) VALUES(9,11)
    // id_following = personne que l'on veut suivre
    // ID_user = le compte (= valeur de $_session['id'])
  }

  public function showTweets()
  {
    $sql = "SELECT text, date FROM tweet INNER JOIN user ON tweet.ID_user = user.ID_user ORDER BY ID_tweet DESC LIMIT 20";
    $query = $this->connect()->prepare($sql);
    $query->execute();
    return $query->fetchAll();
  }

}