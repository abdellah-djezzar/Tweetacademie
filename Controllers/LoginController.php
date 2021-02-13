<?php
require ('Repository/UsersDataRepository.php');
require ('Model/member.php');
$UsersDataRepository = new UsersData;

if (isset($_SESSION['id']))
{
    header('Location: index.php?action=home');
}
if (isset($_POST["login"])){
        
  $getUserInfos = $UsersDataRepository->getAllFromUserByEmail($_POST['emailLogin']); 
  $checkPassword = $getUserInfos["password"];
  $userId = $getUserInfos["ID_user"];
  if(password_verify($_POST['passwordLogin'], $checkPassword)){

      $UsersDataRepository->userLogin($_POST['emailLogin'], $_POST['passwordLogin']);
      $UsersDataRepository->sessionStartLogIn($userId);
      header('Location: index.php?action=home');
  }
}

  include('views/security/login.php');