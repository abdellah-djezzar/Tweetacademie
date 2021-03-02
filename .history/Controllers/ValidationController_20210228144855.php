<?php
require ('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;
$validation = $UserDataRepository->getAllFromUserByEmail($_GET["email"]);

if(empty($validation)) { //
  echo json_encode("ok");
} else {
  echo json_encode("not valid");
}
