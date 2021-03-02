<div class="container-fluid p-5 bg-bluue">
<!-- COMMENTAIRE --> 
   <div class="row d-flex flex-wrap justify-content-between">
      <div class="col-12 col-md-6 d-flex justify-content-center mb-5">
         <img src="public/asset/twitterHom.png" class="img-fluid" alt="Responsive image">
      </div>
      <div class="col-12 col-md-6 d-flex justify-content-center">
      <form action="" method="POST" class="w-100 d-flex flex-column justify-content-center">
      
      <h1 class="display-4 text-white-50 mb-4">Bienvenue sur Twitter ! Inscris-toi !</h1>


        <div class="mb-3">
         <input  class="form-control" type="text" id="name" name="name" placeholder="Nom">
         </div>

         <div class="mb-3">
         <input class="form-control" type="text" id="firstname" name="firstname" placeholder="Prenom">
         </div>

         <div class="input-group mb-3">
         <span class="input-group-text" id="basic-addon1">@</span>
         <input class="form-control" type="text" id="email" name="email" placeholder="Addresse e-mail" autocomplete="off" aria-describedby="basic-addon1">
         <span id="errorMail"></span>
         </div>

         <div class="mb-3">
         <input class="form-control" type="text" id="password" name="password" placeholder="Mot de passe">
         </div>

         <div class="mb-3">
         <input class="form-control" type="date" id="dob" name="dob">
         </div>

         <div class="mb-3">
         <input class="form-control" type="text" id="username" name="username" placeholder="Username">
         </div>

         <div class="mb-1">
         <input class="form-control" type="text" id="pseudo" name="pseudo" placeholder="Pseudo">
         <span id="errorPseudo"></span>
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

        <div class="mb-3">
            <button type="submit" id="test" class="btn btn-light form-control">Envoyer</button>
            <span id="error"></span>
         </div>
         <input type="hidden" name="register">
      </form>
   </div>
</div>
</div>