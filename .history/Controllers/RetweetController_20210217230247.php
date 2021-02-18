<?php 
require ('Repository/TweetsRepository.php');
$TweetsRepository = new TweetsRepository;

if(!empty($_POST["retweet"])){
  $retweet = $TweetsRepository->postRetweet(1, 3);
}

include('views/home/showTweets.php');

