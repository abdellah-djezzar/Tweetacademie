<?php
require ('Repository/MessagesRepository.php');
$MessagesRepository = new MessagesRepository;
if(isset($_POST['sendMessage'])) {
  $postMessage = $MessagesRepository->postMessage($_GET["id_user"], $_POST["text"], $_SESSION['id']);
}