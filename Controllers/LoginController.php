<?php
require ('Repository/UsersData.php');
require ('Model/member.php');
$usersData = new UsersData;

if (isset($_SESSION['id']))
{
    header('Location: index.php?action=home');
}
if (isset($_POST["login"])){
        
  $getUserInfos = $usersData->getAllFromUserByEmail($_POST['emailLogin']); 
  $checkPassword = $getUserInfos["password"];
  $userId = $getUserInfos["ID_user"];
  if(password_verify($_POST['passwordLogin'], $checkPassword)){

      $usersData->userLogin($_POST['emailLogin'], $_POST['passwordLogin']);
      $usersData->sessionStartLogIn($userId);
      header('Location: index.php?action=home');
  }
}

  include('views/security/login.php');