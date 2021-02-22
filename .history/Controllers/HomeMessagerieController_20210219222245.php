<?php 
require('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;
if(isset($_GET['pseudo'])){
  $getMembers = $UserDataRepository->getAllUser($_GET['pseudo']);
  if(empty($getMember)) { //
    echo $getMembers["pseudo"];
    var_dump($getMembers);
  }
  
}
include('views/messages/messagerie.php');