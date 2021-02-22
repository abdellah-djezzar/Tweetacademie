<?php 
require ('Repository/TweetsRepository.php');
$TweetsRepository = new TweetsRepository;

if(!empty($_POST["retweet"])){
$toto = $TweetsRepository->postRetweet(8, 10);
}