<div class="card-columns">

<?php
foreach($getFollowing as $key => $following){ ?>

  <div class="card bg-light">
    <div class="card-body">
      <h5 class="card-title"></h5>
      <a href="index.php?action=profil&id_user=<?=$following["ID_user"]?>"><?=$following["pseudo"]?></a></h5>
      <p class="card-text"><?=$following["bio"]?>
      </div>
  </div>

<?php } ?>
</div>