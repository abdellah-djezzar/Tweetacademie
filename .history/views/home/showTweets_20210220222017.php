<?php 
// foreach($tweets as $tweet){
//   echo "<p class=\"tweet-container\" id=".$tweet["ID_tweet"].">".$tweet["text"]."</p>";
// }

foreach($tweets as $tweet){ ?>


  <div class="tweet-container">
  <p value="<?=$tweet["text"]?>"><?= $tweet["text"]?></p>
  <span>Tweet posted by: <a href="<?="index.php?action=profil&id_user=". $tweet["ID"] .""?>"><?=$tweet["username"]?></a></span>
        <form action="" method="POST" class="retweet">
        <button type="submit" class="retweet1" value="<?=$tweet["text"]?>" name="<?=$tweet["ID"]?>>retweet</button>
        </form>
        </div>
<?php } 
var_dump($tweets);
?>
