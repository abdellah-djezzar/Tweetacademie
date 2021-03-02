<?php 
require('Repository/UserDataRepository.php');
if (empty($_SESSION['id']))
{
    header('Location: index.php?action=home');
}
$UserDataRepository = new UserDataRepository;
$pseudo = $UserDataRepository->getMemberByPseudo($_GET['pseudo']);

if($pseudo){
  header("Location: index.php?action=profil&id_user=" . $pseudo["ID"]. "");
} else {
  //créer la views "membre n'existe pas".
  echo "non";
}


