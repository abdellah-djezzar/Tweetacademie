<?php
foreach($getAllFromFollowings as $information){ ?>
<div class="tweet-container">
<p><?= $information["text"];?></p>
<span>Tweets posted by: <a href="index.php?action=profil&id_user=<?=$information["ID_user"]?>"><?=$information["pseudo"]?></a></span>
</div>
<?php } ?>

<?php 
foreach($showMyTweets as $tweet){?>
  <div class="tweet-container">
<p><?= $tweet["text"];?></p>
<span>Tweets posted by: <a href="index.php?action=profil&id_user=<?=$tweet["ID_user"]?>"><?=$tweet["pseudo"]?></a></span>
</div>
<?php }?>

<?php var_dump($showMyTweets) ?>