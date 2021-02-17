<?php 
require_once ('Db.php');

class TweetsRepository extends Db {

  public function postTweet(string $id_user, string $tweet)
  {
    $sql = "INSERT INTO tweet (ID_user, text, date) VALUES (:ID_user, :tweet, NOW())"; 
    $query = $this->connect()->prepare($sql);
    $query->execute([
      "ID_user" => $id_user,
      "tweet" => $tweet,
    ]);
  }

  public function countTweet(string $id_user) :array
  {
    $sql = "SELECT COUNT(ID_tweet) as tweets FROM tweet WHERE ID_user = :id_user";
    $query = $this->connect()->prepare($sql);
    $query->execute([
      "id_user" => $id_user,
    ]);
    return $query->fetch();
  }

  public function showTweets() : array
  {
    $sql = "SELECT * FROM tweet INNER JOIN user ON tweet.ID_user = user.ID_user ORDER BY ID_tweet DESC LIMIT 20";
    $query = $this->connect()->prepare($sql);
    $query->execute();
    return $query->fetchAll();
  }

  public function likeTweet(string $id_user, string $id_tweet)
  {
    $sql = "INSERT INTO aime (ID_user, ID_tweet) VALUES (:id_user, :id_tweet)";
    $query = $this->connect()->prepare($sql);
    $query->execute([
      "id_user" => $id_user,
      "id_tweet" => $id_tweet
    ]);
  }

  public function followAMember(string $id_following, string $id_user)
  {
    $sql = "INSERT INTO follow (id_following, ID_user) 
    VALUES (:id_following, :id_user)";
    $query = $this->connect()->prepare($sql);
    $query->execute([
      "id_following" => $id_following,
      "id_user" => $id_user
    ]);
  }

  public function getFollowing(string $id_user) :array
  {
    $sql = "SELECT * FROM follow INNER JOIN user ON id_following = user.ID_user WHERE follow.ID_user = :id_user";
    $query = $this->connect()->prepare($sql);
    $query->execute([
      "id_user" => $id_user
    ]);
    return $query->fetchAll();
  }

  public function getFollowers(int $id_user) :array
  {
    $sql = "SELECT * FROM follow INNER JOIN user ON follow.ID_user = user.ID_user WHERE user.ID_user != :id_user";
    $query = $this->connect()->prepare($sql);
    $query->execute([
      "id_user" => $id_user,
    ]);
    return $query->fetchAll(PDO::FETCH_ASSOC);

  }

  public function getAllFromFollowing(string $id_user) : array
  {
    $sql = "SELECT * FROM follow 
            INNER JOIN user ON id_following = user.ID_user  
            INNER JOIN tweet ON tweet.ID_user = user.ID_user 
            WHERE follow.ID_user = :id_user";
    
    $query = $this->connect()->prepare($sql);
    $query->execute([
      "id_user" => $id_user
    ]);

    return $query->fetchAll(PDO::FETCH_ASSOC);
  } 

  public function countFollowing(string $id_user) :array
  {
    $sql = "SELECT COUNT(id_following) as nbrFollowing FROM follow INNER JOIN user ON follow.ID_user = user.ID_user WHERE user.ID_user = :id_user";
    $query = $this->connect()->prepare($sql);
    $query->execute([
      "id_user" => $id_user
    ]);
    return $query->fetch();
  }

  // montrer les personnes que je suis  (que je follow)
  //SELECT pseudo from user INNER JOIN follow ON follow.ID_user = user.ID_user WHERE follow.ID_user = 2

}