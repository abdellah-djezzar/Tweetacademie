<?php 
foreach($tweets as $tweet){ ?>

  <div class="tweet-container">
  <p value="<?=$tweet["text"]?>"><?= $tweet["text"]?></p>
  <span>Tweet posted by: <a href="<?="index.php?action=profil&id_user=". $tweet["ID"] .""?>"><?=$tweet["username"]?></a></span>
        <form action="" method="POST" class="retweet">
        <input type="hidden" value="10" name="id_user">
        <input class="retweetValue" type="hidden" value="<?= $tweet[0]?>" name="id_tweet">
        <button type="submit">retweet</button>
        </form>
        </div>
<?php 
?>
