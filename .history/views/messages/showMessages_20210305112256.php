<?php 
if(isset($showMessage)){
foreach($showMessage as $message) { ?>

<div class="bg-light light mb-2 text-primary">
  <span><b><?= $message["pseudo"] ?></b></span>
  <div class="d-flex justify-content-between">
  <p><?= $message["text"] ?></p>
  <span>Envoyé le: <?= $message["date"] ?></span>
  </div>
</div>
<?php 
  }
}
var_dump($showMessage);
?>