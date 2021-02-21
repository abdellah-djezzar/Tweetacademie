<?php 

require('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;

$getUser = $UserDataRepository->getAllUser($_GET['pseudo']);
var_dump($getUser);
include('views/messages/messagerie.php');