<?php 
require ('Repository/TweetsRepository.php');
$TweetsRepository = new TweetsRepository;
$toto = $TweetsRepository->postRetweet($_SESSION["id"], $_POST['postTweet']);

var_dump($_POST);