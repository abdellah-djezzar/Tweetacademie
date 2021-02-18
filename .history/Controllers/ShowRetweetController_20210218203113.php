<?php
require ('Repository/TweetsRepository.php');
$TweetsRepository = new TweetsRepository;
$retweets = $TweetsRepository->showRetweet();
$tweets = $TweetsRepository->showTweets();
include('views/home/showRetweet.php');