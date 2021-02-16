<?php
if(empty($_SESSION['id'])){
  header('Location: index.php?action=');
} 
require ('Model/member.php');
require ('Repository/UserDataRepository.php');
require ('Repository/TweetsRepository.php');

$UserDataRepository = new UserDataRepository;
$TweetRepository = new TweetsRepository;

// hydratation
$newMember = $UserDataRepository->getUserById($_SESSION["id"]);
$member = new Member($newMember);

// countTweet
$userId = $newMember["ID_user"];
$countTweet = $TweetRepository->countTweet($userId);

// getFollowing
$getFollowing = $TweetRepository->getFollowing($_SESSION['id']);

// Count Following

$CountFollowing = $TweetRepository->countFollowing($_SESSION['id']);

include('views/profil/profil.php');
