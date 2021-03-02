<?php
require ('Repository/ValidationRepository.php');
$validationRepository = new ValidationRepository;

if(isset($_GET["email"])) {
  $validation = $validationRepository->checkEmail(strip_tags($_GET["email"]));
  if(empty($validation)) {
  echo json_encode("e-mail available");
} else {
  echo json_encode("e-mail already exist");
}
}


if(isset($_GET["pseudo"])){
  $checkPseudo = $validationRepository->checkPseudo(strip_tags($_GET["pseudo"]));
  
  if (empty($checkPseudo)){
    echo json_encode("pseudo available");
  } else {
  echo json_encode("pseudo already exist");
  }
}


if(isset($_GET["username"])){
  $checkUsername = $validationRepository->checkPseudo(strip_tags($_GET["username"]));
  
  if (empty($checkUsername)){
    echo json_encode("username available");
  } else {
  echo json_encode("username already exist");
  }
}


