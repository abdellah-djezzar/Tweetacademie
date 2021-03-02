<?php 
require('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;

$pseudo = $UserDataRepository->getMemberByPseudo($_GET['pseudo']);

if($pseudo){
  $_GET["id_user"] = $pseudo["ID"];
  header("Location: index.php?action=profil&id_user="$pseudo["ID"]");
} else {
  echo "non";
}

include('views/test.php');



