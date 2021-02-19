<?php
require ('Repository/TweetsRepository.php');
$TweetsRepository = new TweetsRepository;
$retweets = $TweetsRepository->showTweets();
include('views/home/showRetweet.php');