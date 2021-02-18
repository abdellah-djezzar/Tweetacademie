<form action="index.php?action=profil#editprofil" method="POST" class="w-100 d-flex flex-column justify-content-center mt-5">
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
  </div>

  <div class="row">
  <div class="col-12">
  <p>Vos données sont conservées et accessibles en cas de réactivation</p>
  <button type="button" class="btn btn-warning">Desactiver mon compte</button>
  </div>
  <div class="col-12">
  <p>Vos données seront supprimées intégralement de nos serveurs. Attention il ne sera pas possible de les récupérer ultérieusement. Vous perdrez votre historique, abonnements et abonnés.</p>
  <button type="button" class="btn btn-danger">Supprimer mon compte</button>
  </div>
  </div>