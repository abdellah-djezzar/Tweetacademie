<?php 
require('Repository/MessagesRepository.php');

$MessagesRepository = new MessagesRepository;
$getConversation = $MessagesRepository->getConversation($_SESSION['id']);
var_dump($getConversation);
include('views/messages/homeMessage.php');