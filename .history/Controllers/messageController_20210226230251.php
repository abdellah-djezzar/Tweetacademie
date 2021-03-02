<?php
$MessagesRepository = new MessagesRepository;
$getConversation = $MessagesRepository->getConversation($_SESSION['id']);
include('views/messages/homeMessage.php');

