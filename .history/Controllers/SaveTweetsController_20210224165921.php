<?php 
require ('Repository/TweetsRepository.php');
$TweetRepository = new TweetsRepository();

if(!empty($_POST["postTweet"])){
  $test = $_POST["postTweet"];
  preg_replace(  '/\#([A-Za-z0-9]*)/is', ' <a href="tag/$1"> #$1</a> ', $test);
$TweetRepository->postTweet($_SESSION["id"], $test);
}
