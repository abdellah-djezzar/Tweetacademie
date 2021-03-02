<?php 
require ('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;

if (!isset($_SESSION['id']))
{
    header('Location: index.php?action=home');
}

 if(isset($_POST["profil"])){

    $updateProfil = $UserDataRepository->updateProfil(
      $_POST["username"],
      $_POST["pseudo"],
      $_POST["bio"],
      $_POST["city"],
      $_POST["link"],
      $_SESSION['id'],
    );

    if(!empty($_POST['deleteAccount'])){

      $UserDataRepository->disableAccount($_POST['delete']);
      Session_destroy();
      header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
  }