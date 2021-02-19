<?php 
require('Repository/TweetsRepository.php');
$TweetsRepository = new TweetsRepository;
if(isset($_POST["unsubuser"])){
  $unfollow = $TweetsRepository->unFollowAMember($_POST["unsubuser"], 10);
}
var_dump($_POST);