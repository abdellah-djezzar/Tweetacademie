<?php 
require('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;
if(isset($_GET['pseudo'])){
  $getMembers = $UserDataRepository->getAllUser($_GET['pseudo']);
  if($getMembers) { //
    echo json_encode($getMembers[0]["pseudo"]);
  } else {
    echo json_encode("aucun resultat");
  }
  
}
include('views/messages/messagerie.php');