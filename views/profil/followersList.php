<div class="card-columns mt-3">
<?php 
foreach($getFollowers as $key => $followers){ ?>

  <div class="card bg-light">
    <div class="card-body">
      <h5 class="card-title"> 
        <a href="index.php?action=profil&id_user=<?=$followers["ID_user"]?>"><?=$followers["pseudo"]?></a></h5>
      <p class="card-text"><?=$followers["bio"]?></p>
    </div>
  </div>

<?php } 
?>
</div>