<?php 
require ('Repository/TweetsRepository.php');
$TweetRepository = new TweetsRepository;
$TweetRepository->likeTweet(10, $_POST["id_tweet"]);

