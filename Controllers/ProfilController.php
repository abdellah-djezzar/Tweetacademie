<?php
if(empty($_SESSION['id'])){
  header('Location: index.php?action=');
} 

function debug(...$var){
  echo "<pre>";
  var_dump($var);
  echo "</pre>";
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

// followAMember 

//$followAMember = $TweetRepository->followAMember()
// Count Following
$CountFollowing = $TweetRepository->countFollowing($_SESSION['id']);

// Get All informations from Followings
$getAllFromFollowings = $TweetRepository->getAllFromFollowing($_SESSION['id']);
// créer un model à partir de ces informations


include('views/profil/profil.php');
