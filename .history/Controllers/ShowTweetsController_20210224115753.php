<?php 
require ('Repository/TweetsRepository.php');
$TweetsRepository = new TweetsRepository;
$tweets = $TweetsRepository->showTweets(); //ici j'ai accès à tous les ID
$retweets = $TweetsRepository->showRetweet();
$getUser = $TweetsRepository->getUserById($_SESSION['id']);
$checkLikes = $TweetsRepository->checkLikes($_SESSION['id']);
var_dump($checkLikes);
include('views/home/showTweets.php');
