<?php 
require ('Repository/TweetsRepository.php');
$TweetsRepository = new TweetsRepository;
if (empty($_SESSION['id']))
{
    header('Location: index.php?action=home');
}
$tweets = $TweetsRepository->showTweets(); //ici j'ai accès à tous les ID tweets et user que j'utilise dans ma vue
$retweets = $TweetsRepository->showRetweet();
$countTweet = $TweetsRepository->countLikes($_POST["id_tweet"]);
var_dump($countTweet);
$getUser = $TweetsRepository->getUserById($_SESSION['id']);

include('views/home/showTweets.php');
