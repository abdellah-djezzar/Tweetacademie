<div class="card-columns">

<?php
foreach($getFollowing as $key => $following){ ?>

  <div class="card bg-light">
    <div class="card-body">
      <h5 class="card-title"> 
      <p class="card-text"><?= $following["lastname"] ?></p>
    </div>
  </div>

<?php } ?>
</div>