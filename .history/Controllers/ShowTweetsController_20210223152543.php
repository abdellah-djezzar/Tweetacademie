<?php 
require ('Repository/TweetsRepository.php');
require ('Repository/UserDataRepository.php');
$TweetsRepository = new TweetsRepository;
$userDataRepository = new UserDataRepository;
$tweets = $TweetsRepository->showTweets();
$retweets = $TweetsRepository->showRetweet();
$getUser = $userDataRepository->getUserById($_SESSION['id']);
include('views/home/showTweets.php');
