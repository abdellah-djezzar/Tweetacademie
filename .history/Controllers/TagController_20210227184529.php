<?php 
require('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;

$pseudo = $UserDataRepository->getMemberByPseudo($_GET['pseudo']);

if($pseudo){
  $pseudo["id"] = $_GET["id_user"];
} else {
  echo "non";
}

include('views/test.php');



