<?php 
require ('Repository/TweetsRepository.php');
$TweetRepository = new TweetsRepository();

if(!empty($_POST["postTweet"])){
  $string = $_POST["postTweet"];   
  $text = preg_replace('/#(\\w+)/','<a href=/hash/$1>$0</a>',$string);
  echo $text;   
  $TweetRepository->postTweet($_SESSION["id"], $_POST["postTweet"]);
}

