<?php 
require('Repository/UserDataRepository.php');
require('Model/member.php');
require('Repository/TweetsRepository.php');
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo "<br>";
$UserDataRepository = new UserDataRepository;
$TweetsRepository = new TweetsRepository;
// get all information from user by ID
$profilMember = $UserDataRepository->getUserById($_GET['id_user']);

echo $profilMember["lastname"];
$member = new Member($profilMember);


$countTweet = $TweetsRepository->countTweet($_GET['id_user']);

$getFollowing = $TweetsRepository->getFollowing($_GET['id_user']);
var_dump($getFollowing);
include('views/profilOtherMember/profilOtherMember.php');
  