<?php 
foreach($retweets as $retweet){ ?>

  <div class="tweet-container" style="display: flex; flex-direction: column">
  <p value="<?=$retweet["text"]?>"><?= $retweet["text"]?></p>
  <span>Retweet posted by: <a href="<?="index.php?action=profil&id_user=". $getUser['ID'] .""?>"><?=$getUser["pseudo"]?></a></span>

  <form style="display: inline" action="" method="POST" class="retweet">
        <input type="hidden"  name="id_user">
        <button type="submit" class="retweetValue" value="<?= $retweet[0]?>" name="id_tweet">retweet</button>
  </form>

  <form action="" method="POST" class="likeForm">
  <input type="submit" class="likeValue" name="id_tweet" value="<?= $retweet[0]?>">
  <input type="submit" class="likeValue" name="id_tweet" value="Like">
  </form>


  </div>

<?php 
}
?>
<?php 
foreach($tweets as $tweet){ ?>

  <div class="tweet-container" style="display: flex; flex-direction: column">
  <p value="<?=$tweet["text"]?>"><?= $tweet["text"]?></p>
  <span>Tweet posted by: <a href="<?="index.php?action=profil&id_user=". $tweet["ID"] .""?>"><?=$tweet["pseudo"]?></a></span>
        <form style="display: inline" action="" method="POST" class="retweet">
        <input type="hidden" name="id_user">
        <button type="submit" class="retweetValue" value="<?= $tweet[0]?>" name="id_tweet">retweet</button>
        </form>
        <form action="" method="POST" class="likeForm">
            <input type="submit" class="likeValue" name="id_tweet" value="Like">
            <input type="hidden" class="likeValue" name="id_tweet" value="<?= $tweet[0]?>">
      </form>
        </div>
<?php 
}
?>
