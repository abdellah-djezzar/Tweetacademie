<?php
require ('Repository/UserDataRepository.php');
require ('Repository/ValidationRepository.php');

$validationRepository = new ValidationRepository;
$UserDataRepository = new UserDataRepository;
$validation = $UserDataRepository->getAllFromUserByEmail($_GET["email"]);

if(isset($_GET["email"]) && empty($validation)) {
  echo json_encode("e-mail available");
} else {
  echo json_encode("e-mail already exist");
}


if(isset($_GET["pseudo"])){
  $checkPseudo = $validationRepository->checkPseudo($_GET["pseudo"]);
  
  if (empty($checkPseudo)){
    echo json_encode("pseudo available");
  } else {
  echo json_encode("pseudo already exist");
  }
}


