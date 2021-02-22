<?php 

foreach($members as $member){?>
<div class="col-12">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">@<?=$member["pseudo"]?></h5>
    <p class="card-text">Bio: <?=$member["bio"]?></p>
    <a href="index.php?action=profil&id_user=<?= $member["ID"] ?>" class="btn btn-primary">Visiter le profil</a>
  </div>
</div>
</div>

<?php } 
?>

