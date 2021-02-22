<?php 
require('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;
$getMembers = $userDataRepository->getAllUser($_GET['pseudo']);

if($getMembers){
  echo "ok";
}

include('views/messages/messagerie.php');