<?php 
require ('Repository/TweetsRepository.php');
$TweetRepository = new TweetsRepository();

if(!empty($_POST["postTweet"])){
$TweetRepository->postTweet($_SESSION["id"], $_POST["postTweet"]);
}
