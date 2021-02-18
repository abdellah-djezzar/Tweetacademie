<form action="" method="POST" class="w-100 d-flex flex-column justify-content-center mt-5">
  <div class="row">
    <div class="col-6">
         <div class="form-group">
         <label for="email">
         <input class="w-100" type="text" id="email" name="email" value="<?= $member->getEmail()?>" autocomplete="off">
         <span id="error"></span>
         </div>
         </div>

         <div class="form-group">
         <input class="w-100" type="text" id="password" name="password" placeholder="Mot de passe">
         </div>

         <div class="form-group">
         <input class="w-100" type="text" id="username" name="username" value="<?= $member->getUsername()?>">
         </div>

         <div class="form-group">
         <input class="w-100" type="text" id="pseudo" name="pseudo" value="<?= $member->getPseudo()?>">
         </div>

         <div class="form-group">
         <input class="w-100" type="text" id="bio" name="bio" value="<?= $member->getBio()?>">
         </div>

         <div class="form-group">
         <input class="w-100" type="text" id="city" name="city" value="<?= $member->getCity()?>">
         </div>

         <div class="form-group">
         <input class="w-100" type="text" id="link" name="link" value="<?= $member->getLink()?>">
         </div>
    </div>
  </div>
         <div class="form-group">
         <input type="hidden" name="register" />
         <input type="submit" id="test">
         <span id="error"></span>
         </div>
      </form>