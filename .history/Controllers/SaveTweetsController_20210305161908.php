<?php 
require ('Repository/TweetsRepository.php');
$TweetRepository = new TweetsRepository();
if (empty($_SESSION['id']))
{
    header('Location: index.php?action=home');
}
if(!empty($_POST["postTweet"])){

  $tweet = strip_tags($_POST['postTweet']);
$Text_max = 140;

if(strlen($tweet)>$Text_max){
  
  return false;
}

  $string = strip_tags($_POST["postTweet"]);
  $replace =  preg_replace(['/#(\\w+)/', '/@(\\w+)/'], [
    '<a href=index.php?action=ListHashTag&hashtag=$1>$0</a>', 
    '<a href=index.php?action=tag&pseudo=$1&id_user=>$0</a>'
  ], $string);
  
  
  $TweetRepository->postTweet($_SESSION['id'], $replace);
}