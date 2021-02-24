<?php 
require ('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;
 if(isset($_POST["profil"])){

    $updateProfil = $UserDataRepository->updateProfil(
      $_POST["username"],
      $_POST["pseudo"],
      $_POST["bio"],
      $_POST["city"],
      $_POST["link"],
      $_SESSION['id'],
    );
  }

  var_dump($_POST["profil"]);
