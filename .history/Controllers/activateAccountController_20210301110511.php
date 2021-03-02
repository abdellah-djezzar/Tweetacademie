<?php 
require('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;

if(isset($_POST["login"])){

  if(!empty($_POST["email"]) && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) &&
     !empty($_POST["password"])){
  
    $getUserInfos = $UserDataRepository->getAllFromUserDesactivatedByEmail($_POST['email']); 
    $checkPassword = $getUserInfos["password"];

    if(password_verify($_POST['password'], $checkPassword)){
          $activateAccount = $UserDataRepository->activateAccount($getUserInfos["ID"]);
    } else {
      header ('Location: index.php?action=activateAccount');
    }
  } 
}


include('views/security/activateAccount.php');