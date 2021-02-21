<?php 
require ('Repository/TweetsRepository.php');
$TweetsRepository = new TweetsRepository;

if(!empty($_POST["retweet"])){
$TweetsRepository->postRetweet($_POST["id_user"], $_POST["retweet1"]);

}