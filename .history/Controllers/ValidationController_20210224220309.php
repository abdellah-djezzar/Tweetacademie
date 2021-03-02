<?php
require ('Repository/UsersDataRepository.php');
$UserDataRepository = new UserDataRepository;
$validation = $UsersDataRepository->getAllFromUserByEmail($_GET["email"]);

if(empty($validation)) { //
  echo json_encode("ok");
} else {
  echo json_encode("not valid");
}
