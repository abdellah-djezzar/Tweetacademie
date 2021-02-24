<?php 
require ('Repository/TweetsRepository.php');
$TweetsRepository = new TweetsRepository;
$tweets = $TweetsRepository->showTweets();
$retweets = $TweetsRepository->showRetweet();
$getUser = $TweetsRepository->getUserById($_SESSION['id']);
// $countLikes = $TweetsRepository->countLikes($tweets['ID']);
var_dump($tweets);
include('views/home/showTweets.php');
