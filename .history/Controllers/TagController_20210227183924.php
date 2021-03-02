<?php 
require('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;

$pseudo = $UserDataRepository->getMemberByPseudo($_GET['pseudo']);

if($pseudo){
  var_dump($pseudo);
}



