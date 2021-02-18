<?php foreach($retweets as $retweet){ ?>


<div class="tweet-container">
<p><?= $tweet["text"]?></p>
<span>Tweet posted by: <a href="<?="index.php?action=profil&id_user=". $retweet["ID_user"] .""?>"><?=$retweet["username"]?></a></span>
      <form action="" method="POST" class="retweet">
      <button type="submit" class="retweet text" value="<?=$retweet["text"]?>">retweet</button>
      </form>
      </div>
<?php } 
