<?php
require ('Repository/ValidationRepository.php');
$validationRepository = new ValidationRepository;

if(isset($_GET["email"])) {
  $validation = $validationRepository->checkEmail(strip_tag($_GET["email"]));
  if($validation) {
  echo json_encode("e-mail available");
} else {
  echo json_encode("e-mail already exist");
}
}


if(isset($_GET["pseudo"])){
  $checkPseudo = $validationRepository->checkPseudo(strip_tag($_GET["pseudo"]));
  
  if (empty($checkPseudo)){
    echo json_encode("pseudo available");
  } else {
  echo json_encode("pseudo already exist");
  }
}


