<?php

if(isset($_POST['submit'])){
  $UserDataRepository->disableAccount($_POST["test"]);
  var_dump($_POST['test']);
}
var_dump($_POST['test']);


include('views/profil/deleteAccount.php');