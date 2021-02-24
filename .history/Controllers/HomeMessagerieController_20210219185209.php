<?php 

require('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;

$getUser = $UserDataRepository->getAllUser($_SESSION['id']);
include('views/messages/messagerie.php');