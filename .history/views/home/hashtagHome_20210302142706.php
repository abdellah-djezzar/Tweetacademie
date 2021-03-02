<?php 
foreach($hashtags as $hashtag){ ?>

  <div class="tweet-container mt-5" style="display: flex; flex-direction: column margin-top: 6em">
  
  <span><a href="<?="index.php?action=profil&id_user=". $hashtag["ID_user"] .""?>">temporaire</a> tweeted :</span>
  <p><?= $hashtag["text"]?></p>
        <form style="display: inline" action="" method="POST" class="retweet">
        <input type="hidden" name="id_user">
        </form>
        </div>
<?php 
}
?>

