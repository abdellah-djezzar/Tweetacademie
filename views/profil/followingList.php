<div class="card-columns mt-3">

<?php
foreach($getFollowing as $key => $following){ ?>

  <div class="card bg-dark">
    <div class="card-body">
      <h5 class="card-title">
      <a href="index.php?action=profil&id_user=<?=$following["id_following"]?>"><?=$following["pseudo"]?></a></h5>
      <p class="card-text"><?=$following["bio"]?></p>
      </div>
  </div>

<?php }  ?>
</div>

<br>
<br>
<?php var_dump($getFollowing); ?>