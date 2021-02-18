<?php 
// foreach($tweets as $tweet){
//   echo "<p class=\"tweet-container\" id=".$tweet["ID_tweet"].">".$tweet["text"]."</p>";
// }

foreach($tweets as $tweet){ ?>


  <div class="tweet-container">
  <p><?= $tweet["text"]?></p>
  <?php if(isset($_GET["user_id"])){ ?>
  <span>Tweet posted by: <a href="<?="index.php?action=profil&id_user=". $tweet["ID_user"] .""?>"><?=$tweet["username"]?></a></span>
  <?php } ?>
        <span>Tweet posted by: <a href="<?="index.php?action=profil&id_user=". $tweet["ID_user"] .""?>"><?=$tweet["username"]?></a></span>

        <form action="" method="POST" class="retweet">
        </form>
        <button type="submit" class="retweet">retweet</button>
        </div>
<?php } ?>