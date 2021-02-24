<div class="card-columns">
<?php 
var_dump($getFollowers);

foreach($getFollowers as $key => $followers){ ?>

  <div class="card bg-dark">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"> 
        <a href="index.php?action=profilOtherMember&id_user=<?=$followers["id_following"]?>"><?=$followers["pseudo"]?></a></h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
  </div>

<?php } 
?>
</div>