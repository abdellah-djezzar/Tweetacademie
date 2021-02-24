<?php foreach($tweets as $tweet){ ?>


<div class="tweet-container">
<p><?= $tweet["text"]?></p>
<span>Tweet posted by: <a href="<?="index.php?action=profil&id_user=". $tweet["ID_user"] .""?>"><?=$tweet["username"]?></a></span>
      <form action="" method="POST" class="retweet">
      <button type="submit" class="retweet text" value="<?=$tweet["text"]?>">retweet</button>
      </form>
      </div>
<?php } 
