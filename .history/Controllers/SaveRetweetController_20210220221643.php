<?php 
require ('Repository/TweetsRepository.php');
$TweetsRepository = new TweetsRepository;

if(!empty($_POST["retweet"])){
$toto = $TweetsRepository->postRetweet($_POST["id_user"], $_POST["retweet1"]);
var_dump($toto);

}