<?php 
require ('Repository/TweetsRepository.php');
$TweetsRepository = new TweetsRepository;

if(!empty($_POST["retweet"])){
  $postRetweet = $TweetsRepository->postRetweet(1, 35);
}
