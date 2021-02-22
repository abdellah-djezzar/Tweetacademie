<?php 

require('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;

$getUser = $UserDataRepository->getAllUser($_SESSION['id']);
var_dump($getUser);
include('views/messages/messagerie.php');