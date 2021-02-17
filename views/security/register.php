<div class="container p-5">
   <div class="row d-flex flex-wrap justify-content-between">
      <div class="col-12 col-md-6 d-flex justify-content-center mb-5">
         <img src="public/asset/twitterHom.png" class="img-fluid" alt="Responsive image">
      </div>
      <div class="col-12 col-md-6 d-flex justify-content-center">
      <form action="" method="POST" class="w-100 d-flex flex-column justify-content-center">
         <div class="form-group">
         <input class="w-100" type="text" id="name" name="name" placeholder="Nom">
         </div>

         <div class="form-group">
         <input class="w-100" type="text" id="firstname" name="firstname" placeholder="Prenom">
         </div>

         <div class="form-group">
         <input class="w-100" type="text" id="email" name="email" placeholder="Addresse e-mail" autocomplete="off">
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
         <input class="w-100" type="hidden" id="bio" name="bio" value="Aucune bio">
         </div>

         <div class="form-group">
         <input class="w-100" type="hidden" id="city" name="city" value="Non communiqué">
         </div>

         <div class="form-group">
         <input class="w-100" type="hidden" id="link" name="link" value="Aucun Lien">
         </div>

         <div class="form-group">
         <input class="w-100" type="hidden" id="deleted" name="deleted" value="0">
         </div>

         <div class="form-group">
         <input type="hidden" name="register" />
         <input type="submit" id="test">
         <span id="error"></span>
         </div>
      </form>
   </div>
</div>
</div>