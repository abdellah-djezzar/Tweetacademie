<?php 
require('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;

if(isset($_POST["login"])){

  if(!empty($_POST["email"]) && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) &&
     !empty($_POST["password"])){
  
    $getUserInfos = $UserDataRepository->getAllFromUserDesactivatedByEmail($_POST['email']); 
    $checkPassword = $getUserInfos["password"];

    if(password_verify($_POST['password'], $checkPassword)){
  
        $UserDataRepository->userLogin($_POST['emailLogin'], $_POST['passwordLogin']);
        $UserDataRepository->sessionStartLogIn($getUserInfos["ID"]);
        header('Location: index.php?action=home');
    } else {
      header ('Location: index.php?action=activateAccount');
    }
  } 


}


include('views/security/activateAccount.php');