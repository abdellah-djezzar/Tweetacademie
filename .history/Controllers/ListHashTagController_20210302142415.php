<?php 
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

if (empty($_SESSION['id']))
{
    header('Location: index.php?action=home');
}
require('Repository/TweetsRepository.php');
$TweetsRepository = new TweetsRepository;

$hashtags = $TweetsRepository->getTweetByHashTag($_GET["hashtag"]);
include('views/home/hashtagHome.php');