<?php 
require ('Repository/TweetsRepository.php');
$TweetRepository = new TweetsRepository();

if(!empty($_POST["postTweet"])){
  $test = preg_replace(  '/\#([A-Za-z0-9]*)/is', ' <a href="tag/$1"> #$1</a> ', $_POST["postTweet"));
$TweetRepository->postTweet($_SESSION["id"], $test);
}
