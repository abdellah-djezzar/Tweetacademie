<?php 
require('Repository/TweetsRepository.php');
$TweetsRepository = new TweetsRepository;
if(isset($_POST["unsubser"])){
  $unfollow = $TweetsRepository->unFollowAMember($_GET['id_user'], $_SESSION['id']);
}

var_dump($unfollow);
var_dump($_GET['id_user']);
var_dump($_SESSION['id']);