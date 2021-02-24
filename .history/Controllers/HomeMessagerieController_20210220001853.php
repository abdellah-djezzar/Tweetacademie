<?php 
require('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;
if(isset($_GET['pseudo'])){
  $getMembers = $UserDataRepository->getAllUser($_GET['pseudo']);
  if($getMembers) { //
    $json = [];
    foreach($getMembers as $member){
      json_encode($member);
    }
  }
}
include('views/messages/messagerie.php');