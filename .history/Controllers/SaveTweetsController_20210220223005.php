<?php 
require ('Repository/TweetsRepository.php');
$TweetRepository = new TweetsRepository();

if(!empty($_POST["postTweet"])){
$TweetRepository->postTweet($_SESSION["id"], $_POST["postTweet"]);
}

$toto = $TweetsRepository->postRetweet($_POST["id_user"], $_POST["id_tweet"]);


var_dump($toto);