<?php 

foreach($showMessage as $message) { ?>

<div class="bg-dark">
  <p>Message envoyé par :<?= $message["pseudo"] ?></p>
  <p><?= $message["text"] ?></p>
</div>
<?php }?>