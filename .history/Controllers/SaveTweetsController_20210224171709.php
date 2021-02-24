<?php 
require ('Repository/TweetsRepository.php');
$TweetRepository = new TweetsRepository();

if(!empty($_POST["postTweet"])){
  $expression = "/#+([a-zA-Z0-9_]+)/";  
  $TweetRepository->postTweet($_SESSION["id"], preg_replace('/\B#([a-z0-9_-]+)/i', '<a href="https://twitter.com/hashtag/$1" target="_blank">$0 ', $_POST["postTweet"]));
}

