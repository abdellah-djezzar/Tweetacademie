<?php 
require('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;
if(isset($_GET['pseudo'])){
  $getMembers = $UserDataRepository->getAllUser($_GET['pseudo']);
  if(empty($getMember)) { //
    echo json_encode($getMembers[0]["pseudo"]);
    var_dump($getMembers);
  } else {
    exit();
  }
  
}
include('views/messages/messagerie.php');