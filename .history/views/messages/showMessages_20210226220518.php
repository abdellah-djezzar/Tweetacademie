<?php 
if(isset($showMessage)){
foreach($showMessage as $message) { ?>

<div class="bg-light light mb-2 text-primary">
  <span><b><?= $message["pseudo"] ?></b></span>
  <p><?= $message["text"] ?></p>
</div>
<?php 
  }
}
