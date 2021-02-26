<?php 

require ('Repository/MessagesRepository.php');
$MessagesRepository = new MessagesRepository;
$showMessage = $MessagesRepository->getMessage($_GET["user_id"], $_SESSION['id']);