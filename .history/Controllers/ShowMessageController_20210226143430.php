<?php 
require ('Repository/MessagesRepository.php');

if(!empty($_GET['id_user'])){

  $MessagesRepository = new MessagesRepository;
  $showMessage = $MessagesRepository->getMessage($_GET["id_user"], $_SESSION['id']);
  include('views/messages/showMessages.php');


}
