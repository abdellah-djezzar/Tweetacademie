<?php 
require('Repository/UserDataRepository.php');
$userDataRepository = new UserDataRepository;
$getMembers = $userDataRepository->getAllUser($_GET['pseudo']);
if(empty($getMembers)) { //
  echo json_encode("Ce membre n'existe pas");
} else {
  echo json_encode("reponse ok");
}
