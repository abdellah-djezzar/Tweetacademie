<?php 
require ('Repository/MessagesRepository.php');

if(isset($_GET['id_user'])){

  $MessagesRepository = new MessagesRepository;
  $showMessage = $MessagesRepository->getMessage($_GET["id_user"], $_SESSION['id']);
  include('views/messages/showMessages.php');


}
