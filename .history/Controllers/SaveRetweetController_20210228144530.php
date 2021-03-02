<?php 
require ('Repository/TweetsRepository.php');
if (empty($_SESSION['id']))
{
    header('Location: index.php?action=home');
}
$TweetsRepository = new TweetsRepository;
$TweetsRepository->postRetweet($_SESSION["id"], $_GET["id_retweet"]);