<?php 

foreach($members as $member){?>

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?=$member["pseudo"]?></h5>
    <p class="card-text"><?=$member["bio"]?></p>
    <a href="#" class="btn btn-primary"><?=$member["ID"]?></a>
  </div>
</div>

<?php } 
var_dump($member);
?>

