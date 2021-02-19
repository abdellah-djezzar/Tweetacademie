<?php 
require('Repository/TweetsRepository.php');
$TweetsRepository = new TweetsRepository;
if(isset($_POST["subuser"])){
  $followAMember = $TweetsRepository->followAMember($_POST['user'], $_SESSION['id']);
}