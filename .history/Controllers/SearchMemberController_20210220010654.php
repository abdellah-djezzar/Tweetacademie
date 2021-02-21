<?php 
require('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;
if(isset($_GET['pseudo'])){
  $getMembers = $UserDataRepository->getAllUser($_GET['pseudo']);
  if($getMembers) { //
    $array = [];
    foreach($getMembers as $key => $member){
      array_push($array, $member);
    }

    json_encode($array);
  }
}