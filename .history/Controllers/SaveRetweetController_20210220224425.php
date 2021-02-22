<?php 
require ('Repository/TweetsRepository.php');
$TweetsRepository = new TweetsRepository;
$toto = $TweetsRepository->postRetweet($_SESSION["id"], 10);

var_dump($_POST);