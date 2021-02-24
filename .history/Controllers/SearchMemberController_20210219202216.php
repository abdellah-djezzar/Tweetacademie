<?php 
require('Repository/UserDataRepository.php');
$userDataRepository = new UserDataRepository;
$getMembers = $userDataRepository->getAllUser($_GET['pseudo']);
var_dump($getMembers);

if(empty($getMembers)) { //
  echo json_encode("ok");
} else {
  echo json_encode("not valid");
}
