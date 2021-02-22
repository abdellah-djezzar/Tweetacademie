<?php
require('Repository/MessagesRepository.php');
require('Repository/TweetsRepository.php');
require('Repository/UserDataRepository.php');
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo "<br>";

$getUserId = $userDataRepository->getUserById($_SESSION['id']);
//$member = new Member($getUserId);

//var_dump($member);
