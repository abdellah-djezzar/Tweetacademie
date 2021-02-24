<?php // VIEWS POUR LOGIN ?>
<div class="mx-auto mt-5" style="width: 370px;">
            <form action="" method="POST">

                <img src="https://img.icons8.com/fluent/48/000000/twitter.png" class="rounded float-start" alt="bird">
                <h4 class="text-dark-50 mt-3">Se connecter à Twitter</h4>

                <div class="mb-4">
                  <input type="email" id="emailLogin" name="emailLogin" class="form-control" placeholder="Adresse email">
                </div>

                <div class="mb-4">
                  <input type="text" id="passwordLogin" name="passwordLogin" class="form-control" placeholder="Mot de passe">
                </div>

                <div class="d-grid gap-2">
                <input type="hidden" name="login">
                    <button type="submit" id="submit" style="background-color:#38A1F3" class="btn btn-primary">Se connecter</button>
                </div>

                <div class="help pt-4 mb-5">
                   <!-- Page mdp oublié? -->
                    <a href="#">Mot de passe oublié ? </a> 
                    <a href="index.php"> S'inscrire sur Twitter </a>  
                  </div>
            </form>  
 </div>