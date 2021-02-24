<?php 
require ('Repository/TweetsRepository.php');
$TweetRepository = new TweetsRepository;

$TweetRepository->likeTweet($_SESSION['id'], 70);

