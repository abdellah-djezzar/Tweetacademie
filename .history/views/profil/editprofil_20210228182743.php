<form action="" method="POST" id="formEditProfil" class="w-100 d-flex flex-column justify-content-center mt-5">
  <div class="row">
    <div class="col-7">

          <div class="mb-3">
            <label for="username">Votre username:</label>
            <input class="form-control" type="text" id="username" name="username" value="<?= $member->getUsername()?>">
          </div>

          <div class="mb-3">
            <label for="pseudo">Pseudo:</label>
            <input class="form-control" type="text" id="pseudo" name="pseudo" value="<?= $member->getPseudo()?>">
          </div>

          <div class="mb-3">
            <label for="bio">Bio:</label>
            <input class="form-control" type="text" id="bio" name="bio" value="<?= $member->getBio()?>">
          </div>

          <div class="mb-3">
         <label for="city">Ville:</label>
         <input class="form-control" type="text" id="city" name="city" value="<?= $member->getCity()?>">
         </div>

         <div class="mb-3">
         <label for="link">Lien:</label>
         <input class="form-control" type="text" id="link" name="link" value="<?= $member->getLink()?>">
         </div>

         <div class="form-group m-5">
         <button type="submit" class="btn btn-primary">Sauvegarder</button>
         </div>

         <input type="hidden" name="profil">
 
   </div>
  </div>
   </form>

    <div class="col-5">
          <div class="form-group">
          <?php include('deleteAccount.php') ?>
         </div>
    </div>
  </div>