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

$hashtag = $TweetsRepository->getTweetByHashTag($_GET["hashtag"]);
var_dump($hashtag);
include('views/home/hashtagHome.php');