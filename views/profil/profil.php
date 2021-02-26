<div class="container p-3 mb-4 bg-bluue prof" id="margin-top-container-profil">
  <div class="row">
    <div class="col-6 col-md-3">
    <img class="img-fluid" src="https://gravatar.com/avatar/abca5cb9b47f529f99aca908d3e7f6fd?s=400&r=G&d=mystery" style="border-radius: 50%">
    </div>
    <div class="col-6 col-md-9 d-flex flex-column justify-content-center align-items-center flex-wrap">
      <p class="d-inline-block mb-0">
        <?= "".$member->getFirstname()." ".$member->getLastname();?>
      </p>
      <p class="d-inline-block mb-0">
        <?= "@" . $member->getPseudo() ."" ?>
      </p>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-12">
     <?= $member->getBio() ?>
    </div>
  </div>
</div>
<?php include('profilTabs.php') ?>

