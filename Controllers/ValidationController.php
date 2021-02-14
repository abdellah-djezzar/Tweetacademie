<?php
require ('Repository/UsersDataRepository.php');
$UsersDataRepository = new UsersData;
$validation = $UsersDataRepository->getAllFromUserByEmail($_GET["email"]);

if(empty($validation)) { //
  echo json_encode("ok");
} else {
  echo json_encode("e mail existant");
}
