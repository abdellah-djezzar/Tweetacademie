<?php 
require ('Repository/TweetsRepository.php');
$TweetsRepository = new TweetsRepository;
if (empty($_SESSION['id']))
{
    header('Location: index.php?action=home');
}
$tweets = $TweetsRepository->showTweets(); //ici j'ai accès à tous les ID tweets et user que j'utilise dans ma vue
$retweets = $TweetsRepository->showRetweet();
$getUser = $TweetsRepository->getUserById($_SESSION['id']);
var_dump($_POST);

include('views/home/showTweets.php');
