<?php foreach($retweets as $retweet){ ?>


<div class="tweet-container">
<p><?= $retweet["text"]?></p>
<span>Tweet posted by: <a href="<?="index.php?action=profil&id_user=". $retweet["ID"] .""?>"><?=$retweet["pseudo"]?></a></span>
      <form action="" method="POST" class="retweet">
      <button type="submit" class="retweet text" value="<?=$retweet["text"]?>" name="retweet1">retweet</button>
      <input type="hidden" name="id_user" value="<?= $retweet["ID"] ?>">
      </form>
</div>
<?php } ?>
