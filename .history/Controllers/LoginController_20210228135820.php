<?php
require ('Repository/UserDataRepository.php');
require ('Model/member.php');
$UserDataRepository = new UserDataRepository;

if (isset($_SESSION['id']))
{
    header('Location: index.php?action=home');
}

if (isset($_POST["login"])) {

  if(!empty($_POST["emailLogin"]) && filter_var($_POST["emailLogin"], FILTER_VALIDATE_EMAIL) &&
      !empty($_POST["passwordLogin"])){
  
    $getUserInfos = $UserDataRepository->getAllFromUserByEmail($_POST['emailLogin']); 
    $checkPassword = $getUserInfos["password"];
    // $userId = $getUserInfos["ID"];
    if(password_verify($_POST['passwordLogin'], $checkPassword)){
  
        $UserDataRepository->userLogin($_POST['emailLogin'], $_POST['passwordLogin']);
        $UserDataRepository->sessionStartLogIn($getUserInfos["ID"]);
        header('Location: index.php?action=home');
    }
  } else {
    die("ok");
  }
}

  include('views/security/login.php');