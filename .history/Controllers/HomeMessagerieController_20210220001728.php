<?php 
require('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;
if(isset($_GET['pseudo'])){
  $getMembers = $UserDataRepository->getAllUser($_GET['pseudo']);
  if($getMembers) { //
    $array = [];
    foreach($getMembers as $member){
      $member["pseudo"];
    }
  }
}
include('views/messages/messagerie.php');