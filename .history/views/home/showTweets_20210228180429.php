
<?php 

foreach($retweets as $retweet){ ?>

  <div class="tweet-container" style="display: flex; flex-direction: column">
 
  <span>Tweet of <a href="<?="index.php?action=profil&id_user=". $retweet['UserIDTweet'] .""?>"><?=$retweet["pseudo"]?></a> retweeted by <a href="<?="index.php?action=profil&id_user=". $_SESSION['id'] .""?>"><?=$_SESSION["pseudo"]?></a></span>

  <p value="<?=$retweet["textTweet"]?>"><?= $retweet["textTweet"]?></p>

  <form style="display: inline" action="" method="POST" class="retweet">
        <input type="hidden"  name="id_user">
        <button type="submit" class="retweetValue" value="<?= $retweet["IDTweet"]?>" name="id_tweet">Retweet</button>
  </form>

  <form action="" method="POST" class="likeForm">
  <button type="submit" class="likeValue far fa-heart" name="id_tweet" value="<?= $retweet["IDTweet"]?>"></button>
  </form>


  </div>

<?php

}
var_dump($retweets);

?>
<?php 
foreach($tweets as $tweet){ ?>

  <div class="tweet-container" style="display: flex; flex-direction: column">
  
  <span><a href="<?="index.php?action=profil&id_user=". $tweet["UserIDTweet"] .""?>"><?=$tweet["pseudo"]?></a> tweeted :</span>
  <p value="<?=$tweet["textTweet"]?>"><?= $tweet["textTweet"]?></p>
        <form style="display: inline" action="" method="POST" class="retweet">
        <input type="hidden" name="id_user">
        <button type="submit" class="retweetValue" value="<?= $tweet["IDTweet"]?>" name="id_tweet">Retweet</button>
        </form>
        <form action="" method="POST" class="likeForm">
        <?php if($tweet["isLiked"]) { ?>
            <button type="submit" class="likeValue far fa-heart" name="id_tweet" value="<?= $tweet["IDTweet"]?>"></button>
        <?php } else { ?>
          <button type="submit" class="likeValue far fa-heart" name="id_tweet" value="<?= $tweet["IDTweet"]?>">aimé</button>
          <?php } ?>
      </form>
        </div>
<?php 
}
?>