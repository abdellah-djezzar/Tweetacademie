<?php
if (empty($_SESSION['id']))
{
    header('Location: index.php?action=home');
}
require('Repository/MessagesRepository.php');
$MessagesRepository = new MessagesRepository;
$getConversation = $MessagesRepository->getConversation($_SESSION['id']);
include('views/messages/homeMessage.php');

