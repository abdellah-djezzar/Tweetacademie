<?php 
require('Repository/TweetsRepository.php');
$TweetsRepository = new TweetsRepository;
if(isset($_POST["user"])){
  $followAMember = $TweetsRepository->followAMember($_POST['user'], $_SESSION['id']);
}

  $BtnSub = $TweetsRepository->checkIfSubToMember();