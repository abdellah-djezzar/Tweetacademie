<?php 
require ('Repository/TweetsRepository.php');
$TweetsRepository = new TweetsRepository;
$tweets = $TweetsRepository->showTweets(); //ici j'ai accès à tous les ID
$retweets = $TweetsRepository->showRetweet();
$getUser = $TweetsRepository->getUserById($_SESSION['id']);

if(isset($_POST["id_tweet"])){
  $countLikes = $TweetsRepository->countLikes($_POST["id_tweet"]);
  var_dump($countLikes);
}

include('views/home/showTweets.php');
