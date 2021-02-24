<div class="card-columns">

<?php
foreach($getFollowing as $key => $following){ ?>

  <div class="card bg-light">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"> 
      <p class="card-text"><?= $following["lastname"] ?></p>
    </div>
  </div>

<?php } ?>
</div>