<?php 
require ('Repository/TweetsRepository.php');
$TweetsRepository = new TweetsRepository;
$toto = $TweetsRepository->postRetweet($_POST["id_user"], $_POST["id_tweet"]);
var_dump($toto);