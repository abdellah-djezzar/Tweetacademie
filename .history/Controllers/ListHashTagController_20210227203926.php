<?php 

require('Repository/TweetsRepository.php');
$TweetsRepository = new TweetsRepository;

$hashtag = $TweetsRepository->getTweetByHashTag($_GET["hashtag"]);