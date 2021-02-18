<?php 
require ('Repository/TweetsRepository.php');
$TweetsRepository = new TweetsRepository;
$TweetsRepository->showRetweet();

$retweet = $TweetsRepository->postRetweet(1, 35);

include('views/home/showTweets.php');

