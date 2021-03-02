<?php
if(empty($_SESSION['id'])){
  header('Location: index.php?action=');
}
require ('Model/member.php');
require ('Repository/UserDataRepository.php');
require ('Repository/TweetsRepository.php');
$UserDataRepository = new UserDataRepository;
$TweetRepository = new TweetsRepository();

// hydratation 
$newMember = $UserDataRepository->getUserById($_SESSION["id"]);
$Member = new Member($newMember);
$_SESSION["user_pseudo"] = $Member[0]["pseudo"];
// postTweet
include('views/home/home.php');
