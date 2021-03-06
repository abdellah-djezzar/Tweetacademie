<h5 class="text-center mt-4">Your account is deactivated. You can reactivate it by clicking on the button below and then reconnect with your credentials.</h5>

<?php 
if(isset($_GET["msg"])) {
  echo "Your account is now reactivated. You will be redirected to the login page.";
  header("refresh:2;url=index.php?action=login");
}
?>
<div class="container-fluid mt-5">
<form action="" method="POST" class="formActivate">
  <p class="text-center">Please enter your information.</p>
<label class="mt-2" for="email">Email :</label>
<input type="text" id="email" name="email">
<br>
<label for="password">Password :</label>
<input type="text" id="password" name="password">
<input type="hidden" name="login">
<button type="submit" class="btn btn-primary mt-5 float-right">Reactivate !</button>
</form>
</div>