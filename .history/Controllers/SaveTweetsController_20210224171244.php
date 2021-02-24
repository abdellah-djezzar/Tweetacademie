<?php 
require ('Repository/TweetsRepository.php');
$TweetRepository = new TweetsRepository();

if(!empty($_POST["postTweet"])){
  $string = $_POST["postTweet"];
  preg_replace('/\B#([a-z0-9_-]+)/i', '<a href="https://twitter.com/hashtag/$1" target="_blank">$0</a> ', $string);$TweetRepository->postTweet($_SESSION["id"], preg_replace('/\B#([a-z0-9_-]+)/i', '<a href="https://twitter.com/hashtag/$1" target="_blank">$0</a> ', $string));
}
