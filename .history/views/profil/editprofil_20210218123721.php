<form action="" method="POST" class="w-100 d-flex flex-column justify-content-center">

         <div class="form-group">
         <input class="w-100" type="text" id="email" name="email" value="<?= $member->getEmail()?>" autocomplete="off">
         <span id="error"></span>
         </div>

         <div class="form-group">
         <input class="w-100" type="text" id="password" name="password" placeholder="Mot de passe">
         </div>

         <div class="form-group">
         <input class="w-100" type="date" id="dob" name="dob">
         </div>

         <div class="form-group">
         <input class="w-100" type="text" id="username" name="username" placeholder="Username">
         </div>

         <div class="form-group">
         <input class="w-100" type="text" id="pseudo" name="pseudo" placeholder="Pseudo">
         </div>

         <div class="form-group">
         <input class="w-100" type="text" id="bio" name="bio" value="Aucune bio">
         </div>

         <div class="form-group">
         <input class="w-100" type="text" id="city" name="city" value="Non communiqué">
         </div>

         <div class="form-group">
         <input class="w-100" type="text" id="link" name="link" value="Aucun Lien">
         </div>

         <div class="form-group">
         <input type="hidden" name="register" />
         <input type="submit" id="test">
         <span id="error"></span>
         </div>
      </form>