<?php 
require ('Repository/TweetsRepository.php');
$TweetsRepository = new TweetsRepository;
$tweets = $TweetsRepository->showTweets();

if(!empty($_POST["retweet"])){
  $retweet = $TweetsRepository->postRetweet(1, 39);
}

include('views/home/showTweets.php');

