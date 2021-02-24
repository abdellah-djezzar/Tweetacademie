<?php 
require ('Repository/TweetsRepository.php');
$TweetsRepository = new TweetsRepository;

$toto = $TweetsRepository->postRetweet(8, 10);
