<div class="container bg-light" id="margin-top-container-profil">
  <div class="row">
    <div class="col-6 col-md-3">
      <img class="img-fluid" src="https://fakeimg.pl/300x300/" style="border-radius: 50%">
    </div>
    <div class="col-6 col-md-9 d-flex flex-column justify-content-center align-items-center flex-wrap">
      <p class="d-inline-block mb-0">
        <?= "".$member->getFirstname()." ".$member->getLastname();?>
      </p>
      <p class="d-inline-block mb-0">
        <?= "@" . $member->getPseudo() ."" ?>
        <?php $member->setPseudo("ok")?>
        <?= $member->getPseudo()?>
      </p>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-12">
      <p>BIO : Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio earum id nostrum.</p>
    </div>
  </div>
</div>
<?php include('profilTabs.php') ?>