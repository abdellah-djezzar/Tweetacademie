<?php 
require('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;
if(isset($_GET['pseudo'])){
  $getMembers = $UserDataRepository->getAllUser($_GET['pseudo']);
  if($getMembers) { //
    foreach($getMembers as $member){
      json_encode($member["pseudo"]) . json_encode($member["ID"]);
    }
  } else {
      json_encode("");
  }
  
}
include('views/messages/messagerie.php');