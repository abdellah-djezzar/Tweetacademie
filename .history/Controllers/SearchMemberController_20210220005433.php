<?php 
require('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;
if(isset($_GET['pseudo'])){
  $getMembers = $UserDataRepository->getAllUser($_GET['pseudo']);
  var_dump($getMembers);
  if($getMembers) { //
    foreach($getMembers as $key => $member){
     echo json_encode($member);
    }
  }
}