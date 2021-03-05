<?php 
if(isset($showMessage)){
foreach($showMessage as $message) { ?>

<div class="mb-2 textMsg">
<img class="img" src="public/asset/vide.jpg" style="border-radius: 50%">
  <span><b><?= $message["pseudo"] ?></b></span>
  <div class="d-flex justify-content-between flex-wrap">
  <p><?= $message["text"] ?></p>
  <span class="mt-3"> Send : <?= $message["date"] ?></span>
  </div>
</div>
<?php 
  }
}
?>