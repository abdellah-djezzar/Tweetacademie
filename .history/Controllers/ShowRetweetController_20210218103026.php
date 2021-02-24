<?php 

require ('Repository/TweetsRepository.php');
$TweetsRepository = new TweetsRepository;
$retweets = $TweetsRepository->showRetweet();
include('views/home/showTweets.php');