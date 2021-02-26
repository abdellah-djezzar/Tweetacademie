<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php 

foreach($retweets as $retweet){ ?>

  <div class="tweet-container" style="display: flex; flex-direction: column">
  <p value="<?=$retweet["textTweet"]?>"><?= $retweet["textTweet"]?></p>
  <span>Retweet posted by: <a href="<?="index.php?action=profil&id_user=". $retweet['UserIDTweet'] .""?>"><?=$retweet["pseudo"]?></a></span>

  <form style="display: inline" action="" method="POST" class="retweet">
        <input type="hidden"  name="id_user">
        <button type="submit" class="retweetValue" value="<?= $retweet["IDTweet"]?>" name="id_tweet">retweet</button>
  </form>

  <form action="" method="POST" class="likeForm">
  <button type="submit" class="likeValue far fa-heart" name="id_tweet" value="<?= $retweet["IDTweet"]?>"></button>
  </form>


  </div>

<?php 
}
?>
<?php 
foreach($tweets as $tweet){ ?>

  <div class="tweet-container" style="display: flex; flex-direction: column">
  <p value="<?=$tweet["textTweet"]?>"><?= $tweet["textTweet"]?></p>
  <span>Tweet posted by: <a href="<?="index.php?action=profil&id_user=". $tweet["UserIDTweet"] .""?>"><?=$tweet["pseudo"]?></a></span>
        <form style="display: inline" action="" method="POST" class="retweet">
        <input type="hidden" name="id_user">
        <button type="submit" class="retweetValue" value="<?= $tweet["IDTweet"]?>" name="id_tweet">retweet</button>
        </form>
        <form action="" method="POST" class="likeForm">
        <?php if($tweet["isLiked"] == 1) { ?>
            <button type="submit" class="likeValue far fa-heart" name="id_tweet" value="<?= $tweet["IDTweet"]?>"></button>
        <?php } else { ?>
          <button type="submit" class="likeValue far fa-heart" name="id_tweet" value="<?= $tweet["IDTweet"]?>">aimé</button>
          <?php } ?>
      </form>
        </div>
<?php 
var_dump($tweet);
}
?>
