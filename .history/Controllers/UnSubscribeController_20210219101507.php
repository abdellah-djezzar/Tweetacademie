<?php 
require('Repository/TweetsRepository.php');
$TweetsRepository = new TweetsRepository;
if(isset($_POST["unsubser"])){
  $unfollow = $TweetsRepository->unFollowAMember($_POST["unsubuser"], 10);
}