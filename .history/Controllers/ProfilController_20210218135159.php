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
echo "<br>";
echo "<br>";

if(!empty($_GET["id_user"])) {
  $newMember = $UserDataRepository->getUserById($_GET["id_user"]);
  $member = new Member($newMember);
  $getFollowing = $TweetRepository->getFollowing($_GET['id_user']);
  $getFollowers = $TweetRepository->getFollowers((int)$_GET['id_user']);
  $CountFollowing = $TweetRepository->countFollowing($_GET['id_user']);
  $getAllFromFollowings = $TweetRepository->getAllFromFollowing($_GET['id_user']);

}
  $getFollowing = $TweetRepository->getFollowing($_SESSION['id']);
  $getFollowers = $TweetRepository->getFollowers((int)$_SESSION['id']);
  $CountFollowing = $TweetRepository->countFollowing($_SESSION['id']);
  $getAllFromFollowings = $TweetRepository->getAllFromFollowing($_SESSION['id']);


  if(isset($_POST["editProfil"])){

    $updateProfil = $UserDataRepository->updateProfil(
      $_POST["username"],
      $_POST["pseudo"],
      $_POST["bio"],
      $_POST["city"],
      $_POST["link"],
      $_POST["email"],
      $_POST["password"],
      $_POST["id_user"],
    );
  }


include('views/profil/profil.php');
