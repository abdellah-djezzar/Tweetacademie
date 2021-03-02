<?php
require ('Repository/UserDataRepository.php');
require ('Repository/ValidationRepository.php');
$UserDataRepository = new UserDataRepository;
$validation = $UserDataRepository->getAllFromUserByEmail($_GET["email"]);

if(empty($validation)) { //
  echo json_encode("e-mail available");
} else {
  echo json_encode("e-mail already exist");
}
