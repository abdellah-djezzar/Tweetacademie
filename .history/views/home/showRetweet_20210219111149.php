<?php foreach($retweets as $retweet){ ?>


<div class="tweet-container">
<p><?= $retweet["text"]?></p>
<span>Tweet posted by: <a href="<?="index.php?action=profil&id_user=". $retweet["ID"] .""?>"><?=$retweet["text"]?></a></span>
      <form action="" method="POST" class="retweet">
      <button type="submit" class="retweet" value="<?=$retweet["text"]?>" name="retweet">retweet</button>
      <input type="hidden" name="id_user" value="<?= $retweet["ID"] ?>">
      </form>
</div>
<?php } var_dump($retweets) ?>
