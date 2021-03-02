<?php
require ('Repository/MessagesRepository.php');
if (empty($_SESSION['id']))
{
    header('Location: index.php?action=home');
}
$MessagesRepository = new MessagesRepository;
$postMessage = $MessagesRepository->postMessage($_GET["id_user"], $_POST["text"], $_SESSION['id']);