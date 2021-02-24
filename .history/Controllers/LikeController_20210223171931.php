<?php 
require ('Repository/TweetsRepository.php');
$TweetRepository = new TweetsRepository;
var_dump($_SESSION['id']);
$TweetRepository->likeTweet(10, $_GET["id_tweet"]);

