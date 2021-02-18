<div class="card-columns">
<?php 
var_dump($getFollowers);

foreach($getFollowers as $key => $followers){ ?>

  <div class="card bg-dark">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"> 
        <a href="index.php?action=profil&id_user=<?=$followers["ID_user"]?>"><?=$followers["pseudo"]?></a></h5>
      <p class="card-text"><?=$followers["bio"]?></p>
    </div>
  </div>

<?php } 
?>
</div>