<div class="container-fluid">
     <div class="row">
        <div class="col col-lg-5 d-none d-lg-block">
            <img src="public/asset/twitterHom.png" class="img-fluid" alt="Welcome">
        </div>

        <div class="col col-lg-6">
          <div class="acc">
            <img src="https://img.icons8.com/fluent/48/000000/twitter.png" class="img-fluid" alt="Welcome">
            <h1 class="display-1">Ça se passe maintenant</h1>
            <h3 class="display-3">Rejoignez Twitter dès aujourd'hui.</h3>
            <div class="d-grid gap-2 d-lg-inline-flex p-3">
                <button class="btn btn-primary" type="button">S'inscrire</button>
                <button class="btn btn-primary" type="button">Se connecter</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php // INTÉGRER LE FORMULAIRE CI DESSOUS QUAND ON CLIQUE SUR "INSCRIRE" AVEC LE CSS DU DESSUS. (MODALES)?>

<!-- S'enregistrer -->
<form action="" method="POST">
  <label for="name">Nom</label>
  <input type="text" id="name" name="name">
  <label for="firstname">prénom</label>
  <input type="text" id="firstname" name="firstname">
  <label for="password">password</label>
  <input type="text" id="password" name="password">
  <label for="email">email</label>
  <input type="text" id="email" name="email">
  <input type="hidden" name="register" />
  <input type="submit">
</form>

<!---Se connecter -->
<form  action="" method="POST">
<label for="emailLogin">Addresse mail</label>
<input type="email" id="emailLogin" name="emailLogin">
<label for="passwordLogin">Mot de passe</label>
<input type="text" id="passwordLogin" name="passwordLogin">
<input type="hidden" name="login">
<button type="submit" id="submit">Valider</button>
</form>



<script src="public/scripts/main.js"></script>