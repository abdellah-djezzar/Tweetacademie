<?php 
require ('Repository/TweetsRepository.php');
$TweetRepository = new TweetsRepository;
$checkLike = $TweetRepository->checkLikes($_SESSION['id'], $_GET["id_tweet"]);

if(empty($checkLike)){
  $TweetRepository->likeTweet($_SESSION['id'], $_GET["id_tweet"]);
  $countTweet = $TweetRepository->countLikes($_GET["id_tweet"]);
}
echo $countTweet[0];
