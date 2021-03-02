<?php
if(empty($_SESSION['id'])){
  header('Location: index.php?action=');
} 
echo "<br>";
echo "<br>";

echo "<br>";

echo "<br>";

echo "<br>";

require ('Model/member.php');
require ('Repository/UserDataRepository.php');
require ('Repository/TweetsRepository.php');

$UserDataRepository = new UserDataRepository;
$TweetRepository = new TweetsRepository;

// hydratation
$newMember = $UserDataRepository->getUserById($_SESSION["id"]);
$member = new Member($newMember);

// countTweet
$userId = $newMember["ID"];
$countTweet = $TweetRepository->countTweet($userId);



if(!empty($_GET["id_user"])) {
  //tag
  $pseudo = $UserDataRepository->getMemberByPseudo($_GET['pseudo']);
  $_GET['id_user'] = $pseudo["id"];
  //
  $newMember = $UserDataRepository->getUserById($_GET["id_user"]);
  $member = new Member($newMember);
  $getFollowing = $TweetRepository->getFollowing($_GET['id_user']);
  $getFollowers = $TweetRepository->getFollowers((int)$_GET['id_user']);
  $CountFollowing = $TweetRepository->countFollowing($_GET['id_user']);
  $CountFollowers = $TweetRepository->countFollowers((int)$_GET['id_user']);
  $getAllFromFollowings = $TweetRepository->getAllFromFollowing($_GET['id_user']);
  $checkIfSubToMember = $TweetRepository->checkIfSubToMember($_GET['id_user'], $_SESSION["id"]);
  $showMyTweets = $TweetRepository->showMyTweets((int)$_GET['id_user']);


} else {
  $getFollowing = $TweetRepository->getFollowing($_SESSION['id']);
  $getFollowers = $TweetRepository->getFollowers((int)$_SESSION['id']);
  $CountFollowing = $TweetRepository->countFollowing($_SESSION['id']);
  $CountFollowers = $TweetRepository->countFollowers($_SESSION['id']);
  $getAllFromFollowings = $TweetRepository->getAllFromFollowing($_SESSION['id']);
  $showMyTweets = $TweetRepository->showMyTweets((int)$_SESSION['id']);

}




  include('views/profil/profil.php');
