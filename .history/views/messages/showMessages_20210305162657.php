<?php 
if(isset($showMessage)){
foreach($showMessage as $message) { ?>

<div class="bg-light light mb-2 text-primary">
  <span><b><?= $message["pseudo"] ?></b></span>
  <div class="d-flex justify-content-between flex-wrap">
  <p><?= $message["text"] ?></p>
  <span>Send<?= $message["date"] ?></span>
  </div>
</div>
<?php 
  }
}
?>