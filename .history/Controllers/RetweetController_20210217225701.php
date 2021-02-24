<?php 
require ('Repository/TweetsRepository.php');
$TweetsRepository = new TweetsRepository;

include('views/home/showTweets.php');

