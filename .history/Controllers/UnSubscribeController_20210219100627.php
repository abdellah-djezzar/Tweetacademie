<?php 
require('Repository/TweetsRepository.php');
$TweetsRepository = new TweetsRepository;
if(isset($_POST["unsubuser"])){
  $unfollow = $TweetsRepository->unFollowAMember($_GET['user'], $_SESSION['id']);
}