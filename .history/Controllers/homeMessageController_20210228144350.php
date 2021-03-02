<?php 
require('Repository/MessagesRepository.php');
if (empty($_SESSION['id']))
{
    header('Location: index.php?action=home');
}
$MessagesRepository = new MessagesRepository;
$getConversation = $MessagesRepository->getConversation($_SESSION['id']);
include('views/messages/homeMessage.php');