<?php 

foreach($showMessage as $message) { ?>

<div class="bg-dark mb-2 text-primary">
  <span><b><?= $message["pseudo"] ?></b></span>
  <p><?= $message["text"] ?></p>
</div>
<?php }?>