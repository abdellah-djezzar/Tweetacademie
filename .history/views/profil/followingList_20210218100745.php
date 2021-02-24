<div class="card-columns">

<?php
foreach($getFollowing as $key => $following){ ?>

  <div class="card bg-dark">
    <div class="card-body">
      <h5 class="card-title">
      <a href="index.php?action=profil&id_user=<?=$following["ID_user"]?>"><?=$following["pseudo"]?></a></h5>
      <p class="card-text"><?=$following["bio"]?></p>
      </div>
  </div>

<?php } ?>
</div>