<?php 
require('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;
if(isset($_GET['pseudo'])){
  $getMembers = $UserDataRepository->getAllUser($_GET['pseudo']);
  if($getMembers) { //
    $array = [];
    foreach($getMembers as $member){
      array_push($array, $member);
    }
    echo json_encode($array);
  } else {
    echo json_encode("error");
  }
}


// barre de recherche pour rechercher un membre avec qui discuter via l'onglet "messagerie"

// vue liée : views/messages/messageries