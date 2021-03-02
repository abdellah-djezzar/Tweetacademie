<?php 
require('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;

$pseudo = $UserDataRepository->getMemberByPseudo($_GET['pseudo']);

if($pseudo){
  var_dump($pseudo);
} else {
  echo "non";
}

include('views/test.php');



