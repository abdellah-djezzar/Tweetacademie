<div class="container-fluid p-5 bg-bluue">
   <div class="row d-flex flex-wrap justify-content-between">
      <div class="col-12 col-md-6 d-flex justify-content-center">
         <img src="public/asset/twitterHom.png" class="img-fluid" alt="Responsive image">
      </div>

      <div class="col-12 col-md-6 d-flex justify-content-center">

      <form action="" method="POST" class="justify-content-center">
   
      <h1 class="display-4 text-white-50 mb-4">Bienvenue sur Twitter ! Inscris-toi !</h1>

          <div class="mb-3">
            <input type="text" id="name" name="name" class="form-control" placeholder="Nom">
          </div>

          <div class="mb-3">
            <input type="text" id="firstname" name="firstname" placeholder="Prenom" class="form-control">
          </div>

          <div class="mb-3">
            <input type="date" id="dob" name="dob" class="form-control">
          </div>

         <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">@</span>
          <input  class="form-control" type="text" id="email" name="email" placeholder="Addresse e-mail" autocomplete="off" aria-describedby="basic-addon1">
          <span id="error"></span>
         </div>

         <div class="mb-3">
            <input type="text" id="username" name="username" placeholder="Username" class="form-control">
          </div>

          <div class="mb-3">
            <input type="text" id="pseudo" name="pseudo" placeholder="Pseudo" class="form-control">
          </div>

          <div class="mb-3">
            <input type="text" id="password" name="password" placeholder="Mot de passe" class="form-control">
          </div>

         <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label text-white-50 mb-4" for="exampleCheck1">J'accepte les conditions Twitter</label>
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
         </div>

         <!-- J'ai mis button au lieu d'input, erreur possible ? -->
         <div class="d-grid gap-2 col-6 mx-auto">
            <button type="submit" id="test" class="btn btn-light">Envoyer</button>
            <!-- <input type="submit" id="test"> -->
            <span id="error"></span>
         </div>  
     </form>
     </div>
   </div>
</div>
