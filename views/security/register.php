<div class="container-fluid p-5 register">
<!-- COMMENTAIRE --> 
   <div class="row d-flex flex-wrap justify-content-between">
      <div class="col-12 col-md-6 d-flex justify-content-center mb-5">
         <img src="public/asset/twitterHom.png" class="img-fluid" alt="Responsive image">
      </div>
      <div class="col-12 col-md-6 d-flex justify-content-center">
      <form action="" method="POST" class="w-100 d-flex flex-column justify-content-center" id="register">
      
      <h1 class="display-4 text-white-50 mb-4">Welcome on Twitter ! Register yourself !</h1>


        <div class="mb-3">
         <input class="form-control" type="text" id="name" name="name" placeholder="Last name">
         </div>

         <div class="mb-3">
         <input class="form-control" type="text" id="firstname" name="firstname" placeholder="First name">
         </div>

         <div class="input-group mb-1">
         <span class="input-group-text" id="basic-addon1">@</span>
         <input class="form-control" type="text" id="email" name="email" placeholder="E-mail" autocomplete="off" aria-describedby="basic-addon1">
         </div>   
         <span id="errorMail"></span>

         <div class="mb-3">
         <input class="form-control" type="text" id="password" name="password" placeholder="Password">
         </div>

         <div class="mb-3">
         <input class="form-control" type="date" id="dob" name="dob">
         </div>

         <div class="mb-1">
         <input class="form-control" type="text" id="username" name="username" placeholder="Username">
         </div>
         <span id="errorUsername"></span>

         <div class="mb-1">
         <input class="form-control" type="text" id="pseudo" name="pseudo" placeholder="Pseudo">
         </div>
         <span id="errorPseudo"></span>

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

        <div class="mb-5">
            <button type="submit" id="test" class="btn btn-light form-control">Send</button>
         </div>
         <input type="hidden" name="register">
      </form>
   </div>
</div>
</div>