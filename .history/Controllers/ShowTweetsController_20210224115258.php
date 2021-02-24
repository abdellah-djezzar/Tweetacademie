<?php 
require ('Repository/TweetsRepository.php');
$TweetsRepository = new TweetsRepository;
$tweets = $TweetsRepository->showTweets(); //ici j'ai accès à tous les ID
$retweets = $TweetsRepository->showRetweet();
$getUser = $TweetsRepository->getUserById($_SESSION['id']);
foreach($tweets as $tweet){
  $countLikes = $TweetsRepository->countLikes($tweet[0]);
}

include('views/home/showTweets.php');
