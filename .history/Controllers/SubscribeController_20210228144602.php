<?php 
require('Repository/TweetsRepository.php');
$TweetsRepository = new TweetsRepository;
if (empty($_SESSION['id']))
{
    header('Location: index.php?action=home');
}
if(isset($_POST["user"])){
  $followAMember = $TweetsRepository->followAMember($_POST['user'], $_SESSION['id']);
}