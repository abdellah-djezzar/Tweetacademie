<?php 
require('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;
if(isset($_GET['pseudo'])){
  $getMembers = $UserDataRepository->getAllUser($_GET['pseudo']);
  if($getMembers) { //
    foreach($getMembers as $member){
      echo json_encode($getMembers["pseudo"]);
    }
  } else {
    echo json_encode("aucun resultat");
  }
  
}
include('views/messages/messagerie.php');