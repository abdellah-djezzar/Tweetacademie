<?php 
require('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;
if(isset($_GET['pseudo'])){
  $getMembers = $UserDataRepository->getAllUser($_GET['pseudo']);
  if($getMembers) { //
    foreach($getMembers as $member){
      $pseudo = json_encode($member["pseudo"]);
    }
  } else {
    echo json_encode("");
  }
  
}
include('views/messages/messagerie.php');