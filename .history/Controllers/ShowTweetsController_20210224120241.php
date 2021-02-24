<?php 
require ('Repository/TweetsRepository.php');
$TweetsRepository = new TweetsRepository;
$tweets = $TweetsRepository->showTweets(); //ici j'ai accès à tous les ID tweets et user que j'utilise dans ma vue
$retweets = $TweetsRepository->showRetweet();
$getUser = $TweetsRepository->getUserById($_SESSION['id']);
// ici j'aurais besoin d'intégrer un id tweets dans checklist et dans une methode counttweets en + de id session
$checkLikes = $TweetsRepository->checkLikes($_SESSION['id']);
include('views/home/showTweets.php');
