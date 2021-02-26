<?php 

foreach($showMessage as $message) { ?>

<div class="bg-dark mb-2 text-primary">
  <span>Message envoyé par <b><?= $message["pseudo"] ?></b></span>
  <p><?= $message["text"] ?></p>
</div>
<?php }?>