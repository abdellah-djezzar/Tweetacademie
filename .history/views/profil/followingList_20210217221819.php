<div class="card-columns">

<?php
foreach($getFollowing as $key => $following){ ?>

  <div class="card bg-light">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"> 
      <p class="card-text"><?= $following["lastname"] ?>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
  </div>

<?php } ?>
</div>