<?php 
require('Repository/TweetsRepository.php');
$TweetsRepository = new TweetsRepository;
if(isset($_POST["unsubser"])){
  $unfollow = $TweetsRepository->unFollowAMember(9, 10);
}

var_dump($_GET['user_id']);
var_dump($unfollow);