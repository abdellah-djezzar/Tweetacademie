<?php
foreach($getAllFromFollowings as $information){ ?>
<div class="tweet-container">
<p><?= $information["text"];?></p>
<span>Tweets posted by: <a href="index.php?action=profilOtherMember&id_user=<?=$information["ID_user"]?>"><?=$information["pseudo"]?></a></span>
</div>
<?php } ?>