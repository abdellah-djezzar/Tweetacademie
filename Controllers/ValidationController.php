<?php
require ('Repository/UsersDataRepository.php');
$UsersDataRepository = new UsersData;
$validation = $UsersDataRepository->getAllFromUserByEmail($_GET["email"]);

if($_GET["email"] == $validation["email"]) { //
  echo json_encode("email existant");
} else {
  echo json_encode("ok");
}
