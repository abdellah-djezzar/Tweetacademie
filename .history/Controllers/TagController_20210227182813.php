<?php 
require('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;
$pseudo = $UserDataRepository->getMemberByPseudo($_GET['pseudo']);
$pseudo["id"] = $_GET['id_user'];



