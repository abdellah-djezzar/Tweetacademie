<?php 
require ('Repository/TweetsRepository.php');
$TweetRepository = new TweetsRepository;
$TweetRepository->likeTweet($_GET['id_user'], $_GET["id_tweet"]);

