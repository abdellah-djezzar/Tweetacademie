<form action="" method="POST" id="formEditProfil" class="w-100 d-flex flex-column justify-content-center mt-5">
  <div class="row">
    <div class="col-6">
         <div class="form-group">
         <label for="username">Votre username:</label>
         <input class="w-100" type="text" id="username" name="username" value="<?= $member->getUsername()?>">
         </div>

         <div class="form-group">
         <label for="pseudo">Pseudo:</label>
         <input class="w-100" type="text" id="pseudo" name="pseudo" value="<?= $member->getPseudo()?>">
         </div>

         <div class="form-group">
         <label for="bio">Bio:</label>
         <input class="w-100" type="text" id="bio" name="bio" value="<?= $member->getBio()?>">
         </div>

         <div class="form-group">
         <label for="city">Ville:</label>
         <input class="w-100" type="text" id="city" name="city" value="<?= $member->getCity()?>">
         </div>

         <div class="form-group">
         <label for="link">Lien:</label>
         <input class="w-100" type="text" id="link" name="link" value="<?= $member->getLink()?>">
         </div>

         <div class="form-group mt-5">
         <input type="submit" value="Modifier mon profil">
         </div>

         <input type="hidden" name="profil">
     </form>
    </div>
    <div class="col-6">
          <div class="form-group">
          <?php include('deleteAccount.php') ?>
         </div>
    </div>
  </div>