<?php 
require ('Repository/TweetsRepository.php');
$TweetsRepository = new TweetsRepository;
$toto = $TweetsRepository->postRetweet($_SESSION["id"], $_GET["id_retweet"]);

var_dump($_POST);