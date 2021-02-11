<?php
require('Repository/UsersData.php');
$usersData = new UsersData;
$validation = $usersData->getAllFromUserByEmail($_GET["email"]);

if($_GET["email"] == $validation["email"]) { //
  echo json_encode("email existant");
} else {
  echo json_encode("ok");
}
