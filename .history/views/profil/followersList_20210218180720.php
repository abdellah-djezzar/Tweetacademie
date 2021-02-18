<div class="card-columns">
<?php 
foreach($getFollowers as $key => $followers){ ?>

  <div class="card bg-light">
    <div class="card-body">
      <h5 class="card-title"> 
        <a href="index.php?action=profil&id_user=<?=$followers["ID"]?>"><?=$followers["pseudo"]?></a></h5>
      <p class="card-text"><?=$followers["bio"]?></p>
    </div>
  </div>

<?php } 
var_dump($getFollowers);
?>
</div>