<?php 
require('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;

$pseudo = $UserDataRepository->getMemberByPseudo($_GET['pseudo']);

var_dump($pseudo);