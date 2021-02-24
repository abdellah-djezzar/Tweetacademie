<?php 
require ('Repository/TweetsRepository.php');
$TweetRepository = new TweetsRepository;
$TweetRepository->likeTweet(10, $_GET["id_tweet"]);

