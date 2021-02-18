<?php 
require ('Repository/TweetsRepository.php');
$TweetsRepository = new TweetsRepository;
$tweets = $TweetsRepository->showTweets();

$retweet = $TweetsRepository->postRetweet(1, 35);

include('views/home/showTweets.php');

