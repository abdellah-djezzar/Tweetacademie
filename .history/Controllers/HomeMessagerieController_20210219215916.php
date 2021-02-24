<?php 
require('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;
if(isset($_GET['pseudo'])){
  $getMembers = $userDataRepository->getAllUser($_GET['pseudo']);
  if(empty($getMembers)) { //
    echo "ok";
  } else {
    echo json_encode("reponse ok");
  }
  
}


include('views/messages/messagerie.php');