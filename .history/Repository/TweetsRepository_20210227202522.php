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
    var_dump($sql);
  }

  public function countTweet(string $id_user) :array
  {
    $sql = "SELECT COUNT(ID) as tweets FROM tweet WHERE ID_user = :id_user";
    $query = $this->connect()->prepare($sql);
    $query->execute([
      "id_user" => $id_user,
    ]);
    return $query->fetch();
  }

  public function showMyTweets($id_user) : array
  {
    $sql = "SELECT * FROM tweet INNER JOIN user ON user.ID = tweet.ID_user WHERE user.ID = :id_user ORDER BY tweet.ID DESC LIMIT 20";
    $query = $this->connect()->prepare($sql);
    $query->execute([
      "id_user" => $id_user
    ]);
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

  public function countLikes($id_tweet)
  {
    $sql = "SELECT COUNT(ID_tweet) as nbrLikes FROM aime WHERE ID_tweet = :id_tweet";
    $query = $this->connect()->prepare($sql);
    $query->execute([
      "id_tweet" => $id_tweet,
    ]);
    return $query->fetch();
  }

  // public function isAlreadyLiked($id_user, $id_tweet)
  // {
  //   $sql = "SELECT COUNT(ID_tweet) as nbrLikes FROM aime"
  // }

  public function checkLikes($id_user, $id_tweet)
  {
    $sql = "SELECT * FROM aime WHERE ID_user = :id_user AND ID_tweet = :id_tweet";
    $query = $this->connect()->prepare($sql);
    $query->execute([
      "id_user" => $id_user,
      "id_tweet" => $id_tweet,
    ]);
    return $query->fetchAll(PDO::FETCH_ASSOC);
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

  public function unFollowAMember($id_following, string $id_user)
  {
    $sql = "DELETE FROM follow WHERE id_following = :id_following AND ID_user = :id_user";
    $query = $this->connect()->prepare($sql);
    $query->execute([
      "id_following" => $id_following,
      "id_user" => $id_user
    ]);
  }

  public function checkIfSubToMember($id_following, $id_user)
  {
    $sql = "SELECT * FROM follow WHERE id_following = :id_following AND ID_user = :id_user";
    $query = $this->connect()->prepare($sql);
    $query->execute([
      "id_following" => $id_following,
      "id_user" => $id_user
    ]);

    return $query->fetch(PDO::FETCH_ASSOC);
  }

  public function getFollowing(string $id_user) :array
  {
    $sql = "SELECT * from user INNER JOIN follow ON follow.id_following = user.ID  WHERE follow.ID_user = :id_user";
    $query = $this->connect()->prepare($sql);
    $query->execute([
      "id_user" => $id_user
    ]);
    return $query->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getFollowers(int $id_following) :array
  {
    $sql = "SELECT * FROM follow INNER JOIN user ON follow.ID_user = user.ID WHERE id_following = :id_following";
    $query = $this->connect()->prepare($sql);
    $query->execute([
      "id_following" => $id_following,
    ]);
    return $query->fetchAll(PDO::FETCH_ASSOC);

  }

  public function getAllFromFollowing(string $id_user) : array
  {
    $sql = "SELECT * FROM follow 
            INNER JOIN user ON id_following = user.ID  
            INNER JOIN tweet ON tweet.ID_user = user.ID
            WHERE follow.ID_user = :id_user";
    
    $query = $this->connect()->prepare($sql);
    $query->execute([
      "id_user" => $id_user
    ]);

    return $query->fetchAll(PDO::FETCH_ASSOC);
  } 

  public function countFollowing(string $id_user) :array
  {
    $sql = "SELECT COUNT(id_following) as nbrFollowing FROM follow INNER JOIN user ON follow.ID_user = user.ID WHERE user.ID = :id_user";
    $query = $this->connect()->prepare($sql);
    $query->execute([
      "id_user" => $id_user
    ]);
    return $query->fetch();
  }

  public function countFollowers(int $id_user)
  {
    $sql = "SELECT COUNT(id_following) as nbrFollowers FROM follow INNER JOIN user ON follow.ID_user = user.ID WHERE id_following = :id_user";
    
    $query = $this->connect()->prepare($sql);
    $query->execute([
      "id_user" => $id_user
    ]);
    return $query->fetch();
  }

  public function postRetweet(int $id_user, int $id_tweet)
  {
    $sql = "INSERT INTO retweet (ID_user, ID_tweet) VALUES (:id_user, :id_tweet)";
    $query = $this->connect()->prepare($sql);
    $query->execute([
      "id_user" => $id_user,
      "id_tweet"=> $id_tweet
    ]);
  }


  public function showTweets() : array
  {
    $sql = "SELECT tweet.ID as IDTweet, tweet.text as textTweet, tweet.ID_user as UserIDTweet, user.pseudo as pseudo, tweet.date as dateTweet, IF(aime.ID_user IS NOT NULL, 1, 0) as isLiked FROM tweet 
    INNER JOIN user ON tweet.ID_user = user.ID 
    LEFT JOIN aime ON aime.ID_user = user.ID 
    ORDER BY tweet.ID DESC LIMIT 20";
    $query = $this->connect()->prepare($sql);
    $query->execute();
    return $query->fetchAll();
  }


  public function showRetweet() :array
  {
    $sql = "SELECT retweet.ID_tweet as IDTweet, tweet.text as textTweet, tweet.ID_user as UserIDTweet, user.pseudo as pseudo, tweet.date as dateTweet, IF(aime.ID_user IS NOT NULL, 0, 1) as isLiked from tweet 
    INNER JOIN retweet ON tweet.ID = retweet.ID_tweet 
    INNER JOIN user ON user.ID = tweet.ID_user 
    LEFT JOIN aime ON aime.ID_user = user.ID
    ORDER BY tweet.date DESC LIMIT 10";

    $query = $this->connect()->prepare($sql);
    $query->execute();
    return $query->fetchAll();
  }

  public function getUserById(int $id_user): array
  {
    $sql = "SELECT * FROM user WHERE id = :id_user";
    $query = $this->connect()->prepare($sql);
    $query->execute([
      "id_user" => $id_user
    ]);
      return $query->fetch(PDO::FETCH_ASSOC);
  }

  public function getTweetByHashTag()
  {
    $sql = "SELECT * FROM tweet WHERE text LIKE '%#':var%";
    $query = $this->connect()->prepare($sql);
    $query->execute();

    return $query->fetchAll();
  }

  
}