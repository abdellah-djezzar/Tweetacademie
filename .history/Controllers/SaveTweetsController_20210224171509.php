<?php 
require ('Repository/TweetsRepository.php');
$TweetRepository = new TweetsRepository();

if(!empty($_POST["postTweet"])){
  $expression = "/#+([a-zA-Z0-9_]+)/";  
  $TweetRepository->postTweet($_SESSION["id"], preg_replace($expression, '<a href="hashtag.php?tag=$1">$0</a>', $string));
}
