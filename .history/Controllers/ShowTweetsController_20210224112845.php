<?php 
require ('Repository/TweetsRepository.php');
$TweetsRepository = new TweetsRepository;
$tweets = $TweetsRepository->showTweets();
$retweets = $TweetsRepository->showRetweet();
$getUser = $TweetsRepository->getUserById($_SESSION['id']);
$countLikes = $TweetsRepository->countLikes("78");
include('views/home/showTweets.php');
