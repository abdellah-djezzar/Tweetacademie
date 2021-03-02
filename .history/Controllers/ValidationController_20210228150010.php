<?php
require ('Repository/UserDataRepository.php');
require ('Repository/ValidationRepository.php');

$validationRepository = new ValidationRepository;
$checkPseudo = $validationRepository->checkPseudo($_GET["pseudo"]);
$UserDataRepository = new UserDataRepository;
$validation = $UserDataRepository->getAllFromUserByEmail($_GET["email"]);

if(empty($validation)) { //
  echo json_encode("e-mail available");
} else {
  echo json_encode("e-mail already exist");
}

if(empty($checkPseudo)) { //
  echo json_encode("pseudo available");
} else {
  echo json_encode("pseudo already exist");
}


