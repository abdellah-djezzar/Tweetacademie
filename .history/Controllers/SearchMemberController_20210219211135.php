<?php 
require('Repository/UserDataRepository.php');
$userDataRepository = new UserDataRepository;
$getMembers = $userDataRepository->getAllUser($_GET['pseudo']);
if(empty($getMembers)) { //
  echo "ok";
} else {
  echo json_encode("reponse ok");
}
