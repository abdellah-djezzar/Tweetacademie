<?php 
require('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;
if(isset($_GET['pseudo'])){
  $getMembers = $UserDataRepository->getAllUser($_GET['pseudo']);
  if($getMembers) { //
    foreach($getMembers as $member){
      json_encode($member, JSON_FORCE_OBJECT);
    }
  }
}
include('views/messages/messagerie.php');