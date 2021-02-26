<?php 

require ('Repository/MessagesRepository.php');
$MessagesRepository = new MessagesRepository;
$showMessage = $MessagesRepository->getMessage(54, 10);

include('views/messages/showMessages.php');
