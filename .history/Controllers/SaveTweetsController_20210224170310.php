<?php 
require ('Repository/TweetsRepository.php');
$TweetRepository = new TweetsRepository();

if(!empty($_POST["postTweet"])){
  $test = $_POST["postTweet"];
  $last = preg_replace("~(^|\\s)#(\\w*[a-zA-Z0-9_]+\\w*)~", " <_link>tag://$2|#$2</_link> ", $test);$TweetRepository->postTweet($_SESSION["id"], $last);
}
