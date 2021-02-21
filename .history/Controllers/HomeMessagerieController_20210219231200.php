<?php 
require('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;
if(isset($_GET['pseudo'])){
  $getMembers = $UserDataRepository->getAllUser($_GET['pseudo']);
  if($getMembers) { //
    foreach($getMembers as $member){
      echo json_encode($member["pseudo"]) . json_encode(["ID"]);
    }
  } else {
    echo json_encode("");
  }
  
}
include('views/messages/messagerie.php');