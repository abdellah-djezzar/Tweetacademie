<?php
if(empty($_SESSION['id'])){
  header('Location: index.php?action=');
}
echo "<br>";
require ('Model/member.php');
require ('Repository/UserDataRepository.php');
require ('Repository/TweetsRepository.php');
$UserDataRepository = new UserDataRepository;
$TweetRepository = new TweetsRepository();

// hydratation 
$newMember = $UserDataRepository->getUserById($_SESSION["id"]);
$Member = new Member($newMember);
var_dump($Member);
// postTweet
include('views/home/home.php');
