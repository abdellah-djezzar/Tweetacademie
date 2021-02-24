<?php 
require ('Repository/TweetsRepository.php');
$TweetRepository = new TweetsRepository;
$TweetRepository->likeTweet($_SESSION['id'], $_GET["id_tweet"]);
$toto = $TweetRepository->countLikes($_GET["id_tweet"]);
var_dump($toto);
