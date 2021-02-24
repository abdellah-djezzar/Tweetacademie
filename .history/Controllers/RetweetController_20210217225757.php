<?php 
require ('Repository/TweetsRepository.php');
$TweetsRepository = new TweetsRepository;

if(!empty($_POST["postTweet"])){
  $postReTweet = $RetweetRepository->postTweet($_SESSION["id"], $_POST["postTweet"]);
}

include('views/home/showTweets.php');

