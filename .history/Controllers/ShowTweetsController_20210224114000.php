<?php 
require ('Repository/TweetsRepository.php');
$TweetsRepository = new TweetsRepository;
$tweets = $TweetsRepository->showTweets();
$retweets = $TweetsRepository->showRetweet();
$getUser = $TweetsRepository->getUserById($_SESSION['id']);
// $countLikes = $TweetsRepository->countLikes($tweets['ID']);
foreach($tweets as $nbrTweets){
  $countLikes = $TweetsRepository->countLikes($nbrTweets[0]);
}
include('views/home/showTweets.php');
