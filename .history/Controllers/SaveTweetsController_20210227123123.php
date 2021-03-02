<?php 
require ('Repository/TweetsRepository.php');
$TweetRepository = new TweetsRepository();

if(!empty($_POST["postTweet"])){
  $string = $_POST["postTweet"];   
  $text = preg_replace('/#(\\w+)/','<a href=/index.php?action=test?id_hash=$1>$0</a>',$string);   
  $TweetRepository->postTweet($_SESSION["id"], $text);
  var_dump($text);
}
