<?php 
require('Repository/TweetsRepository.php');
$TweetsRepository = new TweetsRepository;
if(isset($_POST["unsubuser"])){
  $unfollow = $TweetsRepository->unFollowAMember($_GET['id_user'], $_SESSION['id']);
}

var_dump($_GET["user"])