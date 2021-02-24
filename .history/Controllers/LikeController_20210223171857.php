<?php 
require ('Repository/TweetsRepository.php');
$TweetRepository = new TweetsRepository;
var_dump($_SESSION['id']);
$TweetRepository->likeTweet($_SESSION['id'], $_GET["id_tweet"]);

