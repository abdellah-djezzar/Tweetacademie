<?php 

require('Repository/TweetsRepository.php');
$TweetsRepository = new TweetsRepository;

$hashtag = $TweetsRepository->getTweetByHashTag($_GET["hashtag"]);
var_dump($hashtag);

include('views/test.php');