<?php 

foreach($showMessage as $message) { ?>

<div class="bg-dark mb-2 text-primary">
  <p>Message envoyé par :<?= $message["pseudo"] ?></p>
  <p><?= $message["text"] ?></p>
</div>
<?php }?>