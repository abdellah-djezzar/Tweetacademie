<?php
if(empty($_SESSION['id'])){
  header('Location: index.php?action=');
}

require ('Model/member.php');
require ('Repository/UsersDataRepository.php');
require ('Repository/TweetsRepository.php');
$UsersDataRepository = new UsersData;
$UserModel = new Member;
$TweetRepository = new TweetsRepository();

// hydratation 
$getUser = $UsersDataRepository->getUserById($_SESSION["id"]);
$UserModel->hydrate($getUser[0]);

// postTweet

include('views/home/home.php');
