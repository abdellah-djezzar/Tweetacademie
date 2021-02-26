<?php 

foreach($showMessage as $message) { ?>

<div>
  <p>Message envoyé par :<?= $message["pseudo"] ?></p>
  <p><?= $message["text"] ?></p>
</div>
<?php }?>