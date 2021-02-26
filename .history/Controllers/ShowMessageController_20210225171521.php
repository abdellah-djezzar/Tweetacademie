<?php 
require ('Repository/MessagesRepository.php');
require ('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;
$MessagesRepository = new MessagesRepository;
$showMessage = $MessagesRepository->getMessage($_GET["id_user"], $_SESSION['id']);

include('views/messages/showMessages.php');
