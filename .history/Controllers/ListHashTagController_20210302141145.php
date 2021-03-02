<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php 
if (empty($_SESSION['id']))
{
    header('Location: index.php?action=home');
}
require('Repository/TweetsRepository.php');
$TweetsRepository = new TweetsRepository;

$hashtag = $TweetsRepository->getTweetByHashTag($_GET["hashtag"]);
include('views/home/hashtagHome.php');