<?php 
require ('Repository/TweetsRepository.php');
$TweetRepository = new TweetsRepository();

// hydratation 
if(!empty($_POST["postTweet"])){
  $postTweet = $TweetRepository->postTweet($_SESSION["id"], $_POST["postTweet"]);
}