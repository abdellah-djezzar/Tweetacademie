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
$userId = $newMember["ID"];
$countTweet = $TweetRepository->countTweet($userId);

if(!empty($_GET["id_user"])) {
  $newMember = $UserDataRepository->getUserById($_GET["id_user"]);
  $member = new Member($newMember);
  $getFollowing = $TweetRepository->getFollowing($_GET['id_user']);
  $getFollowers = $TweetRepository->getFollowers((int)$_GET['id_user']);
  $CountFollowing = $TweetRepository->countFollowing($_GET['id_user']);
  $CountFollowers = $TweetRepository->countFollowers((int)$_GET['id_user']);
  $getAllFromFollowings = $TweetRepository->getAllFromFollowing($_GET['id_user']);
  $showMyTweets = $TweetRepository->showTMyTweets($_SESSION['id']);
  $checkIfSubToMember = $TweetRepository->checkIfSubToMember($_GET['id_user'], $_SESSION["id"]);


} else {
  $getFollowing = $TweetRepository->getFollowing($_SESSION['id']);
  $getFollowers = $TweetRepository->getFollowers((int)$_SESSION['id']);
  $CountFollowing = $TweetRepository->countFollowing($_SESSION['id']);
  $CountFollowers = $TweetRepository->countFollowers($_SESSION['id']);
  $getAllFromFollowings = $TweetRepository->getAllFromFollowing($_SESSION['id']);
}

  if(isset($_POST["profil"])){

    $updateProfil = $UserDataRepository->updateProfil(
      $_POST["username"],
      $_POST["pseudo"],
      $_POST["bio"],
      $_POST["city"],
      $_POST["link"],
      $_SESSION['id'],
    );
  }

  if(!empty($_POST["delete"])){
    $UserDataRepository->disableAccount($_POST['delete']);
    Session_destroy();
    header('Location: ' . $_SERVER['HTTP_REFERER']);
  }


  include('views/profil/profil.php');
