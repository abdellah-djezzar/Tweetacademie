<?php 
require ('Repository/MessagesRepository.php');
require_once ('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;
$MessagesRepository = new MessagesRepository;

$getUserA = $UserDataRepository->getUserById($_SESSION['id']);
$getUserB = $UserDataRepository->getUserById($_GET["id_user"]);

var_dump($getUserA);
var_dump($getUserB);

$showMessage = $MessagesRepository->getMessage($_GET["id_user"], $_SESSION['id']);

include('views/messages/showMessages.php');
