<?php 
require('Repository/TweetsRepository.php');
$TweetsRepository = new TweetsRepository;
if(isset($_POST["unuser"])){
  $unfollow = $TweetsRepository->unFollowAMember($_POST['user'], $_SESSION['id']);
}