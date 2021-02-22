<?php 
require('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;
if(isset($_GET['pseudo'])){
  $getMembers = $UserDataRepository->getAllUser($_GET['pseudo']);
  if(empty($getMember)) { //
    echo $getMembers["pseudo"];
  }
  
}
include('views/messages/messagerie.php');