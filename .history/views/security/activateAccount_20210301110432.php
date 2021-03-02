<p>Votre compte est désactivé. Vous pouvez le réactiver en cliquant sur le bouton ci-dessous puis vous reconnecter avec vos identifiants.</p>

<?php 
if(isset($checkInfo)) {
  var_dump($checkInfo);
}
?>

<form action="" method="POST">
<label for="email">Email</label>
<input type="text" id="email" name="email">

<label for="password">Mot de passe</label>
<input type="text" id="password" name="password">
<input type="hidden" name="login">
<input type="submit">
</form>