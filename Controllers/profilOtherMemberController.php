<?php 
require('Repository/UserDataRepository.php');
require('Model/member.php');
require('Repository/TweetsRepository.php');
$UserDataRepository = new UserDataRepository;
$TweetsRepository = new TweetsRepository;
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
// get all information from user by ID
$profilMember = $UserDataRepository->getUserById($_GET['id_user']);

$member = new Member($profilMember);
// count tweets
$countTweet = $TweetsRepository->countTweet($_GET['id_user']);

// get followings
$getFollowing = $TweetsRepository->getFollowing($_GET['id_user']);

// count following 
$CountFollowing = $TweetsRepository->countFollowing($_GET['id_user']);

// get All from following 
$getAllFromFollowings = $TweetsRepository->getAllFromFollowing($_GET['id_user']);

include('views/profilOtherMember/profil.php');
  