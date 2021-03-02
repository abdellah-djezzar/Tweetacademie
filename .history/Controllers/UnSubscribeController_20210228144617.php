<?php 
require('Repository/TweetsRepository.php');
$TweetsRepository = new TweetsRepository;
if (empty($_SESSION['id']))
{
    header('Location: index.php?action=home');
}
if(isset($_POST["unsubuser"])){
  $unfollow = $TweetsRepository->unFollowAMember($_POST["unsubuser"], $_SESSION['id']);
}