<?php 

require ('Repository/MessagesRepository.php');
$MessagesRepository = new MessagesRepository;
$showMessage = $MessagesRepository->getMessage($_GET["id_user"], $_SESSION['id']);

include('views/messages/showMessages.php');
