<?php 
require ('Repository/TweetsRepository.php');
$TweetRepository = new TweetsRepository();

// if(!empty($_POST["postTweet"])){
//   $string = $_POST["postTweet"];   
//   $hashtag = preg_replace('/#(\\w+)/','<a href=/index.php?action=test?id_hash=$1>$0</a>',$string);   
//   $TweetRepository->postTweet($_SESSION["id"], $hashtag);
// }


if(!empty($_POST["postTweet"])){


  $string = $_POST["postTweet"];
  $hashtag = "#";
  $quote = "@";
  if(strpos($string, $hashtag) !== false){
    $replace = preg_replace('/#(\\w+)/','<a href=/index.php?action=test?id_hash=$1>$0</a>',$string);
    $TweetRepository->postTweet($_SESSION['id'], $replace);
  }

  if(strpos($string, $quote) !== false){
    $replace = preg_replace('/#(\\w+)/','<a href=/index.php?action=test?ash=$1>$0</a>',$string);
    $TweetRepository->postTweet($_SESSION['id'], $replace);
  }

}