<?php
if(empty($_SESSION['id'])){
  header('Location: index.php?action=');
} 
require ('Model/member.php');
require ('Repository/UsersDataRepository.php');
require ('Repository/TweetsRepository.php');
echo "<br>";
echo "<br>";echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
$UsersDataRepository = new UsersData;
$userModel = new Member;
$TweetRepository = new TweetsRepository;

// hydratation
$getUser = $UsersDataRepository->getUserById($_SESSION["id"]);
$userModel->hydrate($getUser[0]);

// countTweet
$userId = $getUser[0]["ID_user"];
$countTweet = $TweetRepository->countTweet($userId);

include('views/profil/profil.php');
