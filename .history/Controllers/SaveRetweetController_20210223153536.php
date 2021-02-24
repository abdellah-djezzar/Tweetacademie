<?php 
require ('Repository/TweetsRepository.php');
$TweetsRepository = new TweetsRepository;
$TweetsRepository->postRetweet($_SESSION["id"], $_GET["id_retweet"]);