<?php foreach($tweets as $tweet){ ?>


<div class="tweet-container">
<p><?= $tweet["text"]?></p>
<span>Tweet posted by: <a href="<?="index.php?action=profil&id_user=". $tweet["ID"] .""?>"><?=$retweet["pseudo"]?></a></span>
      <form action="" method="POST" class="retweet">
      <button type="submit" class="retweet text" value="<?=$tweet["text"]?>" name="retweet1">retweet</button>
      <input type="hidden" name="id_user" value="<?= $tweet["ID"] ?>">
      </form>
</div>
<?php } var_dump($retweets) ?>
