<?php 
require('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;
if(isset($_GET['pseudo'])){
  $getMembers = $UserDataRepository->getAllUser($_GET['pseudo']);
  if(empty($getMember)) { //
    echo json_encode("reponse ok");
    var_dump($getMembers);
  } else {
    echo json_encode("reponse ok");
  }
  
}
include('views/messages/messagerie.php');