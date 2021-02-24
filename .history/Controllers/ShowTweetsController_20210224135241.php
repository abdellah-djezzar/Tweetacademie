<?php 
require ('Repository/TweetsRepository.php');
$TweetsRepository = new TweetsRepository;
$tweets = $TweetsRepository->showTweets(); //ici j'ai accès à tous les ID tweets et user que j'utilise dans ma vue
$retweets = $TweetsRepository->showRetweet();
$getUser = $TweetsRepository->getUserById($_SESSION['id']);
// ici j'aurais besoin d'intégrer un id tweet dans checklike et dans une methode counttweets en + de id session
include('views/home/showTweets.php');
