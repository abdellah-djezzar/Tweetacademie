<?php 


 
foreach($retweets as $retweet){ ?>

  <div class="tweet-container">
  <p value="<?=$retweet["text"]?>"><?= $retweet["text"]?></p>
  <span>Tweet posted by: <a href="<?="index.php?action=profil&id_user=". $retweet["ID_user"] .""?>"><?=$retweet["pseudo"]?></a></span>


  </div>
<?php 
}
var_dump($retweets);
?>
<?php 
foreach($tweets as $tweet){ ?>

  <div class="tweet-container">
  <p value="<?=$tweet["text"]?>"><?= $tweet["text"]?></p>
  <span>Tweet posted by: <a href="<?="index.php?action=profil&id_user=". $tweet["ID"] .""?>"><?=$tweet["username"]?></a></span>
        <form action="" method="POST" class="retweet">
        <input type="hidden" value="10" name="id_user">
        <button type="submit" class="retweetValue" value="<?= $tweet[0]?>" name="id_tweet">retweet</button>
        </form>
        </div>
<?php 
}
?>
