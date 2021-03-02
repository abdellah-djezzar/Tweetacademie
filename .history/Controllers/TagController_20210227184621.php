<?php 
require('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;

$pseudo = $UserDataRepository->getMemberByPseudo($_GET['pseudo']);

if($pseudo){
  $_GET["id_user"] = $pseudo["id"];
  var_dump($_GET["id_user"]);
} else {
  echo "non";
}

include('views/test.php');



