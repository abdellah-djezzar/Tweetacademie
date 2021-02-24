<?php 
require ('Repository/TweetsRepository.php');
$TweetsRepository = new TweetsRepository;

if(!empty($_POST["postTweet"])){
  $Retweet = $TweetsRepository->postTweet($_SESSION["id"], $_POST["postTweet"]);
}

include('views/home/showTweets.php');

