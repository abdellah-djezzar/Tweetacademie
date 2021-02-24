<?php 
require ('Repository/TweetsRepository.php');
$TweetRepository = new TweetsRepository();

if(!empty($_POST["postTweet"])){
  $expression = "/#+([a-zA-Z0-9_]+)/";  
  $TweetRepository->postTweet($_SESSION["id"], $_POST["postTweet"]);
}

